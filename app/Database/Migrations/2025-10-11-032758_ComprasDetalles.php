<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ComprasDetalles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'compra_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'producto_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'cantidad'       => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'=> 1,
            ],
            'precio_unitario'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            'subtotal'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('producto_id', 'productos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('compra_id', 'compras', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('compras_detalles');
    }

    public function down()
    {
        $this->forge->dropTable('compras_detalles');
    }
}
