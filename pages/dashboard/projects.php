<?php
$title = $_POST['title'];
$description = $_POST['description'];
$gitlink = $_POST['github'];
$date = $_POST['date'];
$liveat = $_POST['liveat'];

@include('../../_partials/_db_connect.php');
$sql = 'INSERT INTO myWorks(title, description, date, githubLink, liveAt) values($title, $description, $date, $gitlink, $liveat)';
mysqli_query($conn, $reg);

if(isset($_POST['submit'])) {
    $file = $_FILES['picture'];
    echo $file;
}



?>