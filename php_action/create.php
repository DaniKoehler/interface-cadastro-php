<?php

session_start();

require_once 'db_connect.php';
require_once 'confere_cep.php';
require_once 'seguranca.php';

if(isset($_POST['btn-cadastrar'])){

    if(confereCep::zipCodeValidate($_POST['cep']) == false){
        $_SESSION['mensagem'] = 'Cep inválido';
        header('Location: ../index.php');
        die;
    }
    else{
        $nome = clear($_POST['nome']);
        $sobrenome = clear($_POST['sobrenome']);
        $idade = clear($_POST['idade']);
        $cep = clear($_POST['cep']);
    
        $sql = "INSERT INTO clientes (nome, sobrenome, idade, cep) VALUES ('$nome', '$sobrenome', '$idade', '$cep')";

        $stmt = mysqli_query($connect, $sql);
    
        if($stmt){
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
            die;
        }
        else{
            $_SESSION['mensagem'] = "Erro!', usuário não cadastrado";
            header('Location: ../index.php');
            die;
        }
    }
}
session_unset();