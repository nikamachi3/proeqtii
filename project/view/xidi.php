<div class="body">
   <article>
   <img src="xidi.jpg" alt="" style="width:200px;height:200px;">
   <br>
         <?php
            $query = "SELECT * FROM ghirssh WHERE ID='2;'";
            $result = mysqli_query($connection, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
               while($row = mysqli_fetch_assoc($result)){
                  echo $row["Name"];
                  echo "<br>";
                  echo "<br>";
                  echo $row["Year"];
                  echo "<br>";
                  echo "<br>";
                  echo $row["History"];
                  echo "<br>";
                  echo "<br>";
                  echo $row["Description"];
                  echo "<br>";

               }
            }
            
         ?>
   </article>
</div>