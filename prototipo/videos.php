<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química de materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
</head> 
<body>
    <?php
        include "inc/cabecalho.html";
        include "modal_contato.php";
    ?>
        <div class="col-lg-10 offset-lg-2 col-sm-4 offset-sm-0">   
            <div class="conteudo">
                <center> 
                    <h1 style="font-family: 'Sulphur Point', sans-serif;">
                        <img src="img/video_icone.png" width=45 height=45 style="position:relative; margin-bottom:10px;">
                        <b>Vídeos</b>
                    </h1>
                </center>
                <h4 style="font-family: 'Sulphur Point', sans-serif; margin-top:20px;"> Introdução </h4><hr>
                <ul>
                    <p><li><a href="https://www.youtube.com/watch?v=ercdzLrY27Q&list=PLA90935055A0C9030&index=2" target="_blank"> 
                    Telecurso Materiais 02 - Propriedades</a></li></p>
                    
                    <p><li><a href="https://www.youtube.com/watch?v=lgeUM605Q6Q" target="_blank"> 
                    Ciência dos Materiais 01 - Por que estudar Ciência e Engenharia dos Materiais?</a></li></p>

                    <p><li><a href="https://www.youtube.com/watch?v=g2KEQjBo-Mk&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=1" target="_blank"> 
                    Ciência dos Materiais - Introdução </a></li></p>
                </ul>
                <h4 style="font-family: 'Sulphur Point', sans-serif; margin-top:20px;"> Estrutura atômica </h4><hr>
                <ul>
                    <p><li><a href="https://www.youtube.com/watch?v=n6RyHMAKBo0&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=2" target="_blank"> 
                    Estrutura Atômica - 1/4</a></li></p>
                    <p><li><a href="https://www.youtube.com/watch?v=femXZofczw0&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=3" target="_blank"> 
                    Estrutura Atômica - 2/4</a></li></p>
                    <p><li><a href="https://www.youtube.com/watch?v=3nsyQ2NUVl4&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=4" target="_blank"> 
                    Estrutura Atômica - 1/4</a></li></p>
                    <p><li><a href="https://www.youtube.com/watch?v=9d7MSz3cdCM&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=5" target="_blank"> 
                    Estrutura Atômica - 1/4</a></li></p>
                </ul>
                <h4 style="font-family: 'Sulphur Point', sans-serif; margin-top:20px;"> Ligações Químicas </h4><hr>
                <ul>
                    <p><li><a href="https://www.youtube.com/watch?v=h0T9IRn7o4M&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=6" target="_blank"> 
                    Ligações Químicas</a></li></p>
                </ul>
                <h4 style="font-family: 'Sulphur Point', sans-serif; margin-top:20px;"> Estrutura dos metais </h4><hr>
            </div>
        </div>
    </div>
    <?php
        include "inc/tema.php";
        include "inc/rodape.html";
    ?>


</div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <?php
        include "inc/rodape.html";
    ?>
</body>
</html>