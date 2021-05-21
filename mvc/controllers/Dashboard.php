<?php
    class Dashboard extends Controller{
        private $userModel;
        private $petModel;
        function __construct(){
            $this->model('UserModel');
            $this->userModel = new UserModel();
            $this->model('PetModel');
            $this->petModel = new PetModel();
        }
        function index(){
            $_SESSION['lct'] = 2;
            if(isset($_SESSION["user"])){
                $data['pet'] = $this->petModel->getAll([], []);
                $data['user'] = $this->userModel->getAll([], []);
                $data['main'] = 'card/card';
                //$data['product'] = $this->productModel->getAll([], []);
                $this->view('dashboard/index', $data);
            }
            else{
                $_SESSION['lct'] = 2;
                $_SESSION['admin'] = 1;
                Header('location:' . URL . 'LoginAndRegister');
            }
        }
    }
?>