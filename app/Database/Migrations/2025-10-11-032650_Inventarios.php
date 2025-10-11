<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventarios extends Migration
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
            'productos_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'existencias'       => [
                'type'       => 'INT',
                'default'=> '0',
            ],
            'costo_actual'       => [
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
        $this->forge->addForeignKey('productos_id', 'productos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('inventarios');
    }
    

    public function down()
    {
        $this->forge->dropTable("inventarios");
    }
}
