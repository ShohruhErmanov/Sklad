<?php 

$data = [
    'id' => $_GET['id']
];


try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM sklad WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    $arrey = $query->fetch(PDO::FETCH_ASSOC); 
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
                    <form action="./update.php?id=<?= $arrey['id'] ?>" method="POST">
            
                      <div class="card-header">
                        <h4> Sklad edit</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="<?= $arrey['title'] ?>">
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