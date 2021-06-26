<?php 
    class PostModel extends BaseModel {
        public function __construct(){
            $this->connect = $this->connect();
        }

       public function add($content,$pet_id,$name)
       {
            $qr = "INSERT INTO posts(name,content,pet_id) VALUES ('$name','$content','$pet_id')";
            $res = $this->connect->prepare($qr);
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
       public function get($id)
       {
            $sql = "SELECT * FROM posts WHERE pet_id=${id}";
            $read = $this->connect->prepare($sql);
            $read->execute();
            $result = $read->get_result();
            $data = [];
            while($row = $result->fetch_assoc()){
            array_push($data, $row);
            }
            return  $data;
           
       }

    }
?> 