<?php

session_start();

require_once 'db_connect.php';
require_once 'seguranca.php';

if(isset($_POST['btn-entrar'])){
        $erros = array();
        $login = clear($_POST['login']);
        $senha = clear($_POST['senha']);

        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $stmt = mysqli_query($connect, $sql);

        if(mysqli_num_rows($stmt) == 1){
            $_SESSION['mensagem'] = "Logado com sucesso!";
            header('Location: ../index.php');
            die;
        }
        else{
            $_SESSION['mensagem'] = "Erro!";
            header('Location: ../login.php');
            die;
        }
    }
session_unset();