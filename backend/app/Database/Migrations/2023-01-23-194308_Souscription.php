<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Souscription extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_souscrip'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'email'      => [
                'type'                      => 'TEXT',
            ],
            'ip_address'      => [
                'type'                      => 'TEXT',
            ],
            'etat_sous'        => [
                'type'                      => 'INT',
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
        $this->forge->addPrimaryKey('id_souscrip');
        $this->forge->createTable('souscription');
    }

    public function down()
    {
            $this->forge->dropTable('souscription');
    }
}
