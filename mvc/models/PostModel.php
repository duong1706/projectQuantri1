<?php 
    class PostModel extends BaseModel {
        public function __construct(){
            $this->connect = $this->connect();
        }

       public function add($content,$user_id,$name)
       {
            $qr = "INSERT INTO posts(name,content,user_id) VALUES ('$name','$content','$user_id')";
            $res = mysqli_query($this->connect, $qr);
            if($res)
            {
                
                return true;    
            }
            else 
            {
              
                return false;
            }
       }
    }
?> 