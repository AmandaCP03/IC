<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química dos materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/><link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
    <!-- https://materializecss.com/icons.html -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(function(){
            $("#introducao").click(function(){
                var href = $(this).attr('href'); // pega o valor do atributo href da âncora clicada
                $('#conteudo').load(href);

            });
        });
    </script>
</head> 
<body>
    <?php
        include "inc/cabecalho.inc";
        include "inc/Login.inc";
    ?>
    <div id="wrapper" class="d-flex">
       
    <div id="page-content-wrapper">
        <nav class="navbar navbar-light bg-light border-bottom navbot fixed-top" style="position:fixed;">
            <button style="background-color:#e9e9e9; border:1px solid silver;" class="btn btn-md" id="menu-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button style="border: 1px solid silver" type="button" class="btn btn-light" data-toggle="modal" data-target="#Login">
                Adicione conteúdo 
            </button>
        </nav>
    
        <div class="col-lg-8 offset-lg-2 col-sm-5 offset-sm-0">
            <div class="conteudo" id="conteudo">
                <?php include "inc/bemvindo.inc"; ?>
            </div>
        </div>
    </div>
    <div class="border-right tema" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
        <button id="introducao" style="color: white; background-color: rgb(5, 16, 78);" href="inc/introducao.inc" class="list-group-item list-group-item-action">
            Introdução
        </button>
        <a id="metais"style="color: white; background-color: rgb(5, 16, 78);" href="metais.php" class="list-group-item list-group-item-action">
           Metais
       </a>
       <a id="aco" style="color: white; background-color: rgb(5, 16, 78);" href="aco.php" class="list-group-item list-group-item-action">
           Aço
       </a>
       <a id="polimeros"style="color: white; background-color: rgb(5, 16, 78);" href="#" class="list-group-item list-group-item-action">
           Polímeros
       </a>
        </div>
    </div>
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
        //include "inc/rodape.inc";
    ?>
</body>
</html>