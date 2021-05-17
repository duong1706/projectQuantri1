<?php
    class Dashboard extends Controller{
        function __construct(){
            // $this->call_models('HomeModel');
            // $this->productModel = new ProductModel();
        }
        function index(){
            $_SESSION['lct'] = 2;
            if(isset($_SESSION["user"])){
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