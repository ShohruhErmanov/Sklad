<?php 

if (isset($_POST['submit'])) {
     
    $data = [
      'id' => $_GET['id'],
      'tovar' => $_POST['tovar'],
      'time' => date('d-m-Y H:i:s'),
  ]; 

//   echo "<pre>"; print_r($data['tovar']);echo "</pre>";


for ($i=0; $i < count($data['tovar']); $i++) { 

    if ($data['tovar']) {
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "UPDATE prixod SET tovar=:tovar, created_at=:time WHERE id=:id";
        $query = $pdo->prepare($sql);   
        $query->execute(array('tovar' => $data['tovar'][$i], 'time' => $data['time'], 'id' => $data['id']));
        header("Location: ./index.php");
    } else {
        header("Location: ./edit.php");
    }
}
}

?>

