<?php

namespace App\Models;
 
use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'question';
    protected $primaryKey       = 'id_question';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_question',
        'contenue',
        'reponse',
        'status_question',
        'etat_question',
        'id_stagiaire',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Dates
    protected $useTimestamps = false;
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

    public function getQues_resp(){
        $builder = $this->db->table('question');
        $builder->where('etat_question', 0);
        $builder->where('reponse !=', '');
        $builder->orderBy('id_question', 'DESC');
        $builder->select('*');
        $res = $builder->get();
        return $res->getResultArray();
    }
}
