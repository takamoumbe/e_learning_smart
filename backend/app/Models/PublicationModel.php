<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicationModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'publication';
    protected $primaryKey       = 'id_publication';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_publication',
        'titre_publication',
        'texte_publication',
        'piece_jointe',
        'etat_publication',
        'id_forum',
        'id_stagiaire',
        'status_publication',
        'created_at',
        'updated_at',
        'deleted_at',
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
