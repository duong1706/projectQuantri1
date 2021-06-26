<?php
    class BillModel extends BaseModel {
        const TABLE = "bills";
        public function getAll($select, $orderBy){
            $sql = "SELECT * FROM bills";
            $read = $this->connect->prepare($sql);
            $read->execute();
            $result = $read->get_result();
            $bill = [];
            while($row = $result->fetch_assoc()){
                array_push($bill, $row);
            }
            return $bill;
        }
        // public function getBill($id){
        //     $bill = $this->detail(self::TABLE, $id);
        //     return $bill;
        // }
        public function add($data = []){
            $keyList = implode(', ', array_keys($data));
            $valueList = array_map(function($v){
                return "'" . $v . "'";
            }, array_values($data));
    
            $values = implode(',', $valueList);
            $sql = "INSERT INTO bills (${keyList}) VALUES (${values})";
            $insert = $this->connect->prepare($sql);
            $insert->execute();
        }
        
        public function destroy($id){
            $sql = "DELETE FROM bills WHERE id='$id'";
            $delete = $this->connect->prepare($sql);
            $delete->execute();
        }
        public function getBill($id){
            $id = (int)$id;
            $qr = "SELECT * FROM bills WHERE id=${id}";
            $read->execute();
            $result = $read->get_result();
            $bill = $result->fetch_array();
            return $bill;
        }
    }
?>