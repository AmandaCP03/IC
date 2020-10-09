<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química dos materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(function(){
            //SUBTÓPICOS DO MENU - METAIS
            $("#metais").mouseenter(function(){
                //var href = $(this).attr('href'); // pega o valor do atributo href da âncora clicada
                $('#sub_metais').html("<ul style='list-style: none; margin:0; font-size:16px;'><li style='margin-bottom:5px;'> Teoria</li><li style='margin-bottom:5px;'> Obtenção</li><li style='margin-bottom:5px;'> Aplicação</li></ul>");
            });
            $("#sub_metais").mouseleave(function(){
                $("#sub_metais").html("");
            });

            //SUBTÓPICOS DO MENU - AÇO
            $("#aco").mouseenter(function(){
                $('#sub_aco').html("<ul style='list-style: none; margin:0; font-size:16px;'><li style='margin-bottom:5px;'> Teoria</li><li style='margin-bottom:5px;'> Obtenção</li><li style='margin-bottom:5px;'> Aplicação</li></ul>");
            });
            $("#sub_aco").mouseleave(function(){
                $("#sub_aco").html("");
            });

            //SUBTÓPICOS DO MENU - POLIMEROS
            $("#polimeros").mouseenter(function(){
                $('#sub_polimeros').html("<ul style='list-style: none; margin:0; font-size:16px;'><li style='margin-bottom:5px;'> Teoria</li><li style='margin-bottom:5px;'> Obtenção</li><li style='margin-bottom:5px;'> Aplicação</li></ul>");
            });
            $("#sub_polimeros").mouseleave(function(){
                $("#sub_polimeros").html("");
            });
        });
    </script>
</head> 
<body>
    <?php
        include "inc/cabecalho.inc";
    ?>
<div id="wrapper" class="d-flex">
        
    <div id="page-content-wrapper">
        <nav class="navbar navbar-light bg-light border-bottom navbot fixed-top">
            <button style="background-color:#e9e9e9; border:1px solid silver;" class="btn btn-md" id="menu-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="col-lg-10 offset-lg-2 col-sm-4 offset-sm-0">   
            <div class="conteudo">
                <h5>Vídeos que possam ajudar</h5><hr/>
                <ul>
                    <div class = "video">
                        <iframe src="https://www.youtube.com/embed/ercdzLrY27Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!--<p><li><a href="https://www.youtube.com/watch?v=ercdzLrY27Q&list=PLA90935055A0C9030&index=2" target="_blank"> 
                    https://www.youtube.com/watch?v=ercdzLrY27Q&list=PLA90935055A0C9030&index=2</a></li></p>-->
                    
                    <div class = "video">
                        <iframe src="https://www.youtube.com/embed/lgeUM605Q6Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                   
                    </div>
                    <!--<p><li><a href="https://www.youtube.com/watch?v=lgeUM605Q6Q" target="_blank"> 
                    https://www.youtube.com/watch?v=lgeUM605Q6Q</a></li></p>-->

                    <div class = "video">
                        <iframe src="https://www.youtube.com/embed/g2KEQjBo-Mk?list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!--<p><li><a href="https://www.youtube.com/watch?v=g2KEQjBo-Mk&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=1" target="_blank"> 
                    https://www.youtube.com/watch?v=g2KEQjBo-Mk&list=PLo7ndkxMhMeAqI018-u9g9INIQ4DM9EVf&index=1</a></li></p>-->
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