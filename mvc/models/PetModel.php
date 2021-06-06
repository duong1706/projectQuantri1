<?php
class PetModel extends BaseModel{
    const TABLE = "pet";
    //Bat dau tu day day day
    public function getAll($select, $orderBy){
        $pet = $this->all(self::TABLE, $select, $orderBy);
        return $pet;
    }

<<<<<<< HEAD
=======
    ///
>>>>>>> ca07bc4518764380c01a6b9ee96c97de7ce50525
    public function getPet($id){
        $pet = $this->detail(self::TABLE, $id);
        return $pet;
    }
    public function add($data = []){
        $this->create(self::TABLE, $data);
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