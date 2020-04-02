<?php
include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
    
<!-- nav insertion form -->
<div class="container">
 <h1 style="text-align: center;" class="mt-5"> Navbar Insertion Section</h1>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 mt-5" >
        <form action="" method="post">

          <!-- title field -->
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" maxlength="20" name="title" class="form-control" placeholder="Enter Page title" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Should not be more than 20 characters</small>
            </div>

          <!-- page url field -->
            <div class="form-group">
                <label for="name">Link</label>
                <input type="text" name="link" class="form-control" placeholder="Enter Page URL" aria-describedby="helpId">
            </div>

           <input type="submit" name="add" class="btn btn-primary" value="Add">
        </form>
    <?php
    if(isset($_POST['add']))
    {
        $g_title = $_POST['title'];
        $g_link = $_POST['link'];

        $insq = mysqli_query($con,"INSERT into navbar(name,link) values('$g_title','$g_link')");
        if($insq)
        {
        echo "inerted";
        }else
        {
        echo "failed";
        }
    }
    ?>
    </div>
    <div class="col-lg-4"></div>
  </div>
</div>


</body>
</html>

