<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use \Firebase\JWT\JWT;

class Login extends ResourcePresenter
{
    use ResponseTrait;

    public function index()
    { 
        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $userModel->where('email', $email)->first();
   
        if(is_null($user)) {
            return $this->respond(['error' => 'Invalid username or password.', 'success' => false], 401);
        }
   
        $pwd_verify = password_verify($password, $user['password']);
   
        if(!$pwd_verify) {
            return $this->respond(['error' => 'Invalid username or password.', 'success' => false], 401);
        }
  
        $key = getenv('JWT_SECRET');
        
        $iat = time(); // current timestamp value
        $exp = $iat + 3600;
  
        $payload = array(
            "iss" => "Issuer of the JWT",
            "aud" => "Audience that the JWT",
            "sub" => "Subject of the JWT",
            "iat" => $iat, //Time the JWT issued at
            "exp" => $exp, // Expiration time of token
            "email" => $user['email'],
        );
          
        $token = JWT::encode($payload, $key, 'HS256');
  
        $response = [
            'message'   => 'Login Succesful',
            'email'     => $email,
            'id_user'   => $user['id'],
            'password'  => $password,
            'token'     => $token,
            'success'   => true
        ];
          
        return $this->respond($response, 200);
    }
}
