<?php
  class Pages extends Controller {
    public function __construct(){
    
    }

    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
      
      $data = [
        'title' => 'LawFirm',
        'description' => 'A simple way to find the Lawyers to get the job done'
      ];
     
      $this->view('pages/index', $data);

    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];
      $this->view('pages/about',$data);
      
    }
  }
?>