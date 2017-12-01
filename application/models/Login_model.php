<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login_model extends CI_model{
    
    public function verify_user($username, $password){
        $query = $this->getUserByMobile($username);
        
        if($query->num_rows() > 0){
            $row = $query->row();
            $enc = $row->password;
            
            $pass = md5($password);
            if($enc == $pass){
                unset($row->password);
                $this->session->set_userdata('user', $row);
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
       
    }
    
    function checkUser($mobileNum){
        $query = $this->getUserByMobile($mobileNum);
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    
    }
    
    function updatePassword($username, $password){
        $this->db->set('password',$password);
        $this->db->where('mobileNumber', $username);
        $this->db->update('users');
    }
    function getUserByMobile($username) {
        //get user by mobile number
        $this->db->select('id as userId, fName, lName, roleId, mobileNumber, status, password')
                ->where('mobileNumber', $username)
                ->where('status', 1);
        $query = $this->db->get('Users');
        return $query;
    }
}
