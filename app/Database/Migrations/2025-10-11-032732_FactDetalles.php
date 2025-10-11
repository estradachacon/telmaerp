<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FactDetalles extends Migration
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
            'fact_cabecera_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'producto_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
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
            'costo_actual'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            'total_detalle'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('fact_cabecera_id', 'fact_cabeceras', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('producto_id', 'productos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fact_detalles');
    }

    public function down()
    {
        $this->forge->dropTable('fact_detalles');
    }
}
