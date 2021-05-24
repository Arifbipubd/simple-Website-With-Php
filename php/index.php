<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  

</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bipu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>    
<!-- navbar end -->
<!-- carousel start -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/01.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/one.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<!-- carousel end -->
<!-- About Section Start -->
<section class ="my-5" >
<div class ="py-5" >
 <h2 class =" text-center" >About Us</h2> 
</div>

<div class="container-fluid">
            <div class="row"> 
             <div class="col-lg-6 col-md-6 col-12">
                   <img src="../img/05.jpg"  class = "img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                   <h2 class="display-4 text-center mt-3">I Am Bipu</h2>
                   <p class="py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quis dolor nisi praesentium similique. Quae, vel nobis veniam magnam earum tempore et ducimus ipsum neque voluptatum, aut sequi eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quis dolor nisi praesentium similique. Quae, vel nobis veniam magnam earum tempore et ducimus ipsum neque voluptatum, aut sequi eius.</p>
                  <a href="about.php" class="btn btn-success ">More About Me</a>
            </div>
        </div>
</div>
</section>

<!-- About Section End -->
<!-- Services End -->
<section class ="my-5" >
<div class ="py-5" >
 <h2 class =" text-center" >Services</h2> 
</div>
 <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">

          <div class="card">
  <img src="../img/06.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

          
          </div>
          <div class="col-lg-4 col-md-4 col-12">

<div class="card">
<img src="../img/06.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>


</div>
<div class="col-lg-4 col-md-4 col-12">

<div class="card">
<img src="../img/06.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>


</div>
      
      </div>
 </div>

<!-- Services End -->
<!-- Galary Start -->

<section class ="my-5" >
<div class ="py-5" >
 <h2 class =" text-center text-success text-weight-bolder" >Galary</h2> 
</div>

<div class="container-fluid">
            <div class="row"> 
             <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                   <img src="../img/07.jfif"  class = "img-fluid pb-4">
            </div>
             
        </div>
</div>
</section>


<!-- Galary End -->
<!-- Form Start -->
<section class ="my-5" >
<div class ="py-5" >
 <h2 class =" text-center text-success text-weight-bolder" >Contact Us</h2> 
</div >
<div class="bg-primary text-white p-3 m-auto w-75">
<form action="info.php" method="POST">
<div class="form-group">
<label >Username</label>
<input type="text" name ="user" class="form-control" placeholder="Put a usename" >
</div>
<div class="form-group">
<label >Email</label>
<input type="Email" name ="email" class="form-control pb-3" placeholder="Put a Email" >
</div>
<div class="form-group">
<label >Mobile</label>
<input type="text" name ="mobile" class="form-control pb-3" placeholder="Put a Mobile Number" >
</div>
<div class="form-group">
<label>Message</label>
<textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
</div>
<button type="submit " class="btn btn-success">Submit</button>
</form>
</div>


</section>

<!-- Form End -->
<footer >
<p class="p-3 bg-dark text-white text-center">@ArifBipu</p>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
