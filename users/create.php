<?php require_once "../header.php" ?>
<?php require_once "../sidebar.php" ?>

    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="./post.php" method="POST">
            
                      <div class="card-header">
                        <h4> User create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password">
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