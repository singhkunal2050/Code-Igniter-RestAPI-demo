<?php 


class Post_model extends CI_Model{
	public function __contruct(){
		// $this->load->database();
	}

	public function get_posts($slug = FALSE){
		$this->load->database();
		if($slug===FALSE){
			$query = $this->db->get('users');
			return $query->result_array();
		}

		$query = $this->db->get_where('users',array('slug'=> $slug ));
		return $query->row_array();
	}


	public function create_post(){
		$this->load->database();
		$slug = url_title($this->input->post('name'));
		$data = array(
			'name' => $this->input->post('name'),
			'slug' => $slug,
			'email' => $this->input->post('email'),
			'address' =>$this->input->post('address'),
		);
		$this->db->insert('users',$data);
	} 

}

?>