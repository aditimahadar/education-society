
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php
        include 'connect.php';
        $id = $_GET['id'];
        $Record = mysqli_query($con,"SELECT * FROM `gallery` WHERE id = $id");
        $data = mysqli_fetch_array($Record);
    ?>
        <center>
            <form action="update1.php" method="post" enctype="multipart/form-data">
                <div style="background:#f1f2f7; margin-top:30px;">
                     <div class="form-group">
                        <div style="padding-top:20px;">
                            <label>Image:</label>
                            <td ><input type="file" value="<?php echo $data['image'] ?>"  name="image"  placeholder="image" required><br>
                            <div style=" margin-top:30px;">
                                <img src="<?php echo $data['image'] ?>" width= '200px' height= '110px'></td>
                            </div>
                        </div>
                    </div>  
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                     <button type="submit" name="upload" class="btn btn-success btn-flat m-b-30 m-t-30" style="margin-bottom:10px;">Update</button>
                </div>
			</form>
        </center>

        <!--update code--->


</body>
</html>
