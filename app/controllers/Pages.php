<?php
    class Pages extends Controller {
        public function __construct()
        {
        }

        public function index()
        {
            $this->view('pages/index', ['title'=>'New  Index Page']);
        }
        
        public function about()
        {
            $this->view('pages/about' , ['title'=>'New About  Page']);
        }
    }