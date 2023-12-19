<?php
    include_once('../includes/header.php');
    

        if(isset($_GET['acao'])){
            $acao = $_GET['acao'];

            if($acao == 'bemvindo'){
                include_once('./../index.php'); 

            }elseif($acao == 'usuarios'){
                include_once('../paginas/usuarios/index.php');
            }elseif($acao == 'inserir_novo'){
                include_once('../paginas/usuarios/cadastro_usuario.php'); 

            }elseif($acao == 'itens'){
                include_once('../paginas/itens/index.php'); 
            }elseif($acao == 'inserir_item'){
                include_once('../paginas/itens/cadastro_itens.php'); 

            }elseif($acao == 'perfil'){
                include_once('../paginas/perfil.php');
            }elseif($acao == 'itens'){
                include_once('../paginas/itens.php');
            }elseif($acao == 'rel_pessoas'){
                include_once('../paginas/relatorios/relatorio_pessoas.php');
            }elseif($acao == 'rel_itens'){
                include_once('../paginas/relatorios/relatorio_itens.php');
            }
        }else{
            include_once('./../index.php'); 
        }

    include_once('../includes/footer.php');

    // ini_set('display_errors', 'on');
    // error_reporting(E_ALL | E_STRICT);



    
