<?php
    class Pages {
        public function __construct()
        {
        }

        public function index()
        {
            echo "index method of index page";
        }
        public function about($id)
        {
            echo $id;
        }
    }