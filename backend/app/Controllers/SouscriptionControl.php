<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Login extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> Liste toutes les souscriptions 
    #- use: 
    #-
    public function listAll()
    {

    }

    #@-- 2 --> Liste une souscription
    #- use: 
    #-
    public function listOne($id)
    {

    }

    #@-- 3 --> supprime une souscription 
    #- use: 
    #-
    public function delete($id)
    {

    }

    #@-- 4 --> enregistre une souscriptions
    #- use: 
    #-
    public function save()
    {

    }

    #@-- 5 --> repond a une souscriptions 
    #- use: 
    #-
    public function response()
    {

    }

    #@-- 6 --> desactive une souscriptions 
    #- use: 
    #-
    public function disable()
    {
        
    }

    #@-- 7 --> active une souscriptions 
    #- use: 
    #-
    public function enable()
    {
        
    }
}
