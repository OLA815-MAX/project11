<?php
include('./dbc.php');
$id=$_GET['id'];
$sql="DELETE FROM news  where new_id ='$id'";
$conn->exec($sql);
echo " deleted";?>