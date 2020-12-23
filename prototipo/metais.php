<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química de materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head> 
<body>
    <?php
        include "inc/cabecalho.html";
        /*include "menu.inc";*/
    ?>
            <div class="col-lg-10 offset-lg-2 col-sm-5 offset-sm-0">
                <div class="conteudo">
                    <?php
                        include "inc/metais.inc";
                    ?>
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