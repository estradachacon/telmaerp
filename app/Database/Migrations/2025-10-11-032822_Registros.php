<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Registros extends Migration
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
            'usuario_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'accion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'detalle' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('registros');
    }

    public function down()
    {
        $this->forge->dropTable('registros');
    }
}
