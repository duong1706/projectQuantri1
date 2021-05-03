<?php
    class Home extends Controller{
        private $petModel;
        function __construct(){
            $this->model('PetModel');
            $this->petModel = new PetModel();
        }
        function index(){
            $_SESSION['lct'] = 0;
            $data['pet'] = $this->petModel->getAll([], []);
            if(isset($_SESSION["cart"])){
                $data['cart'] = $_SESSION["cart"];
            }
            else{
                $data['cart'] =[];
            }
           // print_r($data['cart']); die();
            $this->view('home/index', $data);
        }
    }
?>