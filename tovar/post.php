<?php 

if (isset($_POST['submit'])) {
 
      $title = htmlspecialchars($_POST['title']);     
      $image = htmlspecialchars($_FILES['image']['name']);
      $price = htmlspecialchars($_POST['price']);
      $category = htmlspecialchars($_POST['category']);
      $time = date('d-m-Y H:i:s');
	
       if(file_exists("../images/" . $_FILES['image']['name'])) {
        $messege = $_FILES['image']['name'];
       }else{
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "INSERT INTO tovar(title, price, image, created_at, category) VALUES ('$title', '$price', '$image', '$time', '$category')";
        $query = $pdo->prepare($sql);
        $query->execute();
        $arreys = $query->fetch(PDO::FETCH_ASSOC);
       echo "<pre>"; print_r($arreys);echo "</pre>";


       header("Location: ./index.php");
       };

	   if (isset($arreys)) {
          move_uploaded_file( $_FILES['image']['tmp_name'], "../images/" .  $_FILES['image']['name']);
	   }
}else{
   
};

?>
