<?php

namespace App\Models;

use CodeIgniter\Model;

class StagiaireModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'stagiaire';
    protected $primaryKey       = 'id_stagiaire';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_stagiaire',
        'login_stagiaire',
        'pass_stagiaire',
        'email_stagiaire',
        'nom_stagiaire',
        'prenom_stagiaire',
        'date_naiss',
        'sexe_stagiaire',
        'image_profil',
        'specialite',
        'etat_stagiaire',
        'status_stagiaire',
        'id_groupe',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
