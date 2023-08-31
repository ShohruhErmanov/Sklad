<?php 

$data = [
    'id' => $_GET['id']
];


try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM users WHERE id=:id";
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
                        <h4> Category edit</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Name </label>
                          <input type="text" class="form-control" name="name" value="<?= $arrey['name'] ?>">
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" value="<?= $arrey['email'] ?>">
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password" value="<?= $arrey['password'] ?>">
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