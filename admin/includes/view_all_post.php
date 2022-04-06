<table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Tag</th>
                            <th>Comments</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $query = "SELECT * FROM posts";

                              $result = mysqli_query($con,$query);

                              if(!$result){
                                die("Query Fail" . " " . mysqli_error($con));
                              }

                              while($row = mysqli_fetch_assoc($result)){
                                $id = $row["post_id"];
                                $p_ca_id = $row["post_category_id"];
                                $p_title = $row["post_title"];
                                $p_author = $row["post_author"];
                                $p_date = $row["post_date"];
                                $p_image = $row["post_image"];
                                $p_content = $row["post_content"];
                                $p_tag = $row["post_tag"];
                                $p_status = $row["post_status"];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$p_author</td>";
                                echo "<td>$p_ca_id</td>";
                                echo "<td>$p_status</td>";
                                echo "<td>$p_author</td>";
                                echo "<td>$p_image</td>";
                                echo "<td>$p_tag</td>";
                                echo "<td>$p_content</td>";
                                echo "<td>$p_date</td>";
                                echo "</tr>";
                              }
                            ?>
                        </tbody>
</table>