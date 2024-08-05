<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            ['id' => 1, 'codigo_producto' => '001', 'nombre_producto' => 'Alcohol (canecas)', 'fecha_producto' => '2024-07-14', 'hora_producto' => '19:56:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 2, 'codigo_producto' => '002', 'nombre_producto' => 'Arnés de cuerpo completo 4 anclajes', 'fecha_producto' => '2024-07-14', 'hora_producto' => '11:17:00', 'stock_producto' => 16, 'estado_producto' => 1],
            ['id' => 3, 'codigo_producto' => '003', 'nombre_producto' => 'Baterías', 'fecha_producto' => '2024-07-14', 'hora_producto' => '20:36:00', 'stock_producto' => 41, 'estado_producto' => 1],
            ['id' => 4, 'codigo_producto' => '004', 'nombre_producto' => 'Bomba para fumigar', 'fecha_producto' => '2024-07-14', 'hora_producto' => '09:48:00', 'stock_producto' => 95, 'estado_producto' => 1],
            ['id' => 5, 'codigo_producto' => '005', 'nombre_producto' => 'Botas amarillas PVC', 'fecha_producto' => '2024-07-14', 'hora_producto' => '22:03:00', 'stock_producto' => 45, 'estado_producto' => 1],
            ['id' => 6, 'codigo_producto' => '006', 'nombre_producto' => 'Botas de PVC con puntas de acero', 'fecha_producto' => '2024-07-14', 'hora_producto' => '17:30:00', 'stock_producto' => 2, 'estado_producto' => 1],
            ['id' => 7, 'codigo_producto' => '007', 'nombre_producto' => 'Casco de Seguridad', 'fecha_producto' => '2024-07-15', 'hora_producto' => '12:59:00', 'stock_producto' => 6, 'estado_producto' => 1],
            ['id' => 8, 'codigo_producto' => '008', 'nombre_producto' => 'Cinturón lumbar', 'fecha_producto' => '2024-08-03', 'hora_producto' => '19:23:00', 'stock_producto' => 1, 'estado_producto' => 1],
            ['id' => 9, 'codigo_producto' => '009', 'nombre_producto' => 'Conos 70cm', 'fecha_producto' => '2024-07-14', 'hora_producto' => '22:03:00', 'stock_producto' => 1, 'estado_producto' => 1],
            ['id' => 10, 'codigo_producto' => '010', 'nombre_producto' => 'Filtro para respiradores (cartucho 6003)', 'fecha_producto' => '2024-08-03', 'hora_producto' => '19:22:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 11, 'codigo_producto' => '011', 'nombre_producto' => 'Filtros mascarillas', 'fecha_producto' => '2024-07-14', 'hora_producto' => '20:36:00', 'stock_producto' => 57, 'estado_producto' => 1],
            ['id' => 12, 'codigo_producto' => '012', 'nombre_producto' => 'Frascos insecticidas', 'fecha_producto' => '2024-07-14', 'hora_producto' => '23:50:00', 'stock_producto' => 9, 'estado_producto' => 1],
            ['id' => 13, 'codigo_producto' => '013', 'nombre_producto' => 'Gafas protectoras oscuras', 'fecha_producto' => '2024-07-14', 'hora_producto' => '18:04:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 14, 'codigo_producto' => '014', 'nombre_producto' => 'Gafas protectoras transparentes', 'fecha_producto' => '2024-07-14', 'hora_producto' => '18:04:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 15, 'codigo_producto' => '015', 'nombre_producto' => 'Guantes de precisión', 'fecha_producto' => '2024-07-21', 'hora_producto' => '21:11:00', 'stock_producto' => 2, 'estado_producto' => 1],
            ['id' => 16, 'codigo_producto' => '016', 'nombre_producto' => 'Guantes dieléctricos', 'fecha_producto' => '2024-07-14', 'hora_producto' => '18:05:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 17, 'codigo_producto' => '017', 'nombre_producto' => 'Guantes PVC', 'fecha_producto' => '2024-07-14', 'hora_producto' => '18:05:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 18, 'codigo_producto' => '018', 'nombre_producto' => 'Guantes químicos 40 extralargo', 'fecha_producto' => '2024-07-19', 'hora_producto' => '21:05:00', 'stock_producto' => 12, 'estado_producto' => 1],
            ['id' => 19, 'codigo_producto' => '019', 'nombre_producto' => 'Impermeable c12', 'fecha_producto' => '2024-07-23', 'hora_producto' => '18:51:00', 'stock_producto' => 19, 'estado_producto' => 1],
            ['id' => 20, 'codigo_producto' => '020', 'nombre_producto' => 'Impermeables (amarillos)', 'fecha_producto' => '2024-07-31', 'hora_producto' => '09:49:00', 'stock_producto' => 34, 'estado_producto' => 1],
            ['id' => 21, 'codigo_producto' => '021', 'nombre_producto' => 'Impermeables (azules)', 'fecha_producto' => '2024-07-14', 'hora_producto' => '09:49:00', 'stock_producto' => 3, 'estado_producto' => 1],
            ['id' => 22, 'codigo_producto' => '022', 'nombre_producto' => 'Jabón', 'fecha_producto' => '2024-07-14', 'hora_producto' => '17:30:00', 'stock_producto' => 0, 'estado_producto' => 0, 'created_at' => NULL, 'updated_at' => '2024-08-04 22:51:30'],
            ['id' => 23, 'codigo_producto' => '023', 'nombre_producto' => 'Kit de primeros auxilios', 'fecha_producto' => '2024-07-14', 'hora_producto' => '17:30:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 24, 'codigo_producto' => '024', 'nombre_producto' => 'Macareñas', 'fecha_producto' => '2024-07-14', 'hora_producto' => '22:01:00', 'stock_producto' => 30, 'estado_producto' => 1],
            ['id' => 25, 'codigo_producto' => '025', 'nombre_producto' => 'Manguera fumigación', 'fecha_producto' => '2024-07-14', 'hora_producto' => '17:29:00', 'stock_producto' => 4, 'estado_producto' => 1],
            ['id' => 26, 'codigo_producto' => '026', 'nombre_producto' => 'Mascarillas antiempañantes', 'fecha_producto' => '2024-07-14', 'hora_producto' => '18:04:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 27, 'codigo_producto' => '027', 'nombre_producto' => 'Overol Tyvek (Dupont)', 'fecha_producto' => '2024-07-14', 'hora_producto' => '09:53:00', 'stock_producto' => 37, 'estado_producto' => 1],
            ['id' => 28, 'codigo_producto' => '028', 'nombre_producto' => 'Respiradores (medios y completos)', 'fecha_producto' => '2024-08-03', 'hora_producto' => '19:24:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 29, 'codigo_producto' => '029', 'nombre_producto' => 'Señalización', 'fecha_producto' => '2024-07-14', 'hora_producto' => '18:03:00', 'stock_producto' => 0, 'estado_producto' => 0],
            ['id' => 30, 'codigo_producto' => '030', 'nombre_producto' => 'Trapos rojos', 'fecha_producto' => '2024-07-14', 'hora_producto' => '23:50:00', 'stock_producto' => 6, 'estado_producto' => 1],
            ['id' => 31, 'codigo_producto' => '031', 'nombre_producto' => 'Uniforme azul', 'fecha_producto' => '2024-07-31', 'hora_producto' => '18:55:00', 'stock_producto' => 22, 'estado_producto' => 1],
        ];

        foreach ($productos as $producto) {
            Productos::updateOrCreate(['id' => $producto['id']], $producto);
        }
    }
}
