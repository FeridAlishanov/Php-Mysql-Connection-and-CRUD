
<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
   $sql = "SELECT * FROM employees";
   $reqult= mysqli_query($conn, $sql);
?>
<table border='1'> 
<tr>
<td>ID</td>
<td>NAME</td>
<td>EMAIL</td>
<td>PHONE</td>
<td>Details</td>
<td>Update</td>
<td>Delete</td>
</tr>
<?php
   if(mysqli_num_rows($reqult)>0){

    while($employee=mysqli_fetch_assoc($reqult)){
              ?>

             
             <tr> 
             <td> <?php echo $employee['e_id']; ?> </td>
             <td> <?php echo $employee['e_name']; ?> </td>
             <td> <?php echo $employee['e_email']; ?> </td>
             <td> <?php echo $employee['e_phone']; ?> </td>
             <td><a href= "details.php?e_id=<?php echo $employee['e_id']; ?>" >Details </a></td>
             <td><a href= "update.php?e_id=<?php echo $employee['e_id']; ?>" >Update </a></td>
             <td><a href= "delete.php?e_id=<?php echo $employee['e_id']; ?>" >Delete</a></td>
             </tr>
              
              <?php
    }
   }
   else{
       echo '0 result';
   }


    ?>

</table>


</body>
</html>