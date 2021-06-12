<?php
    class Home extends Controller{
        private $petModel;
        function __construct(){
            $this->model('PetModel');
            $this->petModel = new PetModel();
        }
        function index(){
            if(isset($_SESSION['payment'])){
                unset($_SESSION['payment']);
                unset($_SESSION['cart']);
            }
            unset($_SESSION['admin']);
            unset($_SESSION['error']);
            $_SESSION['lct'] = 0;
            $_SESSION['url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

        function cart(){
            $data = [];
            if(isset($_SESSION["cart"])){
                $data['cart'] = $_SESSION['cart'];
            }
            $this->view('payment/cartpage', $data);
        }
    }
?>