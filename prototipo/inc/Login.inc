<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" style="color:#5a5a5a;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h5 class="modal-title" id="ModalTitulo2">&nbsp; Faça seu login</h5>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="color:#b02728; class="opaco">*Essa opção se encaixa apenas para professores</p>
                <br/>
                
                <form name="modalLogin" action="php/validar_login.php" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="material-icons">person_outline</span>
                            </div>
                            <input type="text" name="nome" class="form-control" placeholder="Nome"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="material-icons">lock_outline</span>
                            </div>
                            <input type="password" name="senha" class="form-control" placeholder="Senha"/>
                        </div>
                    </div>
                    <div class = "float-right">
                        <button type="submit" class="bot bot_form">
                            Entrar
                        </button>
                    </div>
                </form>
                 <a class="bot2 bot_form2" href="cadastro.php" type="button" role="button" style="margin-top:10px;">Cadastrar</a>
            </div>
        </div>
    </div>
</div>