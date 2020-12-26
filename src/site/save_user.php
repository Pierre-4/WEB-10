<?php
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
 if (empty($email) or empty($password))
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $email = trim($email);
    $pass = trim($pass);
    $link = mysqli_connect('localhost', 'root', 'password') or  die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link , 'lab8' ) or die ("Невозможно открыть  БД");
    $result = mysqli_query("SELECT id FROM users WHERE email='$email'",$link);
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = mysql_query ("INSERT INTO users (email,password) VALUES('$email','$password')");
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>