<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    public function insertuser(){
        //data yang di butuhin user
        $data =[
            'username' => $this->input->post('username',true),
            'email' => $this->input->post('email',true)
            'fullname' => $this->input->post('full name',true),
            'password' => $this->input->post('password',true),
            'phone_number' => $this->input->post('phone',true),
        ];

        $this->db->insert('user',$data)
    }

    public function view_user($username){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$username);

        $query = $this->db->get();

        return $query
    }
}
?>