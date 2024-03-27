<?php
$id = isset($_GET['id']) ? $_GET['id'] : 1;

try {
    $host = 'mysql:host=localhost;dbname=usuarios';
    $user = 'henry';
    $password = 'Hfra2006';
    $conexion = new PDO($host, $user, $password);

    // metodo quarys
    $rows = $conexion->query("select * from amigos");
    foreach ($rows as $row) {
        print_r($row);
    }

    echo '<br>';
    //prepare statements 
    $statement = $conexion->prepare("select * from amigos where id = :id or true");
    $statement->execute(array(':id' => $id));
    // fetch tás um fetchAll trás todos
    $rows = $statement->fetchAll();
    print_r($rows);


} catch (PDOException $pd) {
    echo "Error: " . $pd->getMessage();
}
?>