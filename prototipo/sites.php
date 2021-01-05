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
</head> 
<body>
<?php
        include "inc/cabecalho.html";
        include "modal_contato.php";
        /*include "menu.inc";*/
    ?>
            <div class="col-lg-6 offset-lg-2 col-sm-5 offset-sm-0">
                <div class="conteudo">
                <center> 
                    <h1 style="font-family: 'Sulphur Point', sans-serif;">
                        <img src="img/site_icone.png" width=40 height=40 style="position:relative; margin-bottom:10px;">
                        <b>Sites</b>
                    </h1>
                </center>
                    <ul>
                        <!-- <p><li><a href="https://ppgquimica.jatai.ufg.br/p/26210-quimica-de-materiais" target="_blank"> 
                        https://ppgquimica.jatai.ufg.br/p/26210-quimica-de-materiais</a></li></p> -->

                        <p><li><a href="http://qnesc.sbq.org.br/online/cadernos/02/" target="_blank"> 
                        http://qnesc.sbq.org.br/online/cadernos/02/</a></li></p>

                        <p><li><a href="http://www.cienciadosmateriais.org/index.php?acao=exibir&cap=23" target="_blank"> 
                        http://www.cienciadosmateriais.org/index.php?acao=exibir&cap=23</a></li></p>
                    </ul>
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
</body>
</html>