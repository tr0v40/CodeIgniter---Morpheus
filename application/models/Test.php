<?php

class Test extends CI_Model {

    public function users(){

        $this->load->database();

        $query = $this->db->get('users');

        return $query->row_array();
//        try {
//        } catch (Exception $e){
//            var_dump($this->db->error());
//            var_dump($e);
//        }
//
    }



}