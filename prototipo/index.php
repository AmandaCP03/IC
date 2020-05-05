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
        <nav class="navbar navbar-light bg-light border-bottom navbot fixed-top" style="position:fixed;">
            <button style="background-color:#e9e9e9; border:1px solid silver;" class="btn btn-md" id="menu-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    
        <div class="col-lg-8 offset-lg-2 col-sm-5 offset-sm-0">
            <div class="conteudo">
                <h5>Texto de introdução</h5>
                <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Si num tem leite então bota uma pinga aí cumpadi! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.</p>

                <p>Quem manda na minha terra sou euzis! Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Detraxit consequat et quo num tendi nada. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.</p>

                <p>Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Manduma pindureta quium dia nois paga.</p>

                <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Si num tem leite então bota uma pinga aí cumpadi! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.</p>

                <p>Quem manda na minha terra sou euzis! Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Detraxit consequat et quo num tendi nada. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.</p>

                <p>Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Manduma pindureta quium dia nois paga.</p>

                <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Si num tem leite então bota uma pinga aí cumpadi! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.</p>

                <p>Quem manda na minha terra sou euzis! Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Detraxit consequat et quo num tendi nada. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.</p>

                <p>Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Manduma pindureta quium dia nois paga.</p>

                <p>Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Manduma pindureta quium dia nois paga.</p>

                <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Si num tem leite então bota uma pinga aí cumpadi! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.</p>

                <p>Quem manda na minha terra sou euzis! Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Detraxit consequat et quo num tendi nada. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.</p>

                <p>Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Manduma pindureta quium dia nois paga.</p>
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