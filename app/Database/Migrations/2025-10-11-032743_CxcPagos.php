<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CxcPagos extends Migration
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
            'factura_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'factura_total'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            'pago_fecha'       => [
                'type'       => 'DATE',
            ],
            'monto_pago'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            'comentario'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addForeignKey('factura_id', 'fact_cabeceras', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('factura_total', 'fact_cabeceras', 'total', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cxc_pagos');
    }

    public function down()
    {
        $this->forge->dropTable('cxc_pagos');
    }
}
