<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FactCabeceras extends Migration
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
            'fact_fecha' => [
                'type' => 'DATE',
            ],
            'cliente_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            "tipo_pago" => [
                "type" => "ENUM",
                "constraint" => "'credito','contado'",
                "default" => "contado",
            ],
            "modalidad" => [
                "type" => "ENUM",
                "constraint" => "'local','encomienda'",
                "default" => "local",
            ],
            'subtotal' => [
                'type' => 'DECIMAL',
                'default' => '0.00',
            ],
            "encomendista_id" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'envio_cobro' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00',
            ],
            'descuento' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00',
            ],
            'total' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00',
            ],
            "estado" => [
                "type" => "ENUM",
                "constraint" => "'pagado','pendiente','anulado'",
                "default" => "pendiente",
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
        $this->forge->addForeignKey('cliente_id', 'clientes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('encomendista_id', 'encomendistas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fact_cabeceras');
    }

    public function down()
    {
        $this->forge->dropTable('fact_cabeceras');

    }
}
