<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Donor extends CI_Model{
    public function insertDonor(){
        //data donor
        $data = [
            'username'=> $this->input->post('username',true),
            'address'=> $this->input->post('address',true)
        ];

        $this->db->insert('donor',$data);
    }

    public function viewDonor($username){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where('username',$username);
        
        $query = $this->db->get();

        return $query;
    }
}

?>