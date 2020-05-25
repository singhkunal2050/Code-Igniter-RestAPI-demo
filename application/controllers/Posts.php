<?php

// global constant to app folder path

class Posts extends CI_Controller{
	public function index(){
		$data['title'] = 'Latest Posts'; 
		$data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$data['title'] = 'Create User'; 

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		}
		else{
			$this->post_model->create_post();
			redirect('posts');
		}

	}

}


?>