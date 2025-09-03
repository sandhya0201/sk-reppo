<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'function.php';

   $id=$_GET['id'];
    // delete


$myobj= new myquery();

$field="*";
$tablename="oops2";
$condition= "WHERE id='$id'";

$getdata=$myobj->getdt($field,$tablename,$condition);

 if(isset($getdata['0'])){

    foreach($getdata as $result){

        echo'
        <div class="form-data">
        <h2>Update data</h>
        <form action="action.php" method="POST">

        <input type="hidden" name="id" value="'.$result['id'].'">

        <lable for="name">Name</lable>
       <input type="text" name="name" value="'.$result['name'].'"required/>

      <lable for="class">Class</label>
     <input type="text" id="class" name="class" value="'.$result['class'].'"required/>

      <lable for="sub">subject</lable>
      <input type="text" id="sub" name="subject" value="'.$result['subject'].'"required/>

      <lable for="marks">marks</lable>
      <input type="text" id="marks" name="marks" value="'.$result['marks'].'"required/>
      <button type="submit" name="update">Update</button>
        </form>

        
        
        </div>
        
        
        ';
    }
    
}


    ?>
</body>
</html>