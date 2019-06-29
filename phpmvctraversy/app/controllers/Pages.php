<?php 

    class Pages extends Controller {

        public function __construct() {

        }

        public function index() {
            $data = [
                'title' => 'TraversyMVC'
            ];


            $this->view('pages/index', $data);
        }
        
        public function about() { 
            $data = [
                'title' => 'About Us'
            ];
            // echo 'This is about';
            $this->view('pages/about', $data);
        }
    }

?>