<?php 

$tovar = $_POST['tovar'];
$time = date('d-m-Y H:i:s');

for ($i=0; $i < count($tovar); $i++) { 
    if ($tovar) {
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "INSERT INTO prixod(tovar, created_at) VALUES (:tovar, :time)";
        $query = $pdo->prepare($sql);
        $query->execute(array('tovar' => $tovar[$i], 'time' => $time));
        header("Location: ./index.php");
    } else {
        header("Location: ./create.php");
    }
}

?>



