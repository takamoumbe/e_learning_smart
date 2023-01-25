<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DateConect extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_date_connect'   => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
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
        $this->forge->addPrimaryKey('id_date_connect');
        $this->forge->createTable('dateconnect');
    }

    public function down()
    {
            $this->forge->dropTable('dateconnect');
    }
}
