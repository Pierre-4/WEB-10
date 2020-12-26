<?php include 'header.php';?>
<?php session_start();?>
    <div class="header">
        <h4 align="middle"><?php echo $hello;?></h4>
        <div class="inhead">
        <ul>
        <li><?php echo $list1;?></li>
        <li><?php echo $list2;?></li>
        <li><?php echo $list3;?></li>
        <li><?php echo $list4;?></li>
    </ul>
    </div>
    <div class="usr">
    <a href="reg.php"><?php echo $regi;?></a> <br>
    <a href="log.php"><?php echo $login;?></a><br>
    <a href="app.php"><?php echo $application;?></a>
    <div id="welcome"></div>
    <script type="text/javascript">
        window.addEventListener("load", function() {
            var request = new XMLHttpRequest();

            request.open ('GET', 'picks.php', true);
            request.addEventListener('readystatechange', function(){
                if ((request.readyState = 4) && (request.status = 200)){
                    var welcome = document.getElementById ('welcome');
                    welcome.innerHTML = request.responseText;
                }
            });
            request.send();
        });
</script>

</div>
</div>
    <div class="container row">
        <div class="side1">

             <h2><?php echo $university;?></h2>
            <div>
    <form aсtion="search_uni.php" method="post">
    <?php echo $criteria;?><select name="searchtype">
        <option value="ID" selected>ID</option>
        <option value="region">Назвою</option>
        <option value="city">Містом</option>
    </select>
    <input name = "searchterm">
    <?php echo $searchingterm;?><input type=submit value="Поиск" name="btn_1">

</form>
    </div>
        </div>
        <div class="side2">
         <h2><?php echo $speciality;?></h2>
        <form action="search_uni.php" method="post"><?php include 'search_uni.php'; ?>            
    <?php echo $criteria;?><select name="searchtype">
        <option value="rating">Середній бал</option>
        <option value="min_bugj">Мінімальний бюджет</option>
        <option value="min_cont">Мінімальний</option>
    </select>
    <input name = "searchterm">
    <?php echo $searchingterm;?><input type=submit valuіe="Поиск" name="btn_7">
    
</form>
            </div>
        </div>

    </div>
<?php include 'footer.php';?>