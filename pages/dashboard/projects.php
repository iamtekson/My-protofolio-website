<?php
if(isset($_POST['submit'])) {
    $file = $_FILES('picture');
    $title = $_POST('title');
    echo $title;

    echo $file;
}



?>