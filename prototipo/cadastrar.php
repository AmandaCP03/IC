<?php

    if(isset($_GET['cpfjaexiste'])){
        echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>CPF já cadastrado!</strong> Tente novamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ';
    }


    include "conexao_pdo.php";

    $cpf=$_POST["cpf"];
    $email=$_POST["email"];
    $nome=$_POST["nome"];
    $instituicao=$_POST["instituicao"];
    $senha=$_POST["senha"];


    //Verifica CPF
   /*$validaCPF = $link->prepare("SELECT cpf from professor WHERE cpf=:cpf");
    $validaCPF -> bindValue(":cpf", $cpf);

    $validaCPF -> execute();

    //Valida Cadastro
    $flagCPF=true;

    $stringHeader='location: index.php?';

    if($validaCPF->rowCount()>0){
        $flagCPF=false;
        $stringHeader.='cpfjaexiste=true';
    }


    if($flagEmail && $flagCPF){*/
        $sth = $link->prepare('INSERT into cliente (nome, cpf, email, senha)
        values (:nome, :cpf, :email, :senha)');

        $sth->bindValue(':cpf', $cpf, PDO::PARAM_STR);
        $sth->bindValue(':email', $email, PDO::PARAM_STR);
        $sth->bindValue(':nome', $nome, PDO::PARAM_STR);
        $sth->bindValue(':intituicao', $intituicao, PDO::PARAM_STR);
        $sth->bindValue(':senha', $senha, PDO::PARAM_STR);
        $sth->execute();

        header('location: index.php');
    /*}else{
        $_SESSION["cpf"]=$cpf;
        $_SESSION["email"]=$email;
        $_SESSION["nome"]=$nome;
        $_SESSION["intituicao"]=$intituicao;
        header($stringHeader);
    }*/
?>