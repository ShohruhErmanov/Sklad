<?php 

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars(hash('md2', $_POST['password']));
$time = date('d-m-Y H:i:s');


if ($name) {
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "INSERT INTO users(name, email, password, created_at) VALUES ('$name', '$email', '$password', '$time')";
        $query = $pdo->prepare($sql);
        $query->execute();
        header("Location: ./index.php");
}else{
    header("Location: ./create.php");
}

?>