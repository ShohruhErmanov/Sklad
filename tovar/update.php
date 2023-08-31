<?php 

if (isset($_POST['submit'])) {
     
      $data = [
        'id' => $_GET['id'],
        'title' => htmlspecialchars($_POST['title']),
        'image' => htmlspecialchars($_FILES['image']['name']),
        'price' => htmlspecialchars($_POST['price']),
        'category' => htmlspecialchars($_POST['category']),
        'time' => date('d-m-Y H:i:s'),
    ];
	
       if(file_exists("../images/" . $_FILES['image']['name'])) {
        $messege = $_FILES['image']['name'];
       }else{
        $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
        $sql = "UPDATE tovar SET title=:title, image=:image, price=:price, category=:category, created_at=:time WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        $arreys = $query->fetchAll(PDO::FETCH_ASSOC);
        header("Location: ./index.php");

       };

	   if (isset($arreys)) {
          move_uploaded_file( $_FILES['image']['tmp_name'], "../images/" .  $_FILES['image']['name']);
	   }
}else{
   
};

?>
