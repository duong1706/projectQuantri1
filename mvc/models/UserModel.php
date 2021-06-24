<?php 
 class UserModel extends BaseModel {

    public function getAll($select, $orderBy){
        $sql = "SELECT * FROM users";
        $read = $this->connect->prepare($sql);
        $read->execute();
        $result = $read->get_result();
        $user = [];
        while($row = $result->fetch_assoc()){
            array_push($user, $row);
        }
        return $user;
    }

    public function add($data){
        $username =  $data["username"];
        $qr = "SELECT * FROM users WHERE username='$username'";
        $add = $this->connect->prepare($qr);
        $add->execute();
      
        if($add->affected_rows > 0)
        {
            return "Tai khoan da ton tai ";
        }
        else 
        {    
            $user = $data;
            $user['token'] = JWT::encode($data, Key);

            $keyList = implode(', ', array_keys($user));
            $valueList = array_map(function($v){
                return "'" . $v . "'";
            }, array_values($user));

            $values = implode(',', $valueList);
           
            $sql = "INSERT INTO users (${keyList}) VALUES (${values})";
            $insert = $this->connect->prepare($sql);
            $insert->execute();
        }
    
    }
    
    public function getuser($id){
        $id = (int)$id;
        $sql = "SELECT * FROM users WHERE id=${id}";
        $read = $this->connect->prepare($sql);
        $read->execute();
        $result = $read->get_result();
        $user = $result->fetch_array();
        return $user;
    }

    public function getuserbyUsername($username){
        $username = (string)$username;
        $sql = "SELECT * FROM users WHERE username='${username}'";
        $read = $this->connect->prepare($sql);
        $read->execute();
        $result = $read->get_result();
        $user = $result->fetch_array();
        return $user;
    }
   
    public function update($id, $user){
       
        $name=$user["name"];
        $username=$user["username"];
        $matkhau=$user["matkhau"];
        $gmail=$user["gmail"];
        $admin=$user["admin"];
        $token = JWT::encode($user, Key);

        $sql = "UPDATE users SET name='$name',gmail='$gmail', matkhau='$matkhau', token='$token', admin='$admin' WHERE id='$id' ";
        $update = $this->connect->prepare($sql);
        $update->execute();
    }
    public function destroy($id){
        $sql = "DELETE FROM users WHERE id='$id'";
        $delete = $this->connect->prepare($sql);
        $delete->execute();
    }
    public function getToken($username){
        $sql = "SELECT token FROM users WHERE username='${username}'";
        $read = $this->connect->prepare($sql);
        $read->execute();
        $result = $read->get_result();
        $token = $result->fetch_array();
        return $token;
    }
    public function Login($username,$password)
    {
        $sql = "SELECT * FROM users WHERE username='$username' AND  matkhau='$password'";
        $log = $this->connect->prepare($sql);
        $log->execute();
        $res = $log->get_result();
        if($res->fetch_assoc())
        {  
            return $this->getToken($username);
        }
        else 
        {
            return false;
        }
    }

    public function InserUserModel($name,$gmail,$username ,$password, $admin)
    {
        $sql = "SELECT * FROM users WHERE username='$username' ";
        $read = $this->connect->prepare($sql);
        $read->execute();
        $res = $read->get_result();
        if($res->fetch_assoc())
        {
            return false;
        }
        else 
        { 
           $user = [
            'name'=>$name,
            'username'=>$username,
            'matkhau'=>$password,
            'gmail'=>$gmail,
            'admin'=>$admin       
         ];
            $token = JWT::encode($user, Key);
            $ir = "INSERT INTO users (name, gmail, username, matkhau, token, admin) VALUES ('$name', '$gmail', '$username', '$password', '$token', '$admin')";
            $res = $this->connect->prepare($ir);
            $res->execute();
           
            if($res->affected_rows > 0)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
    }

    public function changePass($username, $pass){
        $user = [
            'name' => $_SESSION['user']['name'],
            'username' => $_SESSION['user']['username'],
            'matkhau'=>$pass,
            'gmail'=>$_SESSION['user']['gmail'],
            'admin'=>$_SESSION['user']['admin']
        ];
        $token = JWT::encode($user, Key);
        $_SESSION['user'] = $user;
        $_SESSION['token'] = $token;

        $qr = "UPDATE users SET matkhau='$pass', token='$token' WHERE username='$username'";
        $update = $this->connect->prepare($qr);
        $update->execute();
    }
 }
?>