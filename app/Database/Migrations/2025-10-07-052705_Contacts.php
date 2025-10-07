<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacts extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'TEXT',
                'constraint' => '100',
                'null' => false
            ],
            'contact_phone' => [
                'type' => 'TEXT',
                'constraint' => '15',
                'null' => false
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}
