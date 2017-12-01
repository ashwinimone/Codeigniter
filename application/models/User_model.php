<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function add_user(){
        $this->load->helper('url');
        $userSession = $this->session->userdata('user');
        $data = array(
            'roleId' => $this->input->post('role'),
            'fName' => $this->input->post('firstname'),
            'lName' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'mobileNumber' => $this->input->post('mobile'),
            'password' => md5($this->input->post('password')),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'region' => $this->input->post('region'),
            'pincode' => $this->input->post('pincode'),
            'createdBy' => $userSession->userId,
            'createdDate' => date("Y-m-d H:i:s")
        );

        return $this->db->insert('users', $data);
    }
    
    
    public function users_list(){
       $users = $this->db->get('users');
       return $users->result_array();
    }
    
    public function edit_user($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_user($user_id){
        $userSession = $this->session->userdata('user');
        $data = array(
            'roleId' => $this->input->post('role'),
            'fName' => $this->input->post('firstname'),
            'lName' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'mobileNumber' => $this->input->post('mobile'),
            'password' => md5($this->input->post('password')),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'region' => $this->input->post('region'),
            'pincode' => $this->input->post('pincode'),
            'updatedBy' => $userSession->userId,
            'updatedDate' => date("Y-m-d H:i:s")
        );
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
    }
    
    public function delete_user($user_id){
        $this->db->where('id', $user_id);
        $this->db->delete('users');
    }
}
