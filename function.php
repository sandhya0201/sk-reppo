<?php
class mydb{
    private $host;
    private $user;
    private $pass;
    private $dbname;


function dbconnect(){
    $this->host="127.0.0.1";
    $this->user="root";
    $this->pass="";
    $this->dbname="project3";
    $conn=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
     return $conn;
}
}
class myquery extends mydb{
    public function instdata($tablename,$feilds,$values){
        $insertdata="INSERT INTO $tablename($feilds) VALUES($values)";
       $insertquery=$this->dbconnect()->query($insertdata);

if($insertquery){
    return "success";
}
else("Not Done");


    }

   
    public function getdt($field,$tablename,$condition){
        $getdat="SELECT $field FROM $tablename $condition";
        
        $getquery=$this->dbconnect()->query($getdat);

        if($getquery->num_rows>0){
            while($getresult=$getquery->fetch_assoc()){
                    $getrow[]=$getresult;
            }
            return $getrow;
        }
    }

public function deletedata($tablename,$condition){
    $deldata="DELETE FROM $tablename $condition";
    $deletequery=$this->dbconnect()->query($deldata);
    if($deletequery){
        return "success";
    }
    else 
        {return"failed";

    }
}
public function updatedata($tablename,$set,$condition){
$update="UPDATE $tablename set $set $condition";

$updatequery=$this->dbconnect()->query($update);

if($updatequery){
    return "success";
}
else{
    return"failed";
}
} }
?>