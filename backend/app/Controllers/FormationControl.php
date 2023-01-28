<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class FormationControl extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> Liste toutes les formatteurs 
    #- use: 
    #-
    public function listAll()
    {

    }

    #@-- 2 --> Liste un formateur 
    #- use: 
    #-
    public function listOne($id)
    {

    }

    #@-- 3 --> supprime un formateur 
    #- use: 
    #-
    public function delete($id)
    {

    }

    #@-- 4 --> enregistre un formateur
    #- use: 
    #-
    public function save()
    {
        
    }

    #@-- 5 --> desactiver un formateur
    #- use: 
    #-
    public function disable()
    {

    }

    #@-- 6 --> activer un formateur
    #- use: 
    #-
    public function enable()
    {

    }    

}
