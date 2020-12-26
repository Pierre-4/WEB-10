 <!DOCTYPE html>
<html la="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="lab8.css">
</head>
<body>
<?php
    if (isset($_GET['la'])){
        $la = $_GET['la'];
    }
        else{
            $la == "en";
    }
    if ($la == "en") {
        include ("eng.php");
    }
    elseif ($la == "ukr"){
        include 'ukr.php';
    }
    elseif ($la == "ru") {
        include 'ru.php';
    };

    ?>
