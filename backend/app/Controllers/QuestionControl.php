<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use CodeIgniter\API\ResponseTrait;
use App\Models\QuestionModel;
use App\Models\FormateurModel;

class QuestionControl extends ResourcePresenter
{
    use ResponseTrait;
    
    #@-- 1 --> enregistrer une question
    #- use: 
    #-
    public function save()
    {
        $QuestionModel  = new QuestionModel();

        $rules = [
            'contenue' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Entrer votre question',
                ],
            ]
        ];

        if($this->validate($rules)){

            $data = [
                'contenue'          => $this->request->getVar('contenue'),
                'etat_question'     => 0,
                'status_question'   => "active",
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s"),
            ];

            if (!$QuestionModel->save($data)) {

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

    #@-- 2 --> Liste toutes les questions 
    #- use: 
    #-
    public function listAll()
    {
        $QuestionModel  = new QuestionModel();

        $data['active']         = $QuestionModel->where('status_question', 'active')->findAll();
        $data['inactive']       = $QuestionModel->where('status_question', 'inactive')->findAll();
        $data['delete']         = $QuestionModel->where('etat_question', 1)->findAll();
        $data['all']            = $QuestionModel->where('etat_question', 0)->findAll();
        $data['repondu']        = $QuestionModel->getQues_resp(); 

        return $this->respond($data);
    }

    #@-- 3 --> Liste une questions 
    #- use: 
    #-
    public function listOne($id)
    {
        $QuestionModel  = new QuestionModel();

        $data           = $QuestionModel->where('etat_question', 0)->find($id);

        return $this->respond($data);
    }

    #@-- 4 --> repond a une questions 
    #- use: 
    #-
    public function response()
    {
        $QuestionModel  = new QuestionModel();

        $rules = [
            'reponse' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Entrer une réponse à cette question.',
                ],
            ],
            'id_formateur' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'valid_email' => 'Identification du formateur échouer.',
                ],
            ],
        ];

        if($this->validate($rules)){

            $data = [
                'id_question'  => $this->request->getVar('id_question'),
                'id_formateur' => $this->request->getVar('id_formateur'),
                'reponse'      => $this->request->getVar('reponse'),
            ];

            if ($QuestionModel->where('id_question', $this->request->getVar('id_question'))->set($data)->update() === false) {

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

    #@-- 5 --> supprime une questions 
    #- use: 
    #-
    public function delete_($id)
    {
        $QuestionModel  = new QuestionModel();

        $data = [
            'deleted_at'    => date("Y-m-d H:i:s"),
            'etat_question' => 1,
        ];

        if ($QuestionModel->where('id_question', $id)->set($data)->update() === false) {

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


}
