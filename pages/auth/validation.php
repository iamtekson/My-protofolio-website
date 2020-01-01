<?php
    session_start();
    $name = $_POST['uname'];
    $password = $_POST['psw'];
    @include('../../_partials/_db_connect.php');
    $sql = "SELECT * FROM superUser WHERE name = '$name' && password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if($num==1) {
        header('location:../../index.php');
    } else{
        header('location:../dashboard.php');
    }
            
?>