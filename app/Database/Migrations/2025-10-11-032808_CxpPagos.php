<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CxpPagos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'compra_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'monto_pago_cxp' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            'fecha_pago' => [
                'type' => 'DATE',
            ],
            'metodo_pago' => [
                'type' => 'ENUM',
                'constraint' => ['efectivo','tarjeta','transferencia','cheque'],
                'default' => 'efectivo',
            ],
            'comentario' => [
                'type' => 'TEXT',
                'null' => true,
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
        $this->forge->addForeignKey('compra_id', 'compras', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cxp_pagos');
    }

    public function down()
    {
        $this->forge->dropTable('cxp_pagos');
    }
}
