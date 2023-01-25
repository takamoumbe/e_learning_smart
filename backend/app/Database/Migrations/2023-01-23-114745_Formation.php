<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Formation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_formation'          => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'nom_formation'         => [
                'type'                      => 'TEXT',
            ],
            'etat_formation'        => [
                'type'                      => 'INT',
            ],
            'status_formation'      => [
                'type'                      => 'TEXT',
            ],
            'description'           => [
                'type'                      => 'TEXT',
            ],
            'created_at'            => [
                'type'                      => 'TIMESTAMP',
            ],
            'updated_at'            => [
                'type'                      => 'TIMESTAMP',
            ],
            'deleted_at'            => [
                'type'                      => 'TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id_formation');
        $this->forge->createTable('formation');
    }

    public function down()
    {
        $this->forge->dropTable('formation');
    }
}
