
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM tovar";
    $query = $pdo->prepare($sql);
    $query->execute();
    $arreys = $query->fetchAll(PDO::FETCH_ASSOC);
    arsort( $arreys);

   } catch (PDOExeption $th) {
      print "Error" . $th->getMessage();
   }

   
   if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $category = $_POST['category'];

    $count = 0;

    
    for ($i=0; $i < count($arreys); $i++) { 
        $dateTime = DateTime::createFromFormat('d-m-Y H:i:s', $arreys[$i]['created_at']);
        $formattedDate = date_format($dateTime, 'Y-m-d');
        $count++;
    }

    if ($date == $formattedDate) {
         $count;
    }else{
        $count;
    }
    
  

}

?>

<?php require_once "../header.php" ?>
<?php 
      
      require_once "../sidebar.php";
      
      ?>

    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Category Table</h4>
                        <div class="card-header-form">
                            <a href="./create.php" class="btn btn-primary">Tanlash</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tovar nomi</th>
                                        <th>Tovar Ostatka</th>
                                        <th>Tovar narxi</th>
                                        <th>Tovar Sanasi</th>
                                    </tr>
                                   <?php foreach ($arreys as $arrey): ?>
                                        <tr>
                                            <td><?= $arrey['id'] ?></td>
                                            <td><?= $arrey['title'] ?></td>
                                             <?php if ($count): ?>
                                             <td><?= $count ?></td>
                                             <?php else: ?>
                                             <td>Sana va Kategoriya tanlanmagan</td>
                                            <?php endif; ?>
                                            <td><?= $arrey['price'] ?></td>
                                            <td><?= $arrey['created_at'] ?></td>
                        
                                        </tr>

                                  <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <?php require_once "../footer.php" ?>

