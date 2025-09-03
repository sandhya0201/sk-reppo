<?php
session_start();
include 'function.php';

 $myobj= new myquery();
 if (isset($_POST['create'])){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $marks=$_POST['marks'];

$tablename='oops2';
$fields="id,name,class,subject,marks";
$values="NULL,'$name','$class', '$subject','$marks'";

$runquery=$myobj->instdata($tablename,$fields,$values);

if($runquery=="success"){
   header("Location:show.php");
}
else if($runquery=="failed"){
  echo "not done";
}

}

// delete



if(isset($_POST["delete"])){
   $userid=$_POST["id"];

$tablename="oops2";
$condition= "WHERE id='$userid'";

$runquery=$myobj->deletedata($tablename,$condition);
if($runquery=="success"){
   header("Location:show.php");
}

else if($runquery=="failed"){
   echo"Not Done";
}
}



if(isset($_POST['update'])){
   $id=$_POST['id'];
 $name=$_POST['name'];
$class=$_POST['class'];
$subject=$_POST['subject'];
 $marks=$_POST['marks'];
    
if(isset($_POST["update"])){
$userid=$_POST['id'];
$tablename="oops2";
$condition="WHERE id='$userid'";
$set="name='$name',class='$class',subject='$subject',marks='$marks'";

$runquery=$myobj->updatedata($tablename,$set,$condition);

if($runquery=="success"){
   header("location:show.php");
}
else if($runquery=="failed"){
   echo'note Done';
}


}}
//image upload
if (isset($_POST["upload"])){
// print_r($_POST['files']);
$userid=$_POST['id'];
$filename=$_FILES['files']['name'];
$tmpname=$_FILES['files']['tmp_name'];

$filetype=$_FILES['files']['type'];
$filesize=$_FILES['files']['size'];

 $myfolder="photos/".$filename;


if($filesize<9000000){

if(move_uploaded_file($tmpname, $myfolder))
{
//for photo set 


 echo"<img scr='$myfolder' height='100px' width='100px'>";


$tablename="oops2";
$condition="WHERE id='$userid'";
$set="profile_pic='$filename'";

$runquery=$myobj->updatedata($tablename,$set,$condition);

if($runquery=="success"){
   header("location:show.php");
}
else if($runquery=="failed"){
   echo'note Done';
}


}}
echo'data Updated';

}

?>