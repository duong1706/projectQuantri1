<?php 
 class UserModel extends BaseModel {
    public function __construct(){
        $this->connect = $this->connect();
    }
    const TABLE = "users";
    //Bat dau tu day
    public function getAll($select, $orderBy){
        $user = $this->all(self::TABLE, $select, $orderBy);
        return $user;
    }

    public function add($data){
        // validation 
        
        
        $username =  $data["username"];
        $qr = "SELECT * FROM users WHERE username='$username' ";
        $res = mysqli_query($this->connect, $qr);
      
        if(mysqli_num_rows($res) > 0)
        {
            return "Tai khoan da ton tai ";
        }
        else 
        {    
            $user = $data;
            $user['token'] = JWT::encode($data, Key);
            if($this->create(self::TABLE, $user))
            {
               return 'true';
            }
            else 
            {
               return 'false';
            }
        }
    
    }
    
    public function getuser($id){
        $id = (int)$id;
        $qr = "SELECT * FROM users WHERE id=${id}";
        $result = mysqli_query($this->connect, $qr);
        $user = mysqli_fetch_array($result);
        return $user;
    }

    public function getuserbyUsername($username){
        $username = (string)$username;
        $qr = "SELECT * FROM users WHERE username='${username}'";
        $result = mysqli_query($this->connect, $qr);
        $user = mysqli_fetch_array($result);
        return $user;
    }
   
    public function update($id, $user){
       
        $name=$user["name"];
        $username=$user["username"];
        $matkhau=$user["matkhau"];
        $gmail=$user["gmail"];

        $token = JWT::encode($user, "Doiqua");
        //$token=JWT::encode($token, "Doiqua");

        $qr = "UPDATE users SET name='$name',gmail='$gmail',username='$username',matkhau='$matkhau', token='$token' WHERE id='$id' ";
        $res = mysqli_query($this->connect,$qr);
    }
    public function destroy($id){
        $qr = "DELETE FROM users WHERE id='$id'";
        $res = mysqli_query($this->connect,$qr);
        
    }
    public function getToken($username){
        $qr = "SELECT token FROM users WHERE username='${username}'";
        $res = mysqli_query($this->connect,$qr);
        return mysqli_fetch_array($res);
    }
    public function Login($username,$password)
    {
        $qr = "SELECT * FROM users WHERE username='$username' AND  matkhau='$password'";
        $res = mysqli_query($this->connect, $qr);
        if(mysqli_num_rows($res) === 1)
        {  
            // tra ve user 
            return $this->getToken($username);
        }
        else 
        {
            return false;
        }
    }

    public function InserUserModel($name,$gmail,$username ,$password  )
    {
        $qr = "SELECT * FROM users WHERE username='$username' ";
        $res = mysqli_query($this->connect, $qr);
      
        if(mysqli_num_rows($res) > 0)
        {
            return false;
        }
        else 
        { 
           // $ir = "INSERT INTO users VALUES('$name','$email','$username','$password','$is_admin',1)";
           $user = [
            'name'=>$name,
            'username'=>$username,
            'matkhau'=>$password,
            'gmail'=>$gmail       
         ];
            $token = JWT::encode($user, "Doiqua");
            $ir = "INSERT INTO users (name, gmail, username, matkhau, token) VALUES ('$name', '$gmail', '$username', '$password', '$token')";
            $resI = mysqli_query($this->connect, $ir);
         //   echo "Hello";
            if($resI)
            {
                
                return true;
            }
            else 
            {
              
                return false;
            }
        }
    }

    public function changePass($id, $pass){
        $qr = "UPDATE users SET matkhau='$pass' WHERE id='$id' ";
        $res = mysqli_query($this->connect, $qr);
    }
 }
?>