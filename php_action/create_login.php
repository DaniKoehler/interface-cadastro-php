<?php

session_start();

require_once 'db_connect.php';
require_once 'seguranca.php';

if(isset($_POST['btn-cadastrar-login'])){

        $login = clear($_POST['login']);
        $senha = clear($_POST['senha']);

        $senha = md5($senha);
        $sql = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";

        $stmt = mysqli_query($connect, $sql);
    
        if($stmt){
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../login.php');
            die;
        }
        else{
            $_SESSION['mensagem'] = "Erro!', usuário não cadastrado";
            header('Location: ../login.php');
            die;
        }
    }
session_unset();