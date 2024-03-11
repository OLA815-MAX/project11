<?php
$server_name="localhost";
$user_name="root";
$pwd="";
$db="project1";
try{$conn=NEW PDO("mysql:host=$server_name;dbname=$db",
    $user_name,
    $pwd
);
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    echo "connected";
}
catch(PDOEXCEPTION $er){echo "connection failed" .$er->getmessage();}?>