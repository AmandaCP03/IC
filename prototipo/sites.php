<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química dos materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head> 
<body>
<?php
        include "inc/cabecalho.inc";
        /*include "menu.inc";*/
    ?>
    <div id="wrapper" class="d-flex">
        
        <div id="page-content-wrapper">
            <nav class="navbar navbar-light bg-light border-bottom navbot fixed-top">
                <button style="background-color:#e9e9e9; border:1px solid silver;" class="btn btn-md" id="menu-toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="col-lg-6 offset-lg-2 col-sm-5 offset-sm-0">
                <div class="conteudo">
                    <h5>Sites que possam dar apoio:</h5>
                    <ul>
                        <p><li><a href="https://ppgquimica.jatai.ufg.br/p/26210-quimica-de-materiais" target="_blank"> 
                        https://ppgquimica.jatai.ufg.br/p/26210-quimica-de-materiais</a></li></p>

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