<?php 

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars(hash('md2', $_POST['password']));
$time = date('d-m-Y H:i:s');


if ($name && $email && $password) {
        $pdo2 = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql2 = "INSERT INTO users(name, email, password, created_at) VALUES ('$name', '$email', '$password', '$time')";
        $query2 = $pdo2->prepare($sql2);
        $query2->execute();
        $arreys2 = $query2->fetchALL(PDO::FETCH_ASSOC);  
        header("Location: ./dashboard.php");
}else{
    header("Location: ./register.php");
}

?>
