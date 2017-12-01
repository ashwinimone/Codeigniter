<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');        
        $this->load->model('login_model');
        $this->load->helper('site_url_helper');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    }
    
    public function index(){
        $this->load->view('login');
        
    }
    public function verification(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
                     
        $this->form_validation->set_rules('username', 'MobileNumber', 'trim|numeric|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE){ //echo 'enter'; exit;
                $result = $this->login_model->verify_user($username, $password);
                if($result) {
                    redirect(base_url() . 'Examples/offices');
                }else{
                    $this->session->set_flashdata('error', 'invalid login details');
                    //redirect(base_url() . 'login');
                }
            }
        }
        
        $this->load->view('login');
    }
    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('user');
        redirect(base_url());
        
    }
    
    public function reset($length = 5){
        $mob = $this->input->post('email');
        
        $this->form_validation->set_rules('email', 'MobileNumber', 'trim|numeric|required');
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE){ 
                $valid = $this->login_model->checkUser($mob);
                if($valid){
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = substr( str_shuffle( $characters ), 0, $length );          
                    $gen_pass = md5($randomString);

                    $this->login_model->updatePassword($mob, $gen_pass);
                    $msg = 'New password is ' . $randomString;
                    $this->session->set_flashdata('error', $msg);

                }
                else{
                    $this->session->set_flashdata('error', 'Mobile no is not registered');
                }
                
            }
        }
        redirect(base_url() . 'login');
    }
    
    
 }
