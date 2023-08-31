<?php require_once "../header.php" ?>
<?php require_once "../sidebar.php" ?>

    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="./post.php" method="POST">
            
                      <div class="card-header">
                        <h4> Category create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name">
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