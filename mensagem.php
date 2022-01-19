<?php
//Inicia a sessão
session_start();
if(isset($_SESSION['mensagem'])) { ?>       
<script>
    //Mensagem
    //----------------------------------------------------------------------
    //A função onload só sera 'executada' depois que a página for carregada.
    window.onload = function () {
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?> '});
    };
</script>

<?php
}

//Limpa a sessão
session_unset();

?>