
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
        <form action="./index.php" method="POST">

          <div class="card-header">
            <h4> Hisobot create</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Sana</label>
              <input class="form-control" type="date" name="date" id="date" required>
            </div>

            <label for="category">Kategoriya:</label>
            <select class="form-control" name="category" id="category" required>
              <?php foreach ($arreys as $arrey): ?>
              <option value="<?= $arrey['name'] ?>"><?= $arrey['name'] ?></option>
              <?php endforeach; ?>
            </select>

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