
<?php require 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, inital-scale-1.0">
<title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <table>
            <tr>
            <td>Username:</td>
            <td><input type="text" name="e_name" required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="e_email" required></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td><input type="tel" name="e_phone" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="e_add"></td>
        </tr>
        </table>
    </form>
    <p><a href ="employees.php"> Employees</a></p>


<?php
if(isset($_POST['e_add'])){
    $e_name=$_POST['e_name'];
    $e_email=$_POST['e_email'];
    $e_phone=$_POST['e_phone'];

    $sql="INSERT INTO  employees(e_name, e_email, e_phone) VALUES ('$e_name','$e_email','$e_phone')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('New record created successfully');</script>";
    }else{
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}

?>


</body>




</html>