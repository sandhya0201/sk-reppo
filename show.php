<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show page</title>
</head>
<style>
    .tbl{
        width: 100%;
        border: 1px solid black;
    }
    th,td{
      border: 1px solid black;
      background-color: grey;
      color:white;
      text-align:center;
    }
</style>
<body>
    <a href="index.php"></a>
</body>

<?php
include "function.php";


$myobj=new myquery();

$fields='*';
$table='oops2';
$condition='';

$getdata=$myobj->getdt($fields,$table,$condition);

if (isset($getdata['0'])){

    echo '<table class="tbl">
    <tr>
    <th>Name</th>    
    <th>Class</th>       
    <th>Subject</th> 
    <th>Marks</th>
    <th>Action</th>
    <th>Update</th>
    </tr>
    ';
foreach($getdata as $result){
    echo '
    <tr>
<td>'.$result["name"].'</td>
<td>'.$result["class"].'</td>
<td>'.$result["subject"].'</td>   
<td>'.$result["marks"].'</td>

<td>
<form action="action.php" method="post">
<input type="hidden" name="id" value="'.$result["id"].'">
<input type="submit" name="delete" value="delete">

</form>
</td>
<td>
<a href="edit.php?id='.$result["id"].'">Edit</td>
<td>upload file</td>
    <td>

    <img src="photos/'.$result["profile_pic"].'" style="height:100px; width: 100px;">

    <form action="action.php" method="post" enctype="multipart/form-data">

    <input type="file" name="files">
    <input type="hidden" name="id" value="'.$result["id"].'">
  <input type="submit" value="upload" name="upload">
    </form>
    </td>
    </tr    
    
    
';

}
echo '</table>';
}
?>
</html> 