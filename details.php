
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
    $id=$_GET['e_id'];

   $sql = "SELECT * FROM employees where e_id='$id'";
   $reqult= mysqli_query($conn, $sql);
?>
<table border='1'> 


<ui>

<?php
   if(mysqli_num_rows($reqult)>0){

    while($employee=mysqli_fetch_assoc($reqult)){
              ?>
              <li><strong> ID: </strong><?php echo $employee['e_id'];?></li>
<li><strong> Name: </strong><?php echo $employee['e_name'];?></li>
<li><strong> Email:</strong> <?php echo $employee['e_email'];?></li>
<li><strong> Phone Number:</strong> <?php echo $employee['e_phone'];?></li>
             
              
              <?php
    }
   }
   else{
       echo '0 result';
   }


    ?>
</ui>


<p><a href = "employees.php">Back to Employees</a></p>
</table>


</body>
</html>