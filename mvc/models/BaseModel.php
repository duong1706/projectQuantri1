<?php
    class BaseModel extends DB{
        public function __construct(){
            $this->connect = $this->connect();
        }

        public function detail($table, $id){
            $sql = "SELECT * FROM ${table} WHERE IDpet=${id}";
            $read = $this->connect->prepare($sql);
            $read->execute();
            $result = $read->get_result();
            $row = $result->fetch_array();
            return $row;
        }

        

        public function create($table, $data=[]){
            $keyList = implode(', ', array_keys($data));
            $valueList = array_map(function($v){
                return "'" . $v . "'";
            }, array_values($data));

            $values = implode(',', $valueList);
           

            $sql = "INSERT INTO ${table} (${keyList}) VALUES (${values})";
           
            $query = $this->execute($sql);
        }
        
        public function delete($table, $id){
            $sql = "DELETE FROM ${table} WHERE IDpet=${id}";
            $this->execute($sql);
        }
        public function updateNew($table, $id, $data){
            $list = [];
            //print_r($data); die();
            foreach($data as $key => $val){
                array_push($list, "${key} = '". $val . "'");
            }
            
            $valueList = implode(',', $list);
            $sql = "UPDATE ${table} SET ${valueList} WHERE IDpet=${id}";
            $this->execute($sql);
        }

    }
?>