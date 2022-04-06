<div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="POST">
                      <div class="input-group">
                          <input type="text" class="form-control" name="search">
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="submit" name="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                              </button>
                          </span>
                      </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                              <?php 
                                $query = "SELECT * FROM categories";

                                $result = mysqli_query($con,$query);

                                if(!$result){
                                  die("Query Fail" . mysqli_error($con));
                                }

                                while($row = mysqli_fetch_assoc($result)){
                                  $cate = $row["cat_title"]
                                  ?>

                                  <li><a href="#"><?php echo $cate ?></a></li>
                              <?php
                                }
                              ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Side Widget Well -->
                <?php include "widget.php"?>

</div>