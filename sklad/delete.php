<?php 

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
      $sql = "DELETE FROM sklad WHERE id=:id";
      $query = $pdo->prepare($sql);
      $query->bindParam(':id', $_GET['id']);
      $query->execute();
      header("Location: ./index.php");

   } catch (PDOExeption $th) {
      print "Error" . $th->getMessage();
   }

?>