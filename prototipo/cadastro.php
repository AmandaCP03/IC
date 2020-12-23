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
</head> 
<body>
<?php
        include "inc/cabecalho_cad.inc";
        /*include "menu.inc";*/
    ?>
    <div class="conteudo col-lg-6 col-sm-12 offset-lg-3">
        <h2 style="font-family:'Arial'; color:#363636; margin-bottom:30px; border-bottom:1px solid #D3D3D3;">Cadastre-se</h2>

        <form action="cadastrar.php" method="POST">
            <div class="row">
                <div class="form-group col-lg-4 col-sm-12" style="position:absolute;">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="material-icons">portrait</span>
                        </div>
                        <input type="text" name="cpf" id="cpf" class="form-control cpf" placeholder="CPF" required="required"/>
                    </div>
                </div>
                <div class="form-group col-lg-8 col-sm-12 offset-lg-4" >
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="material-icons">mail_outline</span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control email" placeholder="Email" required="required"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-12 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="material-icons">person_outline</span>
                        </div>
                        <input type="text" name="nome" class="form-control" placeholder="Nome" required="required"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-12 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="material-icons">card_travel</span>
                        </div>
                        <input type="text" name="instituicao" class="form-control" placeholder="Instituição" required="required"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-6 col-sm-6" style="position: absolute;">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="material-icons">lock_outline</span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required="required"/>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-sm-6 offset-6" style="position: absolute;">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="material-icons">lock_outline</span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Confirmação" required="required"/>
                    </div>
                </div>
            </div>
    
            <div class = "float-right col-lg-2 col-sm-4" style="margin-top:70px;">
                <button type="submit" class="bot bot_form">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validaform.min.js"></script>
</body>
</html>