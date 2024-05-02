<?php
    class Pages extends Controller {
        private $postModel;
        public function __construct()
        {
        }

        public function index()
        {
            $this->view('pages/index', [
                'title'=>'Mitochondria', 
            ]);
        }
        
        public function about()
        {
            $this->view('pages/about' , ['title'=>'New About  Page']);
        }
    }