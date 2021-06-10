<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->model('LoginModel');

    }
    public function index(){

        $userExists='';
   $data['title']= 'Login page';

   if(!$userExists){
       $data['show'] = true;

   }else{

    $data['show'] =false;
    
   }

   $data['head'] = 'login';
    $this->load->view('login', $data);
        
    }
  
    public function User(){
    //    $this->load->library('session');

        $UserName = $_POST['UserName'];
        $UserPassword = $_POST['UserPassword'];

        $result = $this->LoginModel->userlogin($UserName, $UserPassword);

        if(!empty($result)){
            $this->session->set_userdata('id', $row->UID);
            $this->session->set_userdata('username', $row->UserName);
            redirect(base_url());
                }
        else{
         //   header('location:'.base_url().$this->index());
           // $this->session->set_flashdata('error','User not found');
           echo "Incorrect details";
        }
   
}

}