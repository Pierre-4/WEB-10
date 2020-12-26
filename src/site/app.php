 <!DOCTYPE html>
<html la="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="lab8.css">
</head>
<body>
<style>
    .bd{
        border: 4px outset;
        background: #fc3;
        padding: 5px;
        float: left;
        width: 20%;
        margin-right: 1%
        margin-left: 3%;
    }
</style>
<div class="bd">
        <form action="insert_page.php" method="post">
            <table>
                <tr><td>ID</td><td><input  name="ID" maxlength="3" size="3"></td></tr>
                <tr><td>ID спец. в університеті</td><td><input name="IDSpec_Uni" maxlength="20" size="20"></td></tr>
                <tr><td>Рейтинг</td><td><input name="rating" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>Ім'я</td><td><input name="uname" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>Прізвище</td><td><input name="sname" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td colspan="2"><input name="btn_8" type="submit" value="Додати"></td></tr>
                <?php include 'insert_page.php'?>
            </table>
    </div>


</form>
</div>
</body>
</html>