<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stagiaire extends Migration
{
    public function up()
    { 
        $this->forge->addField([
            'id_stagiaire'         => [
                'type'                      => 'INT',
                'auto_increment'            => true,
                'null'                      => false
            ],
            'login_stagiaire'      => [
                'type'                      => 'TEXT',
            ],
            'pass_stagiaire'       => [
                'type'                      => 'TEXT',
            ],
            'email_stagiaire'      => [
                'type'                      => 'TEXT',
            ],
            'nom_stagiaire'        => [
                'type'                      => 'TEXT',
            ],
            'prenom_stagiaire'     => [
                'type'                      => 'TEXT',
            ],
            'date_naiss'           => [
                'type'                      => 'TEXT',
            ],
            'sexe_stagiaire'       => [
                'type'                      => 'TEXT',
            ],
            'image_profil'         => [
                'type'                      => 'TEXT',
            ],
            'specialite'           => [
                'type'                      => 'TEXT',
            ],
            'etat_stagiaire'       => [
                'type'                      => 'INT',
            ],
            'status_stagiaire'     => [
                'type'                      => 'TEXT',
            ],
            'id_groupe'            => [
                'type'                      => 'INT',
            ],
            'created_at'           => [
                'type'                      => 'TIMESTAMP',
            ],
            'updated_at'           => [
                'type'                      => 'TIMESTAMP',
            ],
            'deleted_at'           => [
                'type'                      => 'TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id_stagiaire');
        $this->forge->addForeignKey('id_groupe', 'groupe', 'id_groupe');
        $this->forge->createTable('stagiaire');
    }

    public function down()
    {
            $this->forge->dropTable('stagiaire');
    }
}
