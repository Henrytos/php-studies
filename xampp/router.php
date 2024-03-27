<?php
    //obter sem erros
   $page = @$_GET['page'];

    //incluir arquivos
   include('components/header.php');
    //se arquivo existir
    if(file_exists($page.'.php')){
        include($page.'.php');
    }

    include('components/footer.php');
?>

