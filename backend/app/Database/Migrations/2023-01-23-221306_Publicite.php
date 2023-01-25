<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Publicite extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id_publicite'          => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'titre_publicite'       => [
                'type'                      => 'TEXT',
            ],
            'desc_publicite'        => [
                'type'                      => 'TEXT',
            ],
            'image_publicite'       => [
                'type'                      => 'TEXT',
            ],
            'etat_publicite'        => [
                'type'                      => 'INT',
            ],
            'id_formateur'          => [
                'type'                      => 'INT',
            ],
            'status_publicite'      => [
                'type'                      => 'TEXT',
            ],
            'created_at'            => [
                'type'                      => 'TIMESTAMP',
            ],
            'updated_at'            => [
                'type'                      => 'TIMESTAMP',
            ],
            'deleted_at'            => [
                'type'                      => 'TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id_publicite');
        $this->forge->addForeignKey('id_formateur',    'formateur',    'id_formateur');
        $this->forge->createTable('publicite');
    }

    public function down()
    {
        $this->forge->dropTable('publicite');
    }
}
