<?php 

// if ($_SERVER['REQUEST_URI'] == '/users/index.php') {
//     header("Location: ../login.php");
// }

try {
    $pdo = new PDO('mysql:host=localhost;dbname=sklad', 'root', '');
    $sql = "SELECT * FROM users";
    $query = $pdo->prepare($sql);
    $query->execute();
    $arreys = $query->fetchAll(PDO::FETCH_ASSOC);
    arsort( $arreys); 

   } catch (PDOExeption $th) {
      print "Error" . $th->getMessage();
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
                            <a href="./create.php" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                   <?php foreach ($arreys as $arrey): ?>
                                        <tr>
                                            <td><?= $arrey['id'] ?></td>
                                            <td><?= $arrey['name'] ?></td>
                                            <td><?= $arrey['email'] ?></td>
                                           
                                            <td class="d-flex" style="column-gap: 10px;">
                                                <a href="./edit.php?id=<?= $arrey['id'] ?>" class="btn btn-info"><i class="fas fa-edit" style="color: white;"></i></a>
                                    
                                                <a href="./delete.php?id=<?= $arrey['id']?>" class="btn btn-danger" onclick="return confirm('o\'chirishni hohlaysizmi?')"><i class="fas fa-trash" style="color: white;"></i></a>
                                                
                                            </td>
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

