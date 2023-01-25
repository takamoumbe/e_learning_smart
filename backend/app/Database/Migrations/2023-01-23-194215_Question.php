<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Question extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_question'            => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'contenue'               => [
                'type'                      => 'TEXT',
            ],
             'reponse'               => [
                'type'                      => 'TEXT',
            ],
            'status_question'        => [
                'type'                      => 'TEXT',
            ],
            'etat_question'          => [
                'type'                      => 'INT',
            ],
            'id_formateur'           => [
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
        $this->forge->addPrimaryKey('id_question');
        // $this->forge->addForeignKey('id_formateur', 'formateur', 'id_formateur');
        $this->forge->createTable('question');
    }

    public function down()
    {
        $this->forge->dropTable('question');
    }
}
