<?php  
  function insert_category(){
    global $con;

    if(isset($_POST["submit"])){
      $category = $_POST["cat_title"];

      if($category == "" || empty($category)){
        echo "Category input should not be empty";
      }else{

        $query = "INSERT INTO categories (cat_title) VALUES ('$category');";

        $result = mysqli_query($con,$query);

        if(!$result){
          die("Query Fail" . " " . mysqli_error($con));
        }
      }
    }
  }


  function display_category(){
    global $con;
    $query = "SELECT * FROM categories";

    $result = mysqli_query($con,$query);

    if(!$query){
      die("Query Fail" . mysqli_error($con));
    }
      
    

    while($row = mysqli_fetch_assoc($result)){
      $id = $row["cat_id"];
      $title = $row["cat_title"];

      echo "<tr>";
      echo "<td>$id</td>";
      echo "<td>$title</td>";
      echo "<td><a href ='categories.php?delete=$id' >Delete</a></td>";
      echo "<td><a href ='categories.php?edit=$id' >Edit</a></td>";
      echo "</tr>";
    }
  }

  function delete_category(){
    global $con;
    if(isset($_GET["delete"])){
      $id = $_GET["delete"];
  
      $query = "DELETE FROM categories WHERE cat_id = $id";
  
      $result = mysqli_query($con,$query);
  
      if(!$result){
        die("Query Error" . " " . mysqli_error($con));
      }
      
      header("Location: categories.php");
    }
  }
?>