<?php
    session_start();
    $name = $_POST['uname'];
    $password = $_POST['pwd'];
    @include('./_partials/_db_connect.php');

    $sql = "SELECT * FROM superUsers WHERE name = '$name' && passoword = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows()
    
    if($num ==1) {
        echo 'username already taken!';
    } else{
        $reg = "insert into superUsers(name, password) values('$name', '$password')";
        mysqli_query($con, $reg);
        echo 'Registration Success!!!';
    }
            
?>