<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>

<body>
    <?php if ($artigos): ?>
    <?php foreach ($artigos as $artigo): ?>
    <li>
        <?php echo $artigo['id'] ?> -
        <?php
                $nomePost = isset($artigo['nome']) ? $artigo['nome'] : 'não tem texto';
                echo $nomePost;
                ?>
    </li>
    <?php endforeach; ?>
    <?php endif; ?>

    <ul>
        <?php if ($pagina == 1): ?>
        <button disabled>Anterior</button>
        <?php else: ?>
        <a href="./index.php?pagina=<?php echo $pagina - 1 ?>">Anterior</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $numeroDePaginas; $i++): ?>

        <a href="./index.php?pagina=<?php echo $i ?>">
            <?php echo $i ?>
        </a>
        <?php endfor ?>

        <?php if ($pagina == $numeroDePaginas): ?>
        <a href="./index.php?pagina=<?php echo $pagina + 1 ?>">proximo</a>
        <?php else: ?>
        <button disabled>proximo</button>
        <?php endif; ?>
    </ul>
</body>

</html>