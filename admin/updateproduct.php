<?php

session_start();

  include_once '../db.php';

if (isset($_GET['id'])) {
   $id=$_GET['id'];
   if (isset($_POST['price'])) {
     $price1 =   $_POST["price"];
     $query_delete = "UPDATE product SET price=$price1 WHERE id = '$id'";
     $result_delete = $connection->query($query_delete);
   }else {
     echo "error";
   }



header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>
