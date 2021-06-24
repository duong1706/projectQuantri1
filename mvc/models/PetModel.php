<?php
class PetModel extends BaseModel{
    public function getAll($select, $orderBy){
        $sql = "SELECT * FROM pet";
        $read = $this->connect->prepare($sql);
        $read->execute();
        $result = $read->get_result();
        $pet = [];
        while($row = $result->fetch_assoc()){
            array_push($pet, $row);
        }
            
        return $pet;
    }

    public function getPet($id){
        $sql = "SELECT * FROM pet WHERE IDpet=?";
        $read = $this->connect->prepare($sql);
        $read->bind_param('i', $id);
        $read->execute();
        $result = $read->get_result();
        $pet = $result->fetch_array();
        return $pet;
    }
    public function add($data = []){
        $keyList = implode(', ', array_keys($data));
        $valueList = array_map(function($v){
            return "'" . $v . "'";
        }, array_values($data));

        $values = implode(',', $valueList);
        $sql = "INSERT INTO pet (${keyList}) VALUES (${values})";
        $insert = $this->connect->prepare($sql);
        $insert->execute();
    }
    public function update($id, $data){
        $list = [];
        foreach($data as $key => $val){
            array_push($list, "${key} = '". $val . "'");
        }
        $valueList = implode(',', $list);
        $sql = "UPDATE pet SET ${valueList} WHERE IDpet=${id}";
        $update = $this->connect->prepare($sql);
        $update->execute();
    }
    public function destroy($id){
        $sql = "DELETE FROM pet WHERE IDpet=${id}";
        $delete = $this->connect->prepare($sql);
        $delete->execute();
    }

    
}   
?>