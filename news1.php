<?php
include('./dbc.php');
$sql="SELECT categories.name,news.news_date,news.title,news.author
news.image
 from categories RIGHT JOIN news
ON news.category_id=categories.category_id";
$stmt=$conn->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll();?>