<?php
    class Home extends Controller{
        private $petModel;
        function __construct(){
            $this->model('PetModel');
            $this->petModel = new PetModel();
        }
        function index(){
            $data['main'] = 'home/main';
            $data['pet'] = $this->petModel->getAll([], []);
            $this->view('home/index', $data);
        }
    }
?>