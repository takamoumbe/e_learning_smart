<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
 
class User extends BaseController
{
    use ResponseTrait;
     
    public function ListeUserView(){
        return view('listeUser');
    }

    public function listusers()
    {
        $users = new UserModel;
        return $this->respond(['users' => $users->findAll()], 200);
    }
}