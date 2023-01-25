<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\SouscriptionModel;

class SouscriptionControl extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> recuperer l'adresse ip
    #- use: 
    #-

    function getIp(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
          $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    #@-- 1 --> Liste toutes les souscriptions 
    #- use: 
    #-
    public function listAll()
    {
        $SouscriptionModel  = new SouscriptionModel();

        $data['delete']         = $QuestionModel->where('etat_sous', 1)->findAll();
        $data['all']            = $QuestionModel->where('etat_sous', 0)->findAll();

        return $this->respond($data);
    }

    #@-- 2 --> Liste une souscription
    #- use: 
    #-
    public function listOne($id)
    {
        $SouscriptionModel  = new SouscriptionModel();

        $data         = $QuestionModel->where('id_souscrip', $id)->findAll();

        return $this->respond($data);
    }

    #@-- 3 --> supprime une souscription 
    #- use: 
    #-
    public function delete_($id)
    {
        $SouscriptionModel  = new SouscriptionModel();

        $data = [
            'etat_sous'     => date("Y-m-d H:i:s"),
            'etat_question' => 1,
        ];

        if ($SouscriptionModel->where('id_souscrip', $id)->set($data)->update() === false) {

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
    }

    #@-- 4 --> enregistre une souscriptions
    #- use: 
    #-
    public function save()
    {
        $SouscriptionModel  = new SouscriptionModel();

        $rules = [
            'email' => [
                'rules'  => 'required|min_length[10]|valid_email',
                'errors' => [
                    'required' => 'Entrer votre E-mail',
                ],
            ]
        ];

        if($this->validate($rules)){

            $data = [
                'email'             => $this->request->getVar('email'),
                'etat_sous'         => 0,
                'ip_address'        => $this->getIp(),
                'created_at'        => date("Y-m-d H:i:s"), 
                'updated_at'        => date("Y-m-d H:i:s"),
            ];

            if (!$SouscriptionModel->save($data)) {

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
