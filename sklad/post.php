<?php 

$title = $_POST['title'];
$tovar = $_POST['tovar'];
$time = date('d-m-Y H:i:s');

for ($i=0; $i < count($tovar); $i++) { 
    if ($tovar && $title) {
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "INSERT INTO sklad(title, tovar, created_at) VALUES (:title, :tovar, :time)";
        $query = $pdo->prepare($sql);
        $query->execute(array('title' => $title, 'tovar' => $tovar[$i], 'time' => $time));
        header("Location: ./index.php");
    } else {
        header("Location: ./create.php");
    }
}





?>