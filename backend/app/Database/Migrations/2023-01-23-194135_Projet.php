<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Projet extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_projet'              => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'nom_projet'             => [
                'type'                      => 'TEXT',
            ],
            'description_project'    => [
                'type'                      => 'TEXT',
            ],
            'image'                  => [
                'type'                      => 'TEXT',
            ],
            'liens'                  => [
                'type'                      => 'TEXT',
            ],
            'status_projet'          => [
                'type'                      => 'TEXT',
            ],
            'etat_projet'            => [
                'type'                      => 'INT',
            ],
            'id_stagiaire'           => [
                'type'                      => 'INT',
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
        $this->forge->addPrimaryKey('id_projet');
        $this->forge->addForeignKey('id_stagiaire', 'stagiaire', 'id_stagiaire');
        $this->forge->createTable('projet');
    }

    public function down()
    {
        $this->forge->dropTable('projet');
    }
}
