<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Cadastro </h3>
        <form action="php_action/create_login.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="login" id="login">
                <label for="login">Login</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="senha" id="senha">
                <label for="senha">Senha</label>
            </div>
            <button type="submit" name="btn-cadastrar-login" class="btn">Criar Cadastro</button>
            <a href="login.php" class="btn red">Cancelar</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>