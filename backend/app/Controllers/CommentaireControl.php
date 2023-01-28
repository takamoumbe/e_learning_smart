<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class CommentaireControl extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> Liste toutes les commentaires 
    #- use: 
    #-
    public function listAll()
    {

    }

    #@-- 2 --> Liste un commentaire 
    #- use: 
    #-
    public function listOne($id)
    {

    }

    #@-- 3 --> supprime un commentaire 
    #- use: 
    #-
    public function delete($id)
    {

    }

    #@-- 4 --> enregistre un commentaire
    #- use: 
    #-
    public function save()
    {

    }
    
}
