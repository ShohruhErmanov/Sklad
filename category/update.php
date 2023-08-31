<?php 

$data = [
    'id' => $_GET['id'],
    'name' => htmlspecialchars($_POST['name']),
    'time' => date('d-m-Y H:i:s'),
];

    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "UPDATE category SET name=:name, created_at=:time WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    header("Location: ./index.php");


?>