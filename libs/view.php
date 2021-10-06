<?php

    class View{
        public function render($file){
            require_once "views/".$file.".php";
        }
    }