<?php 

try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM category";
    $query = $pdo->prepare($sql);
    $query->execute();
    $arreys = $query->fetchAll(PDO::FETCH_ASSOC);
    arsort( $arreys); 
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
                    <form action="./post.php" method="POST" enctype="multipart/form-data">
            
                      <div class="card-header">
                        <h4> Tovar create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="form-group">
                          <label>Price</label>
                          <input type="text" class="form-control" name="price" required>
                        </div>

                        <div class="form-group">
                                <label> Category Selected</label>
                                <select id="" name="category" class="form-control">
                                  <?php foreach ($arreys as $arrey): ?>
                                        <option value="<?= $arrey['name'] ?>"><?= $arrey['name'] ?></option>
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