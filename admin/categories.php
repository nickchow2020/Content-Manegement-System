<?php include "includes/header.php"?>
    <div id="wrapper">

    <?php include "includes/navigation.php" ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">

                        <?php insert_category();?>

                          <form action="" method="POST">
                            <label for="categories" class="form-label">Add Categories:</label>
                            <input type="text" class="form-control" id="categories" name="cat_title">
                            <br>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                          </form>
                          <br>

                          <?php 
                            if(isset($_GET["edit"])){
                              $cat_id = $_GET["edit"];

                              include "includes/category_update.php";
                            }
                          
                          ?>

                        </div>
                        <div class="col-xs-6">
                          <table class="table">
                            <thead>
                              <tr>
                                <th >Id</th>
                                <th >Category_Title</th>
                              </tr>
                            </thead>
                            <tbody>

                            <?php display_category(); ?>
                            <?php delete_category(); ?>
                            </tbody>
                          </table>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include "includes/footer.php" ?>