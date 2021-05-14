
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

   $sql = "SELECT * FROM employees where e_id=$id";
   $reqult= mysqli_query($conn, $sql);
?>
<table border='1'> 

<form action="" method="POST">

<?php
   if(mysqli_num_rows($reqult)>0){

    while($employee=mysqli_fetch_assoc($reqult)){
              ?>
              
<table>
            <tr>
            <td>Username:</td>
            <td><input type="text" name="e_name"  value ="<?php echo $employee['e_name'];?>"required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="e_email" value ="<?php echo $employee['e_email'];?>" required></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td><input type="tel" name="e_phone" value ="<?php echo $employee['e_phone'];?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="e_update"></td>
        </tr>
        </table>
              
              <?php
    }
   }
   else{
       echo '0 result';
   }


    ?>

</form>

<p><a href = "employees.php">Back to Employees</a></p>

<?php
if(isset($_POST['e_update'])){
    $e_name=$_POST['e_name'];
    $e_email=$_POST['e_email'];
    $e_phone=$_POST['e_phone'];

    $sql="UPDATE employees SET e_name='$e_name', e_email='$e_email', e_phone='$e_phone' where e_id='$id'";
    if(mysqli_query($conn,$sql)){
       header('Location: employees.php');
    }else{
        echo "Error Updating record ".mysqli_error($conn);
    }
}
?>

</table>


</body>
</html>