<?php

$title = $_POST['title'];
$description = $_POST['description'];
$gitlink = $_POST['github'];
$date = $_POST['date'];
$liveat = $_POST['liveat'];

$numberOfRows = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM myWorks'));
@include('../../_partials/_db_connect.php');
$sql = 'INSERT INTO myWorks(title, discription, date, githubLink, liveAt) values($title, $description, $date, $gitlink, $liveat)';
mysqli_query($conn, $reg);



// Check if image file is a actual image or fake image
if(isset($_POST['submit'])) {
    $file = $_FILES["file"];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 10000) {
                $fileNewName = 'projects-src-'.$numberOfRows.'png';
                $fileDestination = '../../img/'.$fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header('Location: ../dashboard.php');
            }else {
                echo "Your file is too large!";
            }
        } else{
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}

?>