<?php 

$name = htmlspecialchars($_POST['name']);
$time = date('d-m-Y H:i:s');


if ($name) {
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "INSERT INTO category(name, created_at) VALUES ('$name', '$time')";
        $query = $pdo->prepare($sql);
        $query->execute();
        header("Location: ./index.php");
}else{
    header("Location: ./create.php");
}

?>