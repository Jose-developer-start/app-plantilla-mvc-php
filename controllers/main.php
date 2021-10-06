<?php

    class Main extends Controller{
        public function __construct()
        {
           parent::__construct(); 
        }
        public function render(){
            //$this->view->data = $this->model->get();
            $this->view->render('index');
        }
        public function get($data = null){
            //print_r($data);
        }
    }