<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Users extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('site_url_helper');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('user_model');
        if (! $this->session->userdata('user'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        } 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    }
    public function index(){ 
        $this->load->view('create_user');
    }
    public function add_user(){
        $this->form_validation->set_rules('role', 'Role Id', 'numeric|trim|required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
       
        if ($this->input->post()) { //echo 'enter'; exit;
            if ($this->form_validation->run() == TRUE){                
                
                $this->user_model->add_user();
            }
            $this->load->view('create_user');
            
        }
    }
    
    public function list_user(){
        $data['users'] = $this->user_model->users_list();
        $this->load->view('list_user', $data);
    }
    
    public function edit_user($user_id){
       $data['user_edit'] = $this->user_model->edit_user($user_id);
      // echo '<pre>';
      // var_dump($data); exit;
       $this->load->view('edit_user', $data);
  
    }
    public function update_user($user_id){
        $this->form_validation->set_rules('role', 'Role Id', 'numeric|trim|required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        
        if ($this->input->post()) { //echo 'enter'; exit;
            if ($this->form_validation->run() == TRUE){                
                $this->user_model->update_user($user_id);
                redirect('users/list_user');
            }
            else{
               $data['user_edit'] = $this->user_model->edit_user($user_id);
               $this->edit_user($user_id);
            }
           
            
        }  
    }
    public function delete_user($user_id){
        $data['user_id'] = $user_id;
        $this->load->view('delete_user', $data);
        
    }
    public function delete_user_yes($user_id){
        $this->user_model->delete_user($user_id);
        redirect('users/list_user');
    }
}

