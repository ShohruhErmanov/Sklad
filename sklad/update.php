<?php 

$data = [
    'id' => $_GET['id'],
    'title' => htmlspecialchars($_POST['title']),
    'time' => date('d-m-Y H:i:s'),
];

    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "UPDATE sklad SET title=:title, created_at=:time WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    header("Location: ./index.php");


?>