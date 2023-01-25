<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Formateur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_formateur'           => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'login_formateur'        => [
                'type'                      => 'TEXT',
            ],
            'pass_formateur'         => [
                'type'                      => 'TEXT',
            ],
            'email'                  => [
                'type'                      => 'TEXT',
            ],
            'description_formateur'  => [
                'type'                      => 'TEXT',
            ],
            'type_formateur'         => [
                'type'                      => 'TEXT',
            ],
            'status_formateur'       => [
                'type'                      => 'TEXT',
            ],
            'etat_formateur'         => [
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
        $this->forge->addPrimaryKey('id_formateur');
        $this->forge->createTable('formateur');
    }

    public function down()
    {
        $this->forge->dropTable('formateur');
    }
}
