<?php 

$data = [
    'id' => $_GET['id'],
    'name' => htmlspecialchars($_POST['name']),
    'email' => htmlspecialchars($_POST['email']),
    'password' => htmlspecialchars(hash('md2', $_POST['password'])),
    'time' => date('d-m-Y H:i:s'),
];

    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "UPDATE users SET name=:name, email=:email, password=:password, created_at=:time WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    header("Location: ./index.php");


?>