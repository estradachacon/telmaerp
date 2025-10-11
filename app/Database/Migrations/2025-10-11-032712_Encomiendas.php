<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Encomiendas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "fact_cabeceras_id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true
            ],
            'destino_encomienda'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pago_de_encomienda'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            "encomienda_estatus" => [
                "type" => "ENUM",
                "constraint" => "'transito','retirado','no_retirado'",
                "default" => "transito",
            ],
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("encomiendas");
    }

    public function down()
    {
        $this->forge->dropTable("encomiendas");
    }
}
