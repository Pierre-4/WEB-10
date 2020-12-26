<?php
    if (empty($_SESSION['email']) or empty($_SESSION['id']))
    {
    echo "Вы вошли на сайт, как гость<br>";
    }
    else
    {
    echo "Вы вошли на сайт, как ".$_SESSION['email']."<br>";
    }
?>