<?php
include('./dbc.php');
$id=$_GET['id'];
$sql="DELETE FROM categories  where category_id ='$id'";
$conn->exec($sql);
echo " deleted";?>