<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Forum extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_forum'               => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'intituler'              => [
                'type'                      => 'TEXT',
            ],
            'presentation'           => [
                'type'                      => 'TEXT',
            ],
            'etat_forum'             => [
                'type'                      => 'INT',
            ],
            'status_forum'           => [
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
        $this->forge->addPrimaryKey('id_forum');
        $this->forge->createTable('forum');
    }

    public function down()
    {
        $this->forge->dropTable('forum');
    }
}
