<?php
include_once 'includes/header.php';
include_once 'includes/mensagem.php';
include_once 'estilo/estilo.php';
?>

<div id="central" class="row">
    <form class="col s6" action="php_action/verifica_login.php" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="login">
          <label for="icon_prefix">Usuário</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_senha" type="password" class="validate" name="senha">
          <label for="icon_senha">Senha</label>
        </div>
        <div id="buttons">
        <button id="btn-entrar" type="submit" name="btn-entrar" class="btn green">Entrar</button>
        <a href="adicionar_login.php" id="btn-cadastrar-login" class="btn blue">Cadastrar</a>
        </div>
      </div>
    </form>
  </div>

<?php
include_once 'includes/footer.php';
?>