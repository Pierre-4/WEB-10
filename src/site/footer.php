    <div class="footer">
    	<div style="float: left; width: 40%">
        <a href="index.php?la=ru"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20px"></a>
        <a href="index.php?la=ukr"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAACnCAMAAAAPIrEmAAAACVBMVEUAW7v/1QCAmF1B+3A0AAAAg0lEQVR4nO3PAREAIAADoWn/0ObwHhqwAQAAAAAAAAAAAAAAAAAAAAAAAAD87mbtZKkXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRepF6kXqRc9ZyNTA3+oowQAAAAASUVORK5CYII=" width="20px"></a>
        <a href="index.php?la=en"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAACuCAMAAAClZfCTAAAAFVBMVEX////NICzLABXtv8HtwsTMDh/hkJOQTrJjAAABiUlEQVR4nO3asQ3DMBAEQVqk1H/JdgcTPgTvVHDY+Naata8PXHt44rQSUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRHSc6Exv3KPOcyvR/ZzZjeuaxUK/RsMTlyf+uxJRiahEVCIqEZWISkQlohJRiahEVCIqEZWISkQlohJRiahEVCIqEZWISkQlohJRiahEVCIqEZWISkRdsKgjH01fLd9wBx3WqZhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiFyT6AlXQRZ39U6PdAAAAAElFTkSuQmCC" width="20px"></a>
    	
    	</div>
    	<div align="right">

    <a href="contact.php"><?php echo $contactus;?></a>    	
            <div id="clock"></div>
    <script type="text/javascript">
        window.addEventListener ("load",function() {
            setInterval(function(){
                var request = new XMLHttpRequest();
                request.open('GET', 'clock.php', true);
                request.addEventListener('readystatechange', function(){
                    if ((request.readyState ==4) && (request.status == 200)){
                        var clock = document.getElementById('clock');
                        clock.innerHTML = request.responseText;
                    }

                }); request.send();
            }, 100);
        });
    </script>
    </div>
</div>

</body>
</html>