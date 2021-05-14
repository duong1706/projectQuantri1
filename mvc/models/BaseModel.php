<?php
    class BaseModel extends DB{
        public function __construct(){
            $this->connect = $this->connect();
        }

        public function execute($sql){
            return mysqli_query($this->connect, $sql);
        }

        public function all($table, $select = ['*'], $orderBy = []){
            $this->connect = $this->connect();
            $selectList = implode(', ', $select);
            $orderByList = implode(', ', $orderBy);
            if($orderByList){
                $sql = "SELECT ${selectList} FROM ${table} ORDER BY ${orderByList}";
            }
            else if($selectList){
                $sql = "SELECT ${selectList} FROM ${table}";
            }
            else{
                $sql = "SELECT * FROM ${table}";
            }
            
            $query = $this->execute($sql);
            
            $data = [];
            while($row = mysqli_fetch_assoc($query)){
                array_push($data, $row);
            }
             
            return $data;
        }

        public function detail($table, $id){
            $sql = "SELECT * FROM ${table} WHERE IDpet=${id}";
            $result = $this->execute($sql);
            $row = mysqli_fetch_array($result);
            return $row;
        }

        

        public function create($table, $data=[]){
            $keyList = implode(', ', array_keys($data));
            $valueList = array_map(function($v){
                return "'" . $v . "'";
            }, array_values($data));

            $values = implode(',', $valueList);
            // foreach($val as $values){
            //     if($val === ''){
            //         return;
            //     }
            // }

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