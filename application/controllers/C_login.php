<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Donor');
    }

    function index(){
        $this->load->view('UI register');
    }

    public function buatakun() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]',
        array('required' => 'Email cant be Blank', 'is_unique' => 'This email address is already associated with an account')
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]',
        array('required' => 'Password cant be Blank','min_length' => 'Password is too short (minimum is 5 characters)')
        );

        if ($this->form_validation->run() == FALSE) {
                $this->load->view('v_register');
        } else {
                $this->m_user->insertuser();
                redirect('C_login');
        }
    }


}

?>
        