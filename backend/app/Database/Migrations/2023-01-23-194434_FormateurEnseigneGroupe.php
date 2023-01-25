<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormateurEnseigneGroupe extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_enseigne'            => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'id_formateur'           => [
                'type'                      => 'INT',
            ],
            'id_groupe'              => [
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
        $this->forge->addPrimaryKey('id_enseigne');
        $this->forge->addForeignKey('id_formateur',    'formateur',    'id_formateur');
        $this->forge->addForeignKey('id_groupe',       'groupe',       'id_groupe');
        $this->forge->createTable('enseigne');
    }

    public function down()
    {
        $this->forge->dropTable('enseigne');
    }
}
