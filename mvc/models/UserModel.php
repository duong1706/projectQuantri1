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
        // $qr = "SELECT * FROM users WHERE username='$username' ";
        // $res = mysqli_query($this->con, $qr);
      
        // if(mysqli_num_rows($res) > 0)
        // {
        //     echo "co tai khoan roi";
        // }
        // else 
        // { 
        //    // $ir = "INSERT INTO users VALUES('$name','$email','$username','$password','$is_admin',1)";
            
        //     $ir = "INSERT INTO users (name, email, username, password, is_admin) VALUES ('thaiminhhuy1', 'huythai910@gmail.com', 'thaihuy2', 'thaiminhhuy', '1')";
        //     $resI = mysqli_query($this->con, $ir);
        //  //   echo "Hello";
        //     if($resI)
        //     {
        //         echo "Thanh Cong";
        //     }
        //     else 
        //     {
        //         echo "that bai";
        //     }
        // }
        echo $data["username"];   die();   
     //   $this->create(self::TABLE, $data);
    }
    
    public function getuser($id){
        $user = $this->detail(self::TABLE, $id);
        return $user;
    }
   
    public function update($id, $data){
        //print_r($data); die();
        $this->updateNew(self::TABLE, $id, $data);
    }
    public function destroy($id){
        $this->delete(self::TABLE, $id);
    }
 }
?>