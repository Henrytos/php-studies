<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=usuarios', 'henry', 'Hfra2006');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$postPagina = 5;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = $pagina > 1 ? $pagina * $postPagina - $postPagina : 0;

$artigos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM artigos LIMIT $inicio, $postPagina");

$artigos->execute();
$artigos = $artigos->fetchAll();

$numeroArtigos = $conexion->query("SELECT FOUND_ROWS() as total");
$numeroArtigos = $numeroArtigos->fetch()['total'];

$numeroDePaginas = ceil($numeroArtigos / $postPagina);

if ($pagina < 1 || $pagina > $numeroDePaginas) {
    header('Location:index.php?pagina=1 ');
}

require ('index.view.php');

?>