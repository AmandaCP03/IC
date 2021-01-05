<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química de materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
</head> 
<body>
    <?php
        include "inc/cabecalho.html";
        include "modal_contato.php";
        /*include "menu.inc";*/
    ?>
    <div class="col-lg-8 offset-lg-2 col-sm-5 offset-sm-0">
        <div class="conteudo" id="conteudo">
            <center> 
                <h1 style="font-family: 'Sulphur Point', sans-serif;">
                    <b>Estrutura Atômica</b>
                </h1>
            </center>
            <p> Conteúdo em desenvolvimento </p>
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