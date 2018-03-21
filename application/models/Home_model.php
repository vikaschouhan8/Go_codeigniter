<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_model {
    public function __construct(){
        $this->load->database();
    }

    public function get_images(){
        $query = $this->db->get('images');

        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        }
        else 
            return false;

    }

    function row_delete($id){
        $this->db->where('id', $id);
        $this->db->delete('images'); 
    }

    function update_entry($data){
        $this->name = $data['name'];
        $this->uploaded_on = $data['uploaded_on'];
        $this->db->update('images', $this, array('id' => $data['id']));
    }
    
    function insert_entry($data){
        $this->name = $data['name'];
        // $this->id = $data['id'];
        $this->uploaded_on = $data['uploaded_on'];

        $this->db->insert('images', $this);
    }

    function add_entry($data){
        $this->name = $data['name'];
        $this->uploaded_on = $data['uploaded_on'];
        $this->db->insert('images', $this);
    }

    function get_row_from_id($id){    
        $this->db->select('*');
        $this->db->from('images') ;
        $this->db->where('id', $id);
        $query = $this->db->get();
   
        if($query->num_rows() >0){
            $row = $query->row();
            return $row ;
        }
    }

    function search_in_db($data){

        $this->db->select('*');
        $this->db->from('images');

        $this->db->like('id', $data);
        $this->db->or_like('name', $data);
        $this->db->or_like('uploaded_on', $data);

        $query = $this->db->get();
   
        if($query->num_rows() >0){
            $row = $query->result();
            return $row ;
        }
    }

}