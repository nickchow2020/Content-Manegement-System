
<?php include "includes/header.php"?>
<?php include "includes/db.php"?>
<!-- header above -->
<!-- Navigation -->
<?php include "includes/navigation.php" ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

            <!-- Blog Entries Column -->
        <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <?php 
                    if(isset($_POST["submit"])){
                      $search = $_POST["search"];

                      $query = "SELECT * FROM posts WHERE post_tag LIKE '%$search%'";

                      $result = mysqli_query($con,$query);

                      if(!$result){
                        die("Query Fail" . "" . mysqli_error($con));
                      }

                      if(mysqli_num_rows($result) == 0){
                        echo "No Result!";
                      }
                    
                      while($posts = mysqli_fetch_assoc($result)){
                          $post_title = $posts["post_title"];
                          $post_author = $posts["post_author"];
                          $post_date = $posts["post_date"];
                          $post_content = $posts["post_content"];
                          $post_image = $posts["post_image"];
                      
                    ?>

                                        <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                    <hr>

                    <img class="img-responsive" src="/cms/images/<?php echo $post_image ?>" alt="ss">
                    <hr>

                    <p><?php echo $post_content ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>

                    <?php
                    };
                    };
                    ?>



                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"?>
    </div>
        <!-- /.row -->
<?php include "includes/footer.php"?>
