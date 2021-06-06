<?php 
    class PostModel extends BaseModel {
        public function __construct(){
            $this->connect = $this->connect();
        }

       public function add($content,$pet_id,$name)
       {
            $qr = "INSERT INTO posts(name,content,pet_id) VALUES ('$name','$content','$pet_id')";
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
       public function get($id)
       {
           $qr = "SELECT * FROM posts WHERE pet_id=${id}";
           $result = mysqli_query($this->connect, $qr);
        //  $posts = mysqli_fetch_array($result);
        $data = [];
            while($row = mysqli_fetch_assoc($result)){
                array_push($data, $row);
            }
            // print_r($data);
            // die();
         return  $data;
        //    if(isset($posts))
        //    {
        //        return $posts;
        //    }
       }

    }
?> 