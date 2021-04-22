<?php
    class Dashboard extends Controller{
        function __construct(){
            // $this->call_models('HomeModel');
            // $this->productModel = new ProductModel();
        }
        function index(){
            $data['main'] = 'blank';
            //$data['product'] = $this->productModel->getAll([], []);
            $this->view('dashboard/index', $data);
        }
    }
?>