<?php

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index() {
        $data['users'] = $this->UserModel->all();
        $data['title'] = 'Usuários';

        $this->load->view('layout/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layout/footer');
    }


}