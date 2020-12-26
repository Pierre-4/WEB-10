 <!DOCTYPE html>
<html la="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="lab8.css">
</head>
<body>
    <a href="log.php">Вийти</a>
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
    .side11{
    width: 24%;
    background: blue;
    min-height: 500px;
    float: left;
    margin-right: 1%;
}
.side21{
    min-height: 500px;
    float: left;
    width: 24%;
    background: red;
    margin-right: 1%;
}
.side31{
    min-height: 500px;
    float: left;
    width: 24%;
    background: white;
    margin-right: 1%;
}
</style>
<div class="wrapper">
    <div class="bd">
        <form action="insert_page.php" method="post">
            <table>
                <tr><td>ID</td><td><input  name="ID" maxlength="3" size="3"></td></tr>
                <tr><td>Область</td><td><input name="region" maxlength="20" size="20"></td></tr>
                <tr><td>Місто</td><td><input name="city" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>Назва</td><td><input name="uname" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td colspan="2"><input name="btn_2" type="submit" value="Додати"></td></tr>
                <?php include 'insert_page.php'?>
            </table>
    </div>
    <div class="side21">
        <form action="insert_page.php" method="post">
            <table>
        <tr><td>ID</td><td><input  name="ID" maxlength="3" size="3"></td></tr>
                <tr><td>name</td><td><input name="title" maxlength="20" size="20"></td></tr>
                <tr><td>pick1</td><td><input name="pick1" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>pick2</td><td><input name="pick2" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>places</td><td><input name="places" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td colspan="2"><input name="btn_3" type="submit" value="Додати"></td></tr>
            </table>
    </div>
        <div class="side11">
        <form action="insert_page.php" method="post">
            <table>
                <tr><td>ID</td><td><input  name="ID" maxlength="3" size="3"></td></tr>
                <tr><td>ID Спеціальності</td><td><input  name="IDSpec" maxlength="3" size="3"></td></tr>
                <tr><td>ID інституту</td><td><input  name="IDUni" maxlength="3" size="3"></td></tr>
                <tr><td>Середній бал</td><td><input name="rating" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>Мін. бал на бюджет</td><td><input name="min_budg" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td>Мін. бал на контракт</td><td><input name="min_cont" maxlength="20" size="20"></td></tr></td></tr>
                <tr><td colspan="2"><input name="btn_4" type="submit" value="Додати"></td></tr>
              </table>
    </div>
</div>