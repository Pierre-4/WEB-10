<html>
<head>
    <title></title>
</head>
<body>
<?php

function add(){


$db = "lab8";
$link = mysqli_connect('localhost', 'root', 'password');
if ( !$link ) die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link, $db  ) or die ("Невозможно открыть $db");

if (!isset($_POST['region']) ||
    !isset($_POST['city']) || !isset($_POST['uname']) ){
        die ("Не все данные введены.<br>
                Пожалуйста, вернитесь назад и закончите ввод");
}
else{
$uname   = trim ( $_POST['uname'] );
$city = trim ( $_POST['city'] );
$region  = trim ( $_POST['region'] ) ;
$uname  = addslashes ( $uname );
$city = addslashes ( $city );
$region  = addslashes ( $region ) ;



$query = "INSERT INTO university VALUES ('".intval($_POST['ID'])."','".$region."', '".$city."',
    '".$uname."')";
$result = mysqli_query ($link , $query );
if ($result) echo "Університет додано в базу даних.";
mysqli_close ( $link );
}
}
if (isset($_POST['btn_2'])) {
	add();
	}
function addspec(){


$db = "lab8";
$link = mysqli_connect('localhost', 'root', 'password');
if ( !$link ) die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link, $db  ) or die ("Невозможно открыть $db");

if (!isset($_POST['title']) ||
    !isset($_POST['pick1']) || !isset($_POST['pick2'])|| !isset($_POST['places']) ){
        die ("Не все данные введены.<br>
                Пожалуйста, вернитесь назад и закончите ввод");
}
else{
$title   = trim ( $_POST['title'] );
$pick1 = trim ( $_POST['pick1'] );
$pick2  = trim ( $_POST['pick2'] ) ;
$title = addslashes ( $title );
$pick1 = addslashes ( $pick1 );
$pick2  = addslashes ( $pick2 ) ;



$query = "INSERT INTO speciality VALUES ('".intval($_POST['ID'])."','".$title."', '".$pick1."',
    '".$pick2."', '".intval($_POST['places'])."' )";
$result = mysqli_query ($link , $query );
if ($result) echo "Спецільність додано в базу даних.";
mysqli_close ( $link );
}
}
if (isset($_POST['btn_3'])) {
  addspec();
  }

function addspecuni(){


$db = "lab8";
$link = mysqli_connect('localhost', 'root', 'password');
if ( !$link ) die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link, $db  ) or die ("Невозможно открыть $db");

if (!isset($_POST['IDSpec']) || !isset($_POST['IDUni']) || !isset($_POST['rating'])|| !isset($_POST['min_budg'])|| !isset($_POST['min_cont']) ){
        die ("Не все данные введены.<br>
                Пожалуйста, вернитесь назад и закончите ввод");
}
else{

$query = "INSERT INTO spec_uni VALUES ('".floatval($_POST['ID'])."','".floatval($_POST['IDSpec'])."', '".floatval($_POST['IDUni'])."',
    '".floatval($_POST['rating'])."','".floatval($_POST['min_budg'])."', '".floatval($_POST['min_cont'])."' )";
$result = mysqli_query ($link , $query );
if ($result) echo "Спецільність додано в базу даних.";
mysqli_close ( $link );
}
}
if (isset($_POST['btn_4'])) {
  addspecuni();
}

function addapplication(){


$db = "lab8";
$link = mysqli_connect('localhost', 'root', 'password');
if ( !$link ) die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link, $db  ) or die ("Невозможно открыть $db");

if (!isset($_POST['IDSpec_Uni']) ||  !isset($_POST['rating'])|| !isset($_POST['uname'])|| !isset($_POST['sname']) ){
        die ("Не все данные введены.<br>
                Пожалуйста, вернитесь назад и закончите ввод");
}
else{
$name   = trim ( $_POST['uname'] );
$sname = trim ( $_POST['sname'] );
$name = addslashes ( $name );
$sname = addslashes ( $sname );



$query = "INSERT INTO application VALUES ('".floatval($_POST['ID'])."','".floatval($_POST['IDSpec_Uni'])."', 
    '".floatval($_POST['rating'])."','".$name."' , '".$sname."' )";
$result = mysqli_query ($link , $query );
if ($result) echo "Вашу заявку прийнято.";
mysqli_close ( $link );
}
}
if (isset($_POST['btn_8'])) {
  addapplication();
}
?>