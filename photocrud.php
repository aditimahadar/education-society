<?php
require('top.inc.php');
?>
         <div class="content pb-0">
            <div class="gallery">
         <center>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                     
                     <div class="form-group">
                        <input type="file" name="image"  placeholder="image" required>
                     </div>
                     <button type="submit" name="upload" class="btn btn-success btn-flat m-b-30 m-t-30" style="margin-bottom:10px;">Upload</button>
				</form>
         </center>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Gallery updates</h4>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
		  </div>
<div class="container">
   <table class="table">
  <thead>
   <tr>
      <th scope="col">image</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include 'connect.php';
      $pic = mysqli_query($con,"SELECT * FROM `gallery` WHERE 1");
      while($row = mysqli_fetch_array($pic)){
         echo "
         <tr>
         <td><img src='$row[image]' width= '200px' height= '110px'></td>
         <td><a href='delete.php? id=$row[id]' class='btn btn-danger'>delete</a></td>
         <td><a href='update.php? id=$row[id]' class='btn btn-primary'>update</a></td>
         </tr>
         ";
      }

      ?>
  </tbody>
   </table>
</div>

<?php
require('footer.inc.php');
?>
         