<?php
function search(){

$link = mysqli_connect('localhost', 'root', 'password') or  die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link , 'lab8' ) or die ("Невозможно открыть  БД");
	
$searchterm =  trim($_POST['searchterm']) ;
$searchterm = addslashes ($searchterm);

$result = mysqli_query ( $link, "SELECT * FROM university WHERE ".$_POST['searchtype']." like '%".$searchterm."%'" );
$i=1;
while($row = mysqli_fetch_array($result))
{
   echo "<p><b>".($i++) . $row['ID']."</b><br>";
   echo $row['uname']."<br>";
   echo $row['city']."<hr>";
}
if ( $i == 1 ) echo "За вашим запитом нічого не знайдено";
mysqli_close($link);
}

if (isset($_POST['btn_1'])) {
	search();
	}
 function searchspecuni(){

$searchterm =  trim($_POST['searchterm']) ;
$searchterm = addslashes ($searchterm);

$link = mysqli_connect('localhost', 'root', 'password') or  die ("Невозможно подключение к MySQL");
mysqli_select_db ( $link , 'lab8' ) or die ("Невозможно открыть  БД");
	
$result = mysqli_query ( $link, "SELECT * FROM spec_uni WHERE ".$_POST['searchtype']." like '%".$searchterm."%'" );
$i=1;
while($row = mysqli_fetch_array($result))
{
   echo "<p><b>".($i++) . $row['ID']."</b><br>";
   echo $row['idSpec']."<br>";
   echo $row['idUni']."<hr>";
}
if ( $i == 1 ) echo "За вашим запитом нічого не знайдено";
mysqli_close($link);
}
if (isset($_POST['btn_7'])) {
	searchspecuni();

}
?>