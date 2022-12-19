<?php

namespace Models;

class StudentModel extends BaseModel
{
    public function getAllStudent(){
        $sql = 'SELECT * FROM SinhVien';
        $query = $this->query($sql);
        $array = [];
        while($row = $query->fetch()){
            array_push($array, $row);
        }
        return $array;
    }

}