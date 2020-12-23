<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Química de materiais</title>
    <link rel="shortcut icon" href="img/logo2.png" >
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/><link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
    <!-- https://materializecss.com/icons.html -->
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        /*$(function(){
            $("#introducao").click(function(){
                var href = $(this).attr('href'); // pega o valor do atributo href da âncora clicada
                $('#conteudo').load(href);

            });
        });*/
    </script>
</head> 
<body>
    <?php
        include "inc/cabecalho.html";
        include "inc/Login.inc";
    ?>

    <div class="col-lg-8 offset-lg-2 col-sm-5 offset-sm-0">
        <div class="conteudo" id="conteudo">
            <center> <h1 style="font-family: 'Sulphur Point', sans-serif;"><b>Bem Vindo!</b></h1></center>
            <p>Os materiais estão inseridos na vida de todos nós, seja na forma de plásticos, resinas, vidros, cerâmicas ou ligas metálicas. Apesar da importância da temática e da relação entre a Química e os materiais ser direta e inequívoca, os recursos didáticos para seu ensino ainda são pouco numerosos, especialmente aqueles destinados aos estudantes de Ensino Médio. De um modo geral, essa parte tão importante e interessante da química é deixada para ser discutida nas disciplinas de física ou de biologia, perdendo o seu conteúdo químico, isto é, as relações entre aplicação, estrutura, propriedades e preparação dos materiais. No caso específico dos alunos do Curso Técnico em Mecânica Integrado ao Ensino Médio do Campus Araraquara do IFSP, esse conjunto de conhecimentos tem uma importância ainda maior, visto que um dos objetivos específicos do curso é a identificação, classificação e caracterização dos materiais aplicados na construção de componentes, máquinas e instalações mecânicas através de técnicas e métodos de ensaios mecânicos.</p>
            <p>Esse site foi criado com o objetivo de atender essa demanda, promovendo não só a integração entre a Química e a Mecânica, mas também contribuindo para a formação de um profissional/cidadão crítico, capaz de relacionar as questões sociais, econômicas e ambientais envolvidas no tema.</p>
            <p align="Right"><b>Bons estudos!</b></p>

        </div>
        
    </div>
    <?php
        include "inc/tema.php";
        //include "inc/rodape.html";
    ?>

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
    