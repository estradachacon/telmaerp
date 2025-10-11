<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MovimientosDeInventario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'producto_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'cantidad' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'tipo_movimiento' => [
                'type' => 'ENUM',
                'constraint' => ['entrada', 'salida'],
            ],
            'costo_promedio' => [
                'type' => 'DECIMAL',
                'constraint' => '11,3',
                'default' => '0.00',
            ],
            'usuario_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('producto_id', 'productos', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('movimientos_de_inventario');
    }

    public function down()
    {
        $this->forge->dropTable('movimientos_de_inventario');
    }
}
