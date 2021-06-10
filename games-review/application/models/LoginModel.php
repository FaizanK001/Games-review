<?php
class LoginModel extends CI_Model{
    public function __construct(){
        $this->load->database();

    }
    //public function insertusers(){
    //    $this->db->insert('users',$data);
  //  }
    public function userlogin($UserName, $UserPassword){
       $this->db->select('*');
        $this->db->from('users');
        $this->db->where('UserName', $data['UserName']);
        $this->db->where('UserPassword', $data['UserPassword']);



        $query = $this->db->get();

//$query = $this->db->query("SELECT * FROM users WHERE Userame='$UserName', Userpassword='$UserPassword'");
        return $query->result();
    }
}