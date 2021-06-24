<?php 
class User extends Controller {
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
            if($_SESSION["user"]['admin']){
                $data['user'] = $this->userModel->getAll([], []);
                $data['main'] = 'user/list';
                $this->view('dashboard/index', $data);
            }
            else{
                Header('location:' . URL);
            }
            
        }
        else{
            $_SESSION['lct'] = 2;
            $_SESSION['admin'] = 1;
            Header('location:' . URL . 'LoginAndRegister');
        }


      
    }
    function addUser(){
        $data['main'] = 'user/add';
        $this->view('dashboard/index', $data);
      
    }
    function add(){
        if(isset($_POST["addUser"]))
        {
            if(isset($_POST['admin'])){
                $admin = 1;
            }
            else{
                $admin = 0;
            }
            $user = [
               'name'=>$_POST['name'],
               'username'=>$_POST['username'],
               'matkhau'=>$_POST['matkhau'],
               'gmail'=>$_POST['gmail'],
               'admin'=>$admin
            ];
        $dialog = $this->userModel->add($user);
        $data['main'] = 'user/add';
        if($dialog == "Tai khoan da ton tai "){  
            $data["dialog"] =  $dialog;
            $data['main'] = 'user/add';
            $this->view('dashboard/index', $data);
        }
        else{
            Header("Location:" . URL . 'user');

        }
        }
      
    }

    function edit($id){
        $data['main'] = 'user/edit';
        $data['user'] =  $this->userModel->getuser($id);    
        $username = $data['user']['username'];

        if(isset($_POST["editUser"])){
            if(isset($_POST['admin'])){
                $admin = 1;
            }
            else{
                $admin = 0;
            }
            $user = [
                'name'=>$_POST['name'],
                'username'=>$username,
                'matkhau'=>$_POST['matkhau'],
                'gmail'=>$_POST['gmail'],
                'admin'=>$admin       
             ];
              $this->userModel->update($id, $user);
              Header("Location:" . URL . 'user');
        }
        else{
            $this->view('dashboard/index', $data);
        }
        // else {
        //     $data['main'] = 'user/edit';
        //     $data['user'] =  $this->userModel->getuser($id);    
        //     $this->view('dashboard/index', $data);
        // }
       
    }
    function delete($id){
        $this->userModel->destroy($id);
        Header("Location:" . URL . 'user');
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
         $lct = validate($_POST['lct']);
         if (empty($username)) {
            $_SESSION['error'] = "Username  is required";
            Header("Location:" . URL . 'LoginAndRegister');
            exit();
         }else if(empty($password)){
            $_SESSION['error'] = "Password  is required";
            Header("Location:" . URL . 'LoginAndRegister');
            exit();
         }
        $flag =  $this->userModel->Login($username, $password);
        
         if($flag)
         {
            unset($_SESSION['error']);
            $_SESSION['flag'] = $flag;
            // $_SESSION['token'] = $flag['token'];
            // $user = (array) jwt::decode($_SESSION['token'], Key, true);
            // $_SESSION['user'] = $user;
            $_SESSION['user'] = $this->userModel->getuserbyUsername($username);
           
            if($lct == "admin"){
                unset($_SESSION['admin']);
                Header("Location:" . URL . 'dashboard');
            }
            else if($lct == "payment"){
                unset($_SESSION['payment']);
                Header("Location:" . URL . 'pet/payment');
            }
            else {
                Header("Location:" . URL);
            }
         }
         
         else
         {  
            $_SESSION['error'] = "Username or Password  is incorrect";
            Header("Location:" . URL . 'LoginAndRegister');
         }
        }
    }

    public function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['token']);
        header("location:" . URL);
    }

    public function register() {
        if(isset($_POST['register']))
        {   
            
            $name = $_POST["name"];
            $email = $_POST["gmail"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password1 = $_POST["again"];
            $admin = 0;
         
            
            // function validate($data){
            //     $data = trim($data);
            //     $data = stripslashes($data);
            //     $data = htmlspecialchars($data);
            //     return $data;
            //  }
                   
            //  if (empty($name)) {
            //     echo "name khong duoc de trong";
            //      exit();
            //  }else if(empty($email)){
            //     echo "email khong duoc de trong";
            //      exit();
            //  }
            //  else if(empty($username)){
            //     echo "username khong duoc de trong";
            //      exit();
            //  }
            //  else if(empty($password)){
            //     echo "password khong duoc de trong";
            //      exit();
            //  }
         
            //  else if(empty($password1)){
            //     echo "password1 khong duoc de trong";
            //      exit();
            //  }
           
            //  else if($password !== $password1){
            //     echo "password khong giong nhau";
            //      exit();
            //  }
         
           $flag =  $this->userModel->InserUserModel($name,$email,$username, $password, $admin);
           if($flag)
           {
              
              $data['flag'] = $flag;
              // $this->view('home/index', $data);
              // goi trang home xu? ly lay data pet cac kieu
              // flag dung de xet layout dong. cho login menu
              $_SESSION['error'] = "Register complete";
              Header("Location:" . URL . 'LoginAndRegister');
           }
           else 
           {  
               // goi lai trang login hien dong thong bao that bai
               $_SESSION['error'] = "Cannot register";
               Header("Location:" . URL . 'LoginAndRegister');
           }
           
        }
    }

    public function changepass() {
        if(isset($_POST['pass'])){
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
             }
             $oldPassword = validate($_POST['matkhaucu']);
             $newPassword = validate($_POST['matkhaumoi']);
             $retypePassword = validate($_POST['matkhaulai']);
             
             if (empty($oldPassword)) {
                $_SESSION['error'] = "Old Password  is required";
                Header("Location:" . URL . 'user/changepass');
                exit();
             }else if(empty($newPassword)){
                $_SESSION['error'] = "New Password  is required";
                Header("Location:" . URL . 'user/changepass');
                exit();
             }
             else if(empty($retypePassword)){
                $_SESSION['error'] = "Retype Password  is required";
                Header("Location:" . URL . 'user/changepass');
                exit();
             }

             if($retypePassword != $newPassword){
                $_SESSION['error'] = "Retype Password is incorect";
                Header("Location:" . URL . 'user/changepass');
                exit();
             }

             if($oldPassword == $_SESSION['user']['matkhau']){
                 $this->userModel->changePass($_SESSION['user']['username'], $newPassword);
                 
                 Header("Location:" . URL);
             }
             else{
                $_SESSION['error'] = "Old Password is incorect";
                Header("Location:" . URL . 'user/changepass');
                exit();
            }
        }
        


        $this->view('LoginAndRegister/changepassword', []);
    }
   

    
}
?>