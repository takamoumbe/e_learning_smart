<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class FonctionaliteControl extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> Liste toutes les fonctionnalites 
    #- use: 
    #-
    public function listAll()
    {

    }

    #@-- 2 --> Liste une fonctionnalites 
    #- use: 
    #-
    public function listOne($id)
    {

    }

    #@-- 3 --> supprime une fonctionnalites 
    #- use: 
    #-
    public function delete($id)
    {

    }

    #@-- 4 --> enregistre une fonctionnalites
    #- use: 
    #-
    public function save()
    {

    }

    #@-- 5 --> desactiver une fonctionnalites
    #- use: 
    #-
    public function disable()
    {

    }

    #@-- 6 --> activer une fonctionnalites
    #- use: 
    #-
    public function enable()
    {

    }  
}
