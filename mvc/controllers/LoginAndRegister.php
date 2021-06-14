<?php 
class LoginAndRegister extends Controller
{
    function index()
    {
        $this->view("LoginAndRegister/index", []);
    }
    function payment(){
        $_SESSION['payment'] = 1;
        $this->index();
    }
}
?>