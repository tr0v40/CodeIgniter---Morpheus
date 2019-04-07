<?php

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');

    }

    public function index() {

        switch ($this->input->method()) {

            case 'post':
                self::create();
                break;
            default:
                $data['users'] = $this->UserModel->all();
                $data['title'] = 'Usuários';

                $this->load->view('layout/header', $data);
                $this->load->view('user/index', $data);
                $this->load->view('layout/footer');
                break;
        }
//        if ($this->require_role('admin')){
//        }else{
//            die();
//        }


    }


    public function create() {
        $user = json_decode($this->input->raw_input_stream, true);


    }

}