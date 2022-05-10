<?php
session_start();

if(! isset($_SESSION['usuario'])) {
    header('Location: login.php?message='.urlencode('Precisa estar logado!'));
    die;
}