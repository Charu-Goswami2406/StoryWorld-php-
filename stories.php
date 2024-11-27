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
<?php include './partials/connection.php';?>
<?php include './partials/header.php';?>

<?php
    $id = $_GET['story_id'];
    $sql = "Select * from `topics` where topic_id = $id";
    $result = mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
    }
?>

<!-- jumbotron -->
 <div class="container-fluid mb-4">
    <div class="jumbotron bg-warning rounded">
        <div class="container">
            <h1 class="display-4"><?php echo $topic_name;?></h1>
            <p class="lead"><?php echo $topic_desc;?></p>
            <button class="btn btn-dark mb-5">
                <a class="text-light" href="#reading" role="button"> Continue Reading</a>
            </button>
        </div>
    </div>
 </div>

<div class="container-fluid slider">
        <div id="carouselExampleIndicators" class="carousel slide">
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
          </div>
    </div>

    <!-- Reading content -->
     <div class="container" id="reading">
        <div class="container-fluid mb-4 ">
            <div class="jumbotron jumbotron-fluid bg-warning rounded p-0 ">
                <div class="container">
                    <h1 class="display-4 text-center">Enjoy Reading!</h1>
                    <img src= <?php echo $topic_image?> class="img-fluid" alt="">
                    <p class="lead pb-5">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ducimus laudantium ipsa. Est id dolores ex distinctio ab modi provident omnis commodi consequuntur qui in, maxime suscipit! Reiciendis quisquam repellendus odio, rem ipsum sapiente ipsam soluta quo corrupti consequatur cupiditate molestias harum quis, nesciunt voluptates est magnam saepe, suscipit aliquam quae aliquid! Est necessitatibus maxime sed, molestias voluptates ratione, saepe similique fugiat vero eius beatae consequuntur exercitationem. Repellendus provident aliquid repellat, minus voluptates sed obcaecati sunt, saepe unde laborum eaque quisquam inventore praesentium vero consequatur animi exercitationem dicta? Voluptatum magnam pariatur molestias dicta tempore exercitationem cum explicabo cupiditate illo sunt reprehenderit similique tenetur ullam fugit voluptatem blanditiis a natus, laboriosam incidunt praesentium. Cumque vitae ratione fuga fugiat nihil suscipit saepe excepturi. Adipisci at odit vitae quidem odio! Quam exercitationem neque id assumenda voluptatum itaque dolores quas consectetur eum, adipisci est repellendus quae iusto et commodi vitae odit delectus! Veritatis similique, facilis ut neque pariatur illum qui voluptates quasi praesentium est. Sit iusto odit, voluptate sed, quisquam laboriosam amet eaque numquam velit totam voluptatem sint labore harum veniam? Animi iste quam quis provident eos nesciunt deserunt perferendis possimus, quibusdam iure magni, non voluptatum id distinctio. Atque facere tempore eaque ratione suscipit.
                    </p>
                </div>
            </div>
        </div>
     </div>

     <div class="container-fluid mb-4">
        <h2 class="text-center display-4">Thank You for your time 😀</h2>
     </div>

<?php include './partials/footer.php';?>
</body>
</html>