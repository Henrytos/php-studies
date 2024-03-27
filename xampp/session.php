<!-- 
    if(!isset($_SESSION['nome'])){
        $_SESSION['nome']="henry";
    }
    else{
        echo 'ja existe<br>';
    }


    echo $_SESSION['nome'];

    se algo foi enviado atravez da 'acao' por post
    isset($_POST['acao']

-->


<?php
    // iniciando seções
    session_start();
    
    // se enviar post pelo botão acao
    //name="acao"    

    if(isset($_POST['acao'])){
        // dentro do post quero o valor de tarefa    
            $tarefas=strip_tags($_POST['tarefa']);

        // verificando se existi seçaõ tarefass

        // se não existir session tarefas
        if(! isset($_POST['tarefa'])){
            $_SESSION['tarefas']=array();
            // ultima posição
            $_SESSION['tarefas'][]=$tarefas;
        }
    // se existir
        else{
            $_SESSION['tarefas'][]=$tarefas;
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List de tarefas</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            padding: 20rem;
            font-family: "Helvetica Neue",Helvetica,Arial;
            display: flex;
            flex-direction: column;
            gap:2rem;
        }
        form{
            display: flex;
            flex-direction: column;
            gap:2rem
        }
        label{
            font-size:1.5rem;
        }
        input[type="text"]{
            all:unset;
            border:1px solid black;
            padding: 0.5rem;

        }
        input[type="submit"]{
            all:unset;
            font-size:1.5rem;
            background-color:#232323;
            color:white;
            text-align:center;
            padding: .2rem;
            cursor: pointer;
            transition:.2s;
            border:1px solid #232323;
        }
        input[type="submit"]:hover{
            color:#232323;
            background-color:#fff;
        }
    </style>
</head>
<body>
    <h2>FORMULARIO:</h2>
    <hr>
    <form action="" method="post">
        <label for="tarefa">Tarefa</label>
        <input type="text" name="tarefa"  id="tarefa" >
        <input type="submit" name="acao" placeholder="Enviar">
    </form>
    <section>
    <?php 

      if(isset($_SESSION['tarefas'])){
        foreach($_SESSION['tarefas'] as $key => $value){
            echo "<p>Tarefa #'.$key.$value.'</p>";
        }
      }
      else{
        echo'Adicione uma tarefa';
      }
    
    ?>
    </section>
</body>
</html>
