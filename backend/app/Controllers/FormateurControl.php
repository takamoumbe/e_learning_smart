<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\FormateurModel;
use \Firebase\JWT\JWT;

class FormateurControl extends ResourcePresenter
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
    public function delete_($id)
    {

    }

    #@-- 4 --> enregistrer un formateur
    #- use: 
    #-
    public function save()
    {
        $FormateurModel = new FormateurModel();

        $rules = [
            'login_formateur' => [
                'rules'  => 'required|min_length[5]|is_unique[formateur.login_formateur]',
                'errors' => [
                    'required' => 'Login invalide',
                ],
            ],
            'pass_formateur' => [
                'rules'  => 'required|min_length[5]|is_unique[formateur.pass_formateur]',
                'errors' => [
                    'required' => 'Mot de pass invalide',
                ],
            ],
            'confirm_password' => [
                'rules'  => 'required|min_length[5]|matches[pass_formateur]',
                'errors' => [
                    'required' => 'Mot de pass différent',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email|is_unique[formateur.email]',
                'errors' => [
                    'required' => 'Email invalide',
                ],
            ],
            'description_formateur' => [
                'rules'  => 'required|min_length[10]',
                'errors' => [
                    'required' => 'La description doit etre longue',
                ],
            ]
        ];



        if($this->validate($rules)){

            $data = [
                'login_formateur'           => $this->request->getVar('login_formateur'),
                'pass_formateur'            => md5($this->request->getVar('pass_formateur')),
                'email'                     => $this->request->getVar('email'),
                'description_formateur'     => $this->request->getVar('description_formateur'),
                'type_formateur'            => "employer",
                'status_formateur'          => 'active',
                'etat_formateur'            => 0,
                'created_at'                => date("Y-m-d H:i:s"),
                'updated_at'                => date("Y-m-d H:i:s"),
            ];

            if (!$FormateurModel->save($data)) {

                $data = [
                    'success' => false,
                    'status'  => 500,
                    'msg'     => "L'opération a échouer"
                ];
                return $this->respond($data);

            }else{

                $data = [
                    'success' => true,
                    'status'  => 200,
                    'msg'     => "L'opération a réussir"
                ];
                return $this->respond($data);

            }

        }else{

            $data = [
                'success' => false,
                'status'  => 500,
                'msg'     => "L'opération a échouer",
                'error'   => $this->validator->getErrors()
            ];
            return $this->respond($data);
        }
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

    #@-- 8 --> comparer deux mot de passe
    #- use: 
    #-
    public function pass_verif($pass1, $pass2){
        if ($pass1 == $pass2) {
            return true;
        }else{
            return false;
        }
    }

    #@-- 8 --> authentifier un formateur
    #- use: 
    #-
    public function authen()
    {
        $FormateurModel = new FormateurModel();

        $rules = [
            'login_formateur' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Login invalide',
                ],
            ],
            'pass_formateur' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Mot de pass invalide',
                ],
            ]
        ];

         if($this->validate($rules)){

           
            $login_formateur    = $this->request->getVar('login_formateur');
            $pass_formateur     = $this->request->getVar('pass_formateur');
            $formateur          = $FormateurModel->where('login_formateur', $login_formateur)->first();

            if(is_null($formateur)) {

                 $response = [
                    'success' => false,
                    'status'  => 500,
                    'msg'     => "Login ou mot de passe incorect",
                ];
                return $this->respond($response);

            }
       
            $pwd_verify = $this->pass_verif(md5($pass_formateur), $formateur['pass_formateur']);
           
            if(!$pwd_verify) {

                $response = [
                    'success' => false,
                    'status'  => 500,
                    'msg'     => "Login ou mot de passe incorect",
                ];
                return $this->respond($response);
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
                "email" => $formateur['email'],
            );
              
            $token = JWT::encode($payload, $key, 'HS256');

            $response = [
                'message'   => 'Connexion reussir',
                'email'     => $formateur['email'],
                'id_user'   => $formateur['id_formateur'],
                'password'  => $pass_formateur, 
                'token'     => $token,
                'status'    => 200,
                'success'   => true,
            ];

            return $this->respond($response);

        }else{

            $response = [
                'success' => false,
                'status'  => 500,
                'msg'     => "L'opération a échouer",
                'error'   => $this->validator->getErrors()
            ];
            return $this->respond($response);
        }

    }    

}
