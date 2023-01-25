<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Groupe extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id_groupe'             => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'nom_groupe'            => [
                'type'                      => 'TEXT',
            ],
            'etat_groupe'           => [
                'type'                      => 'INT',
            ],
            'status_groupe'         => [
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
        $this->forge->addPrimaryKey('id_groupe');
        $this->forge->createTable('groupe');
    }

    public function down()
    {
        $this->forge->dropTable('groupe');
    }
}
