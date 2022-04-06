<?php 
  if(isset($_POST["create_post"])){
    $p_title = $_POST["title"];
    $p_category_id = $_POST["post_category_id"];
    $p_author = $_POST["author"];
    $p_status = $_POST["post_status"];
    $p_tag = $_POST["post_tags"];
    $p_content = $_POST["post_content"];
    $p_date = date('d-m-y');
    $p_comment_count = 4;

    $p_image = $_FILES["image"]["name"];
    $p_image_temp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($p_image_temp, "../images/$p_image");

    $query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_comment,post_tag,post_status,post_comment_count) ";

    $query .= "VALUES ($p_category_id,$p_title,$p_author,$p_date,$p_image,$p_content,$p_tag,$p_status,$p_comment_count)";
  }


?>


<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group">
    <label for="post_category">Post Category Id</label>
    <input type="text" class="form-control" name="post_category_id">
  </div>

  <div class="form-group">
    <label for="title">Post Author</label>
    <input type="text" class="form-control" name="author">
  </div>

  <div class="form-group">
    <label for="post_category">Post Status</label>
    <input type="text" class="form-control" name="post_status">
  </div>

  <div class="form-group">
    <label for="post_category">Post Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="form-group">
    <label for="post_category">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div>

  <div class="form-group">
    <label for="post_category">Post Content</label>
    <textarea class="form-control" name="post_content" id="" cols="30" rows="10">

    </textarea>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
  </div>

</form>