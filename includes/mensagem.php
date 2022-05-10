<?php
if(isset($_SESSION['mensagem'])){ ?>
    <script>
        window.onload = function(){
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
        }
    </script>
<?php
}
unset($_SESSION['mensagem']);

if(isset($_GET['message'])){ ?>
    <script>
        window.onload = function(){
            M.toast({html: '<?php echo $_GET['message']; ?>'})
        }
    </script>
<?php
}