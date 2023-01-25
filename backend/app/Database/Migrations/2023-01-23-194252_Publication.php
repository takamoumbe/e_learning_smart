<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Publication extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_publication'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'titre_publication'      => [
                'type'                      => 'TEXT',
            ],
            'texte_publication'      => [
                'type'                      => 'TEXT',
            ],
            'piece_jointe'           => [
                'type'                      => 'TEXT',
            ],
            'etat_publication'       => [
                'type'                      => 'INT',
            ],
            'id_forum'               => [
                'type'                      => 'INT',
            ],
            'id_stagiaire'           => [
                'type'                      => 'INT',
            ],
             'status_publication'    => [
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
        $this->forge->addPrimaryKey('id_publication');
        $this->forge->addForeignKey('id_forum', 'forum', 'id_forum');
        $this->forge->addForeignKey('id_stagiaire', 'stagiaire', 'id_stagiaire');
        $this->forge->createTable('publication');
    }

    public function down()
    {
        $this->forge->dropTable('publication');
    }
}
