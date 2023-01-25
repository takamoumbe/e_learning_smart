<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_post'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'titre_post'      => [
                'type'                      => 'TEXT',
            ],
            'texte_post'      => [
                'type'                      => 'TEXT',
            ],
            'document'        => [
                'type'                      => 'TEXT',
            ],
            'genre'           => [
                'type'                      => 'INT',
            ],
            'etat_post'       => [
                'type'                      => 'INT',
            ],
            'id_groupe'       => [
                'type'                      => 'INT',
            ],
            'id_formateur'    => [
                'type'                      => 'INT',
            ],
             'status_post'    => [
                'type'                      => 'TEXT',
            ],
            'created_at'      => [
                'type'                      => 'TIMESTAMP',
            ],
            'updated_at'      => [
                'type'                      => 'TIMESTAMP',
            ],
            'deleted_at'      => [
                'type'                      => 'TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id_post');
        $this->forge->addForeignKey('id_groupe', 'groupe', 'id_groupe');
        $this->forge->addForeignKey('id_formateur', 'formateur', 'id_formateur');
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
