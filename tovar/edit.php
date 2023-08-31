<?php 

$data = [
    'id' => $_GET['id']
];


try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM tovar WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    $arrey = $query->fetch(PDO::FETCH_ASSOC); 

    $sql2 = "SELECT * FROM category";
    $query2 = $pdo->prepare($sql2);
    $query2->execute();
    $arreys2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    arsort( $arreys2); 

   } catch (PDOExeption $th) {
      print "Error" . $th->getMessage();
   }

?>


<?php require_once "../header.php" ?>
<?php require_once "../sidebar.php" ?>

    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="./update.php?id=<?= $arrey['id'] ?>" method="POST" enctype="multipart/form-data">
            
                      <div class="card-header">
                        <h4> Tovar edit</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="<?= $arrey['title'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="form-group">
                          <label>Price</label>
                          <input type="text" class="form-control" name="price" value="<?= $arrey['price'] ?>" required>
                        </div>

                        <div class="form-group">
                                <label> Category Selected</label>
                                <select id="" name="category" class="form-control">
                                    <?php foreach ($arreys2 as $arrey1): ?>
                                        <option <?php echo $arrey['category'] ==  $arrey1['name'] ?  'selected'  : '' ?>    value="<?=  $arrey1['name']  ?>"><?= $arrey1['name'] ?></option>
                                     <?php endforeach; ?>
                                </select>
                            </div>
                
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>

<?php require_once "../footer.php" ?>