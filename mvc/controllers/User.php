<?php 
class User extends Controller {
    private $userModel;
    function __construct(){
        $this->model('UserModel');
        $this->userModel = new UserModel();
    }
    function index(){
        $data['main'] = 'user/list';
        $data['user'] = $this->userModel->getAll([], []);
        $this->view('dashboard/index', $data);
      
    }
    // function add(){
    //     $data['main'] = 'add/list';
    //     $data['user'] = $this->userModel->getAll([], []);
    //     $this->view('dashboard/index', $data);
      
    // }
    function addUser(){
        $data['main'] = 'user/add';
        $this->view('dashboard/index', $data);
      
    }
    function add(){
        if(isset($_POST["addUser"]))
        {
            
            $user = [
               'name'=>$_POST['name'],
               'username'=>$_POST['username'],
               'password'=>$_POST['matkhau'],
               'gmail'=>$_POST['gmail']       
            ];
           $this->userModel->add($user);
        }
      
    }
}
?>