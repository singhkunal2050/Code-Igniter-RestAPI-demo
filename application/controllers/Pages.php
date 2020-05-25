<?php

// global constant to app folder path

class Pages extends CI_Controller{
	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php' )){  
		// checks if view exists before we load
			show_404();                // not found
		}


		$data['title'] = ucfirst($page); 
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');

	}

}


?>