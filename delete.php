<?php require 'conn.php';

$id=$_GET['e_id'];

$sql = "DELETE  FROM employees where e_id='$id'";
if(mysqli_query($conn,$sql)){
    header('Location: employees.php');
 }else{
     echo "Error Deleting record ".mysqli_error($conn);
 }


?>