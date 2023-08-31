<?php 

   try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM users";
    $query = $pdo->prepare($sql);
    $query->execute();
    $arreys = $query->fetchAll(PDO::FETCH_ASSOC);
    
   } catch (PDOExeption $th) {
      print "Error" . $th->getMessage();
   }



   if (isset($_POST['email']) && isset($_POST['password'])) {
       $email = htmlspecialchars($_POST['email']);
       $password = htmlspecialchars(hash('md2', $_POST['password']));


    for ($i=0; $i < count($arreys); $i++) { 
       
            if ($arreys[0]['email'] == $email && $arreys[0]['password'] == $password) {
                header("Location: ./dashboard.php");
            }else{
                header("Location: ./login.php");
            }
     
    }


       
   } else {
       echo 'Foydalanuvchi nomi va parol kiritilmadi.';
    
   }
   

?>





