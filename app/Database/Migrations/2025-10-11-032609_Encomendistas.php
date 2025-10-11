<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Encomendistas extends Migration
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
            'encomendista_nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'encomendista_direccion'       => [
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
        $this->forge->createTable('encomendistas');
    }

    public function down()
    {
        $this->forge->dropTable('encomendistas');
    }
}
