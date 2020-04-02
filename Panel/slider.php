<?php
include_once('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <div class="container">
        <h1 class="mt-5" style="text-align: center;">Insert Slider</h1>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 mt-3"  >
                <form action="" method="post" enctype="multipart/form-data">
                    
                  <!-- image title field -->
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="altname" class="form-control">
                    </div>

                  <!-- image address field -->
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="img"/>
                    </div>

                    <input type="submit" name="ins" class="btn btn-primary" value="Insert"/>

                </form>

                <?php
                if(isset($_POST['ins']))
                {
                    $g_name = $_POST['altname'];

                    $g_img = $_FILES['img']['name'];
                    $g_tmp = $_FILES['img']['tmp_name'];
                    $target = 'images/'.$g_img;
                    move_uploaded_file($g_tmp,$target);

                    $insq = mysqli_query($con,"INSERT into slider(name,image) values('$g_name','$target')");
                    if($insq)
                    {
                        echo "inserted";
                    }else
                    {
                        echo "try again";
                    }
                }
                ?>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    <br>
<br>
<table border="1" style="width: 600px; height: 150px; text-align: center; margin-left: 20%;">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Image</th>
    </tr>
  </thead>
  <?php
$que = mysqli_query($con,"SELECT * from slider");
while($show = mysqli_fetch_array($que))
{
  echo "<tr>
  <td>$show[0]</td>
  <td>$show[1]</td>
  <td><img src='$show[2]' width='50' height='50'></td>
  </tr>";
}
?>

</table>

 </body>
</html>