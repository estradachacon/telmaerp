<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gastos extends Migration
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
            'tipo_gasto' => [
                'type' => 'ENUM',
                'constraint' => ['compra', 'encomienda', 'servicio', 'planilla', 'representacion', 'otro'],
                'default' => 'compra',
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'monto' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00',
            ],
            'fecha_gasto' => [
                'type' => 'DATE',
            ],
            'compra_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'pago_encomienda' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'estado' => [
                'type' => 'ENUM',
                'constraint' => ['pendiente', 'pagado'],
                'default' => 'pendiente',
            ],
            'observacion' => [
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
        $this->forge->addForeignKey('pago_encomienda', 'encomiendas', 'pago_de_encomienda', 'CASCADE', 'CASCADE');
        $this->forge->createTable('gastos');
    }

    public function down()
    {
        $this->forge->dropForeignKey('gastos', 'compra_id');
        $this->forge->dropTable('gastos');
    }
}
