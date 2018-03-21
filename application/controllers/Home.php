<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();

		//load home model
		$this->load->model('home_model');
		
	}

	public function index(){
		//get data from db
		$data['images'] = $this->home_model->get_images();
		
		//load view and pass images
		$this->load->view('home_view', $data);
	}
	public function test()
	{
		echo "test";
	}
	public function delete($id){
		$this->home_model->row_delete($id);
		redirect('');  
	}

	public function edit($id){
		$this->home_model->row_delete($id);
		redirect(''); 
	}

		
	public function input($id){
		$data['name'] = "vikas_edit_again";
		$data['id'] = $id;
		$data['uploaded_on'] = '2018-03-02 00:00:00';		
		$this->home_model->update_entry($data);
		redirect(''); 
	}

	public function input_edit($id){
		
		$data=[];
		$data['result'] = $this->home_model->get_row_from_id($id);
		$this->load->view('edit', $data);		
	}

	public function search(){
		if($this->input->post('name') != "")
		{	
			$result = [];
			$data = $this->input->post('name');
			$result['record'] = $this->home_model->search_in_db($data);
			$this->load->view('search_view', $result);		
		}
		else{
		redirect('');			
		}	
	}
	// public function input_edit_function(){
	// 	$this->home_model->update_entry($data);
	// 	redirect(''); 
	// }

	public function input_edit_function(){
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['uploaded_on'] = $this->input->post('uploaded_on');		
		$this->home_model->update_entry($data);
		redirect(''); 
	}

	public function create(){
		$data['name'] = "vikash11";
		$data['id'] = 13;
		$data['uploaded_on'] = '2016-03-02 00:00:00';
		$this->home_model->insert_entry($data);
		redirect('');
	}

	public function add(){

		if($this->input->post('name') != "" && $this->input->post('uploaded_on') != "")
		{
			$data['name'] = $this->input->post('name');
			$data['uploaded_on'] = $this->input->post('uploaded_on');
			$this->home_model->add_entry($data);

		//	redirect("/home/index?action=success");
		}
		else{
			
		}
		redirect('');
	}
}
