<?php

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function all() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

}