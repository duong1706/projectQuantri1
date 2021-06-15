<?php
    class BillModel extends BaseModel {
        const TABLE = "bills";
        public function getAll($select, $orderBy){
            $bill = $this->all(self::TABLE, $select, $orderBy);
            return $bill;
        }
        // public function getBill($id){
        //     $bill = $this->detail(self::TABLE, $id);
        //     return $bill;
        // }
        public function add($data = []){
            $this->create(self::TABLE, $data);
        }
        // public function update($id, $data){
        //     //print_r($data); die();
        //     $this->updateNew(self::TABLE, $id, $data);
        // }
        public function destroy($id){
            $qr = "DELETE FROM bills WHERE id='$id'";
            $res = mysqli_query($this->connect,$qr);
        }
        public function getBill($id){
            $id = (int)$id;
            $qr = "SELECT * FROM bills WHERE id=${id}";
            $result = mysqli_query($this->connect, $qr);
            $bill = mysqli_fetch_array($result);
            return $bill;
        }
    }
?>