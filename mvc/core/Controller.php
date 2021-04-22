<?php
    class Controller{
        function view($path, $data){
            require_once './mvc/views/' .$path . '.php';
        }
        function model($path){
            require_once './mvc/models/' .$path . '.php';
        }
    }
?>