<?php
session_start();

// Inicialização da variável de sessão 'names' se ainda não estiver definida
if (!isset($_SESSION['names'])) {
    $_SESSION['names'] = [];
}

$names = $_SESSION['names'];

if (isset($_POST['enviar'])) {
    $name = $_POST["name"];
    if (!empty($name)) {
        array_push($names, $name);
        $_SESSION['names'] = $names;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter name" required>
        <button type="submit" name='enviar'>Enviar</button>
        <a href="/names.php">Names</a>
    </form>

    <ul>
        <?php
        foreach ($names as $name) {
            echo "<li>" . $name . "</li>";
        }
        ?>
    </ul>
</body>

</html>