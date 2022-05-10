<?php
require_once 'db_connect.php';
require_once 'seguranca.php';

if(isset($_POST['btn-entrar'])) {
        $login = clear($_POST['login']);
        $senha = clear($_POST['senha']);

        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND password = '$senha'";
        $stmt = mysqli_query($connect, $sql);

        if(mysqli_num_rows($stmt) == 1) {
            session_start();
            $_SESSION['mensagem'] = "Logado com sucesso!";
            $_SESSION['usuario'] = mysqli_fetch_row($stmt);
            header('Location: ../index.php');
            die;
        } else {
            $_SESSION['mensagem'] = "Erro!";
            header('Location: ../login.php');
            die;
        }
    }