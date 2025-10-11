<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Compras extends Migration
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
            'comp_fecha'       => [
                'type'       => 'DATE',
            ],
            'proveedor_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            "tipo_pago" => [
                "type" => "ENUM",
                "constraint" => "'credito','contado'",
                "default" => "contado",
            ],
            'total_compra'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'=> '0.00',
            ],
            "modalidad_pago" => [
                "type" => "ENUM",
                "constraint" => "'contado','credito'",
                "default" => "contado",
            ],
            "estado" => [
                "type" => "ENUM",
                "constraint" => "'pendiente','pagado'",
                "default" => "pendiente",
            ],
            "observacion" => [
                "type" => "TEXT",
                "null" => true,
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
        $this->forge->addForeignKey('proveedor_id', 'proveedores', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('compras');
    }

    public function down()
    {
        $this->forge->dropTable('compras');
    }
}
