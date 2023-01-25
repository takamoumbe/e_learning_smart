<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GroupeFormation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_suivre'              => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'id_formation'           => [
                'type'                      => 'INT',
            ],
            'id_groupe'              => [
                'type'                      => 'INT',
            ],
            'etat_suivre'            => [
                'type'                      => 'INT',
            ],
            'status_suivre'          => [
                'type'                      => 'TEXT',
            ],
            'created_at'             => [
                'type'                      => 'TIMESTAMP',
            ],
            'updated_at'             => [
                'type'                      => 'TIMESTAMP',
            ],
            'deleted_at'             => [
                'type'                      => 'TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id_suivre');
        $this->forge->addForeignKey('id_formation', 'formation', 'id_formation');
        $this->forge->addForeignKey('id_groupe', 'groupe', 'id_groupe');
        $this->forge->createTable('suivre');
    }

    public function down()
    {
        $this->forge->dropTable('suivre');
    }
}
