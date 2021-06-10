<?php
class HomeModel extends CI_Model{

    public function __construct()
    {
     $this->load->database();
        
    }

    //Get for all games
    public function getGame()
    {
        // You can use the select, from, and where functions to simplify this as seen in Week 13.
       $query = $this->db->query("SELECT * FROM activereviews");
        // return $query->result();
      /*  $this->db->select('*');
       $this->db->from('activereviews');

      $query = $this->db->get();
*/
         return $query->result();
    }

    //Get the details for a game once it has been clicked on.
    public function getReview($slug)
    {
    /*    $this->db->select('*');
        $this->db->from('activereviews')
        $this->db->where($slug);

        $query =$this->db->get();*/
       $query = $this->db->query("SELECT * FROM activereviews WHERE slug='$slug'");

        return $query->result(); 
    }

    public function getcomments($ReviewID){
        $query =$this->db->query("SELECT * FROM gamescomments WHERE ReviewID='$ReviewID'");
        return $query->result();

    }
    public function comments($ReviewID, $Comment){
        $query =$this->db->query("SELECT * FROM gamescomments WHERE ReviewID='$ReviewID'");
        return $query->result();
    }
    
}