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

?>

<?php require_once "../header.php" ?>
<?php require_once "../sidebar.php" ?>

    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="./post.php" method="POST">
            
                      <div class="card-header">
                        <h4> Prixod create</h4>
                      </div>
                      <div class="card-body">
                        
                        <div class="form-group">
                          <label>Tovarlar</label>
                          <select class="form-control selectric" name="tovar[]" multiple="">
                            <?php foreach ($arreys as $arrey): ?>
                            <option value="<?= $arrey['title']?>"><?= $arrey['title'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>

<?php require_once "../footer.php" ?>