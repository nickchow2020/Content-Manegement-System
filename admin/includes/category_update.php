<?php 
  if(isset($_POST["update"])){
    $update_title = $_POST["update_cat_title"];

    $query = "UPDATE categories SET cat_title = '$update_title' WHERE cat_id = $cat_id";

    $result = mysqli_query($con,$query);

    if(!$result){
      die("Query Fail" . mysqli_error($result));
    }
  }

?>


<form action="" method="POST">
  <label for="categories" class="form-label">Update Category:</label>

  <?php  
  $query = "SELECT * FROM categories WHERE cat_id = $cat_id ;";

  $result = mysqli_query($con,$query);

  if(!$result){
    die("Query Fail" . " " . mysqli_error($con));
  };

  while($row = mysqli_fetch_assoc($result)){
    $cat_title = $row["cat_title"];
    ?>

    <input type="text" class="form-control" id="categories" name="update_cat_title" value = "<?php echo $cat_title?>" />
  <?php    
    }
  ?>
  <br>
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>