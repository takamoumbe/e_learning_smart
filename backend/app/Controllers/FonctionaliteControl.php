<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Login extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> Liste toutes les questions 
    #- use: 
    #-
    public function listAll()
    {

    }

    #@-- 2 --> Liste une questions 
    #- use: 
    #-
    public function listOne($id)
    {

    }

    #@-- 3 --> supprime une questions 
    #- use: 
    #-
    public function delete($id)
    {

    }

    #@-- 4 --> enregistre une question
    #- use: 
    #-
    public function save()
    {

    }
}
