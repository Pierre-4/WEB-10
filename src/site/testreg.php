<?php
    session_start();
    function  userlog () {
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
if (empty($email) or empty($email)) 
    {
    exit ("Ви маєте заповнити всі поля");
    }
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
$pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $email = trim($email);
    $pass = trim($pass); 
 $link = mysqli_connect('localhost', 'root', 'password') or  die ("неможливо підключитися до MySQL");
mysqli_select_db ( $link , 'lab8' ) or die ("Неможливо відкрити   БД");
    
$result = mysqli_query($link,"SELECT * FROM users WHERE email='$email'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['pass']))
    {
    exit ("Вибачте, пароль невірний.");
    }
    else {
    if ($myrow['pass']==$pass) {

    $_SESSION['email']=$myrow['email']; 
    $_SESSION['id']=$myrow['id'];
    echo "Ви успішно увійшли! <a href='index.php'>Головна сторінка</a>";
    }
 else {
    exit ("Вибачте, пароль невірний.");
    }
    }
}
if (isset($_POST['btn_9'])) {
    userlog();
    }


function  adminlog () {
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
if (empty($email) or empty($email)) 
    {
    exit ("Ви маєте заповнити всі поля");
    }
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
$pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $email = trim($email);
    $pass = trim($pass); 
 $link = mysqli_connect('localhost', 'root', 'password') or  die ("неможливо підключитися до MySQL");
mysqli_select_db ( $link , 'lab8' ) or die ("Неможливо відкрити   БД");
    
$result = mysqli_query($link,"SELECT * FROM admin WHERE email='$email'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['pass']))
    {
    exit ("Вибачте, пароль невірний.");
    }
    else {
    if ($myrow['pass']==$pass) {

    $_SESSION['email']=$myrow['email']; 
    $_SESSION['id']=$myrow['id'];
    echo "Ви успішно увійшли! <a href='admindex.php'>Можете приступати до роботи!</a>";
    }
 else {
    exit ("Вибачте, пароль невірний.");
    }
    }
}
if (isset($_POST['btn_10'])) {
    adminlog();
    }


    ?>