<?php
include_once('connection.php');
include_once('usernav.php');
?>
<!-- <div class="container">
    <div class="mainimg" style="width: 100%; height: 500px;">
      <?php
        // $fetch = mysqli_query($con,"SELECT * from slider");
        // while($row = mysqli_fetch_array($fetch))
        // {
        //     echo "<img src='$row[2]' alt='$row[1]' width='100%' height='500'/>";
        // }
      ?>
    </div>
</div> -->

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        <?php
        $fetch = mysqli_query($con,"SELECT * from slider");
        while($row = mysqli_fetch_array($fetch))
        {
            echo "<img src='$row[2]' alt='$row[1]' width='100%' height='500'/>";
        }
        ?>
            <div class="carousel-caption d-none d-md-block">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>