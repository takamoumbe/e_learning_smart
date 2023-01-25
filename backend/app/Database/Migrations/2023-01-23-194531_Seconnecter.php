<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Seconnecter extends Migration
{
   public function up()
    {
        $this->forge->addField([
            'id_connect'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'status'             => [
                'type'                      => 'TEXT',
            ],
            'id_date_connect'    => [
                'type'                      => 'INT',
            ],
            'id_stagiaire'       => [
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
        $this->forge->addPrimaryKey('id_connect');
        $this->forge->addForeignKey('id_date_connect',    'dateconnect',    'id_date_connect');
        $this->forge->addForeignKey('id_stagiaire',    'stagiaire',    'id_stagiaire');
        $this->forge->createTable('seconnecter');
    }

    public function down()
    {
            $this->forge->dropTable('seconnecter');
    }
}
