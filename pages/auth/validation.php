<?php
    session_start();
    $name = $_POST['uname'];
    $pass = $_POST['psw'];
    @include('../../_partials/_db_connect.php');
    $sql = "SELECT * FROM superUser WHERE name = '$name' && password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if($num==1) {
        $_SESSION['user'] = $name;
        header('location:../dashboard.php');
    } else{
        header('location:../../index.php');
    }           
?>