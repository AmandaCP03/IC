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
                                <span class="material-icons">assignment</span>
                            </div>
                            <input type="number" name="matricula" class="form-control" placeholder="Matrícula"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="material-icons">card_travel</span>
                            </div>
                            <input type="text" name="instituicao" class="form-control" placeholder="Instituição"/>
                        </div>
                    </div>
                    <div class = "float-right">
                        <button class="btn btn-md btn-outline-secondary" href="#" role="button">Cancelar</button>
                        <button type="submit" class="btn btn-md btn-outline-secondary">
                            Entrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>