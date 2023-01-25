<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fonctionalite extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_fonction'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'type_fonction'      => [
                'type'                      => 'TEXT',
            ],
            'etat_fonction'      => [
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
        $this->forge->addPrimaryKey('id_fonction');
        $this->forge->createTable('fonctionnalite');
    }

    public function down()
    {
            $this->forge->dropTable('fonctionnalite');
    }
}
