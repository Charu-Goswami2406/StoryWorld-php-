<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story World</title>

    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php include './partials/connection.php'?>

    <div class="container-fluid slider">
        <?php include './partials/header.php'?>
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel" data-bs-interval ="3000">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img3.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img3.webp" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
          </div>
    </div>

    <!-- Cards -->
     <div class="container">
      <h1 class="text-center featureTitle mb-5">Featured Stories</h1>
      <div class="row">

      <?php
        $sql = "Select * from `topics`";
        $res = mysqli_query($con,$sql);
        if($res) {
          while($row=mysqli_fetch_assoc($res)){
            $id = $row['topic_id'];
            $topic_image = $row['topic_image'];
            $topic_name = $row['topic_name'];
            $topic_desc = $row['topic_desc'];

            echo ' <div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
          <img src='.$topic_image.' class="card-img-top" alt="Story">
          <div class="card-body">
            <h5 class="card-title">'.$topic_name.'</h5>
            <p class="card-text">'.substr($topic_desc,0,86).'...</p>
            <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
        </div>';


          }
        }
      ?>
        </div>
        </div>



      </div>
     </div>

    <?php include './partials/footer.php'?>
    <!-- Bootstrap JavaScript and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBycWT6fLKK5Aw1a1BI45hl3gUGY6E/IxsKtFvhFZBjXK2/j" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-YCNrw3tZsK7cojG2tPZT0p5VX/mibx5M2NkhW9OB+KduzvZD5fz6vB8z4Wak7X5E" crossorigin="anonymous"></script>

</body>
</html>