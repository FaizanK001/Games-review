<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        // Load in your Models below.
        $this->load->model('HomeModel');
        //$this->load->model('ReviewModel');
        
        // Consider creating new Models for different functionality.
    }

    public function index()
    {
        // Check to see if the User exists on the homepage. You will need to change this to look up the existance of a cookie.
        $userExists = '';

        //Load data required for web page in array.


        // Change this to whatever title you wish.
        $data['title']       = 'Games Reviews';

        // Condition checking if the user exists.
        if (!$userExists)
        {
            //The user doesn't exist so change your page accordigly.
            $data['show']=true;

        }
        else
        {
            //The user does exist so change your page accordigly.
            $data['show']= false;
        }

        
        // Get the data from our Home Model.
        $data['result'] = $this->HomeModel->getGame();
        
        //Load the view and send the data accross.
        $this->load->view('home', $data);
    }

    public function review($slug)
    {
        //Get the data from the model based on the slug we have.
        //Slugs match on to the knowledge around wildcard routes.
        //More information on slugs can be found here: https://codeigniter.com/user_guide/tutorial/news_section.html
           


         $data['result']=$this->HomeModel->getReview($slug);

          $this->load->view('review', $data);


       
        
    }
    public function comments($ReviewID){
        $commentData=$this->HomeModel->getcomments($ReviewID);
        header('content-Type: application/json');
        echo json_encode($commentData);
    
    }
    public function writecomments($ReviewID){
        $userID=$this->session->userdata('userid');
        $userComments = $this->input->post()['comment'];
        $this->HomeModel->getcomments($userID, $ReviewID, $userComments);
    
    }
    
}


    //TODO: Create all other functions as required for further functionality (Comments, Login and so on.)
    // Note: You can redirect to a page by using the redirect function as follows:
    /*
        //Redirect Home
        redirect('http://localhost/games-review');
    */
  
