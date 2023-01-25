<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Message extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_message'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'contenue_message'   => [
                'type'                      => 'TEXT',
            ],
            'etat_message'       => [
                'type'                      => 'INT',
            ],
            'status_message'     => [
                'type'                      => 'TEXT',
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
        $this->forge->addPrimaryKey('id_message');
        $this->forge->addForeignKey('id_stagiaire', 'stagiaire', 'id_stagiaire');
        $this->forge->createTable('message');
    }

    public function down()
    {
            $this->forge->dropTable('message');
    }
}
