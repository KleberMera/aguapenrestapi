<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        CREATE TRIGGER actualizar_stock_a AFTER UPDATE ON registro_areas
        FOR EACH ROW
        BEGIN
            DECLARE cantidad_actual INT;
            DECLARE producto_id BIGINT;
            DECLARE done INT DEFAULT 0;

            -- Declaración del cursor
            DECLARE cur_detalles CURSOR FOR 
            SELECT id_producto, cantidad 
            FROM registro_detalle_areas
            WHERE id_registro_area = NEW.id;

            -- Manejador para cuando el cursor alcanza el final
            DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

            -- Solo ejecuta si cambia el estado_registro
            IF OLD.estado_registro != NEW.estado_registro THEN
                OPEN cur_detalles;

                -- Ejecuta la lógica para el primer registro
                FETCH cur_detalles INTO producto_id, cantidad_actual;
                WHILE done = 0 DO
                    IF NEW.estado_registro = 0 THEN
                        -- Incrementa el stock si el estado_registro es 0
                        UPDATE productos 
                        SET stock_producto = stock_producto + cantidad_actual 
                        WHERE id = producto_id;
                    ELSEIF NEW.estado_registro = 1 THEN
                        -- Decrementa el stock si el estado_registro es 1
                        UPDATE productos 
                        SET stock_producto = stock_producto - cantidad_actual 
                        WHERE id = producto_id;
                    END IF;

                    -- Obtén el siguiente registro
                    FETCH cur_detalles INTO producto_id, cantidad_actual;
                END WHILE;

                CLOSE cur_detalles;
            END IF;
        END;
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS actualizar_stock_a;');
    }
};
