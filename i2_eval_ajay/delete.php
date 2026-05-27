<?php
include 'db.php';

if (!isset($_SESSION['id'])) {
    header('Location:login.php');
}

if (isset($_SESSION['id'])) {
    $id=$_SESSION['id'];

    $sql = $con -> prepare('delete from menu where id =?');
    $sql -> bind_param('i',$id);
    if ($sql -> execute()) {
        header('location:dashboard.php');
    }
}





?>