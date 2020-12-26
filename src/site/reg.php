<?php include 'header.php';?>

<?php
function reg(){
 $connect=mysqli_connect('localhost', 'root', 'password', 'lab8');
 $surname=mysqli_real_escape_string($connect,$_POST['surname']);
 $name=mysqli_real_escape_string($connect,$_POST['name']);
 $email=mysqli_real_escape_string($connect,$_POST['email']);
 $pass=mysqli_real_escape_string($connect,$_POST['pass']);
 $query=mysqli_query($connect,"SELECT * FROM `users` WHERE email='{$email}'");
 $numr=mysqli_num_rows($query);
 if($numr==0)
 {
 $sql_q="INSERT INTO `users`
 (surname,name,email,pass)
 VALUES('{$surname}','{$name}', '${email}', '{$pass}')";
 $res=mysqli_query($connect,$sql_q);
 if($res){
 echo "Аккаунт успешно создан";
 }
 else {
 echo "Не удалось добавить информацию";
 }
 }
else {
 echo "Этот ник занятый. Попробуйте другой!";
 }
}
if(isset($_POST["register"])){
  reg();
}
?>
<body>
<div>
<div>
 <h1>Зарегистрируйтесь</h1>
<form action="reg.php" method="post" name="registerform">
<p><label>Ваше имя:<br>
<input name="surname"="20" type="text" value=""></label></p>
 <p><label>Жеемый ник:<br>
 <input name="name" size="30" type="text"></label></p>
<p><label>Ваш email:<br>
<input name="email" size="30" type="email"></label></p>
<p><label>Пароль:<br>
<input name="pass" size="30" type="password"></label></p>
<p><input name="register" type="submit" value="Register"></p>
<p><a href="index.php">Уже зарегистрированы?</a></p>
 </form>
</div>
</div>
</body>
</body>
</html>