<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Commentaire extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_comment'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'text_comment'       => [
                'type'                      => 'TEXT',
            ],
            'piece_jointe_comme' => [
                'type'                      => 'TEXT',
            ],
            'status_comment'     => [
                'type'                      => 'TEXT',
            ],
            'etat_comment'       => [
                'type'                      => 'INT',
            ],
            'id_stagiaire'       => [
                'type'                      => 'INT',
            ],
             'id_publication'    => [
                'type'                      => 'INT',
            ],
            'created_at'         => [
                'type'                      => 'TIMESTAMP',
            ],
            'updated_at'         => [
                'type'                      => 'TIMESTAMP',
            ],
            'deleted_at'         => [
                'type'                      => 'TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id_comment');
        $this->forge->addForeignKey('id_stagiaire', 'stagiaire', 'id_stagiaire');
        $this->forge->addForeignKey('id_publication', 'publication', 'id_publication');
        $this->forge->createTable('commentaire');
    }

    public function down()
    {
            $this->forge->dropTable('commentaire');
    }
}
