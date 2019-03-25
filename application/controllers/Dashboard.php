<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        // Titulo

        $data['titulo'] = 'Morpheus Commercial Invoice System';
        $data['pagina'] = 'Principal';


		$this->load->view('layout/topo', $data);
		$this->load->view('site', $data);
		$this->load->view('layout/rodape');
	}
}