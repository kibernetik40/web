<?php

require('db.php');
$db = new mysqli($host, $user, $pass, $database);

if (mysqli_connect_errno()) {
    echo 'Connection failed error';
    exit();
}
$db->set_charset("utf8");


@$insert = $_POST['insert'];


if (!empty($_FILES['images']['name'][0])) {


    $targetDir = dirname(__FILE__).'/file//';

    $images_arr = array();
    foreach ($_FILES['images']['name'] as $key => $val) {
        $image_name = $_FILES['images']['name'][$key];
        $tmp_name = $_FILES['images']['tmp_name'][$key];
        $size = $_FILES['images']['size'][$key];
        $type = $_FILES['images']['type'][$key];
        $error = $_FILES['images']['error'][$key];


        $fileName = basename($image_name);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            // Store images on the server
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFilePath)) {
                $images_arr[] = $targetFilePath;
        }
    }

}


if ($insert != "" ) {
    if(isset($image_name)){
        $sql = $db->query("INSERT INTO test VALUES (null,'" . $insert . "','" . $image_name . "')");

    }else{
    $sql = $db->query("INSERT INTO test VALUES (null,'" . $insert . "','')");
    }
    header("Location: index.php");
}


elseif(isset($image_name)){
        $sql = $db->query("INSERT INTO test VALUES (null,'','" . $image_name . "')");
        header("Location: index.php");
}
else {
           header("Location: err.php");
}
?>