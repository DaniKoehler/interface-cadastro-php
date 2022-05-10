<?php
require_once 'db_connect.php';
require_once 'confere_cep.php';
require_once 'seguranca.php';
include_once 'includes/session.php';

if(isset($_POST['btn-editar'])){

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
        $id = clear($_POST['id']);
    
        $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', idade = '$idade', cep = '$cep' WHERE id = '$id'";

        $stmt = mysqli_query($connect, $sql);

        if($stmt){
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: ../index.php');
            die;
        }
        else{
            $_SESSION['mensagem'] = "Erro!', usuário não atualizado";
            header('Location: ../index.php');
            die;
        }
    }
}