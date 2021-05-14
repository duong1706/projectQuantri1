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
               'matkhau'=>$_POST['matkhau'],
               'gmail'=>$_POST['gmail']       
            ];
        $dialog =    $this->userModel->add($user);
        $data['main'] = 'user/add';
        $data["dialog"] =  $dialog;
        $this->view('dashboard/index', $data);
        }
      
    }

    function edit($id){
        if(isset($_POST["editUser"])){
            $user = [
                'name'=>$_POST['name'],
                'username'=>$_POST['username'],
                'matkhau'=>$_POST['matkhau'],
                'gmail'=>$_POST['gmail']       
             ];
              $this->userModel->update($id, $user);
              $this->index();
        }
        else {
            $data['main'] = 'user/edit';
            $data['user'] =  $this->userModel->getuser($id);    
            $this->view('dashboard/index', $data);
        }
       
    }
    function delete($id){
        echo $id;
     
        $this->userModel->destroy($id);
        $this->index();
    }

    function login(){
        if(isset($_POST["login"])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
     
         $username = validate($_POST['username']);
         $password = validate($_POST['matkhau']);
     
         if (empty($username)) {
            echo "UserName is required";
             exit();
         }else if(empty($password)){
            echo "password  is required";
             exit();
         }
        $flag =  $this->userModel->Login($username, $password);
         if($flag)
         {
            
            $data['flag'] = $flag;
            // $this->view('home/index', $data);
            // goi trang home xu? ly lay data pet cac kieu
            // flag dung de xet layout dong. cho login menu
         }
         else 
         {  
             // goi lai trang login hien dong thong bao that bai
             echo "false";
         }
        }
    }

    public function register() {
        if(isset($_POST['register']))
        {   
            
            $name = $_POST["name"];
            $email = $_POST["gmail"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password1 = $_POST["again"];
         
            
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
             }
                   
             if (empty($name)) {
                echo "name khong duoc de trong";
                 exit();
             }else if(empty($email)){
                echo "email khong duoc de trong";
                 exit();
             }
             else if(empty($username)){
                echo "username khong duoc de trong";
                 exit();
             }
             else if(empty($password)){
                echo "password khong duoc de trong";
                 exit();
             }
         
             else if(empty($password1)){
                echo "password1 khong duoc de trong";
                 exit();
             }
           
             else if($password !== $password1){
                echo "password khong giong nhau";
                 exit();
             }
         
           $flag =  $this->userModel->InserUserModel($name,$email,$username, $password );
           if($flag)
           {
              
              $data['flag'] = $flag;
              // $this->view('home/index', $data);
              // goi trang home xu? ly lay data pet cac kieu
              // flag dung de xet layout dong. cho login menu
           }
           else 
           {  
               // goi lai trang login hien dong thong bao that bai
               echo "false";
           }
           
        }
    }

    
}
?>