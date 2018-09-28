<?php
$sender=$_POST['sender'];
$name=$_POST['name'];
$msg=$_POST['msg'];

$to="sjcitvtuathletics2018@gmail.com";
mail($to,$rec,$name,$msg);
header("Location: contact.html");
?>