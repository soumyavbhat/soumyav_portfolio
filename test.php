
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Merriweather+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/logo.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="128x128" />
    <title>Soumya Work</title>
</head>

<body class="workpage">
  <?php

  $user = "root";
  $pass = "";
  $host = "localhost";
  $db = "db_portfolio";

  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset($conn, 'utf8');
  if(!$conn){
  // echo "error";
  }
  else{
  // echo "connected";
  //   $myQuery = "SELECT about_desc FROM tbl_about";
  // $result = mysqli_query($conn, $myQuery);
}
  ?>

<h2 class="hidden">Work</h2>


<!-- Lightbox -->
<div class="lightbox" style="background-color:black">

    <img  class="close" src="images/close.png" alt="">

<div class="p-low">

  <h1 class="clearfix light-header">test</h1>
  <video class="light-img" autoplay>  </video>


    <p class="clearfix light-desc"></p>

  <img class="light-thumb" src="" alt="">

</div>
</div>
<!-- End -->


                    <div class="row imgs ">
                        <div class="galleryImage col-md-8 col-lg-8 col-xl-8 col-md-offset-3 col-lg-offset-2 col-xl-offset-2 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">

                          <img style="width:100%" id="1" class="hover-shadow gallery port-img content" src="images/gallery/thumbnails/concept.jpg" style="width:100%">
                          <img style="width:100%" id="2" class="hover-shadow gallery port-img content" src="images/gallery/thumbnails/concept.jpg" style="width:100%">
                          <!-- <img style="width:100%" onclick="currentSlide(3)" class="hover-shadow gallery" src="images/gallery/thumbnails/ballerina.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(4)" class="hover-shadow gallery" src="images/gallery/thumbnails/bulb.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(11)" class="hover-shadow gallery" src="images/gallery/thumbnails/chair.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(17)" class="hover-shadow gallery" src="images/gallery/thumbnails/type.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(25)" class="hover-shadow gallery" src="images/gallery/thumbnails/vidwalk.jpg" style="width:100%">

                        </div>
                       <div class="galleryImage col-md-8 col-lg-8 col-xl-8 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">
                         <img style="width:100%" onclick="currentSlide(5)" class="hover-shadow gallery" src="images/gallery/thumbnails/panda.jpg" style="width:100%">
                         <img style="width:100%" onclick="currentSlide(6)" class="hover-shadow gallery" src="images/gallery/thumbnails/batman.jpg" style="width:100%">
                         <img style="width:100%" onclick="currentSlide(8)" class="hover-shadow gallery" src="images/gallery/thumbnails/egg.jpg" style="width:100%">
                         <img style="width:100%" onclick="currentSlide(7)" class="hover-shadow gallery" src="images/gallery/thumbnails/girl.jpg" style="width:100%">
                         <img style="width:100%" onclick="currentSlide(24)" class="hover-shadow gallery" src="images/gallery/thumbnails/vidprison.jpg" style="width:100%">
                         <img style="width:100%" onclick="currentSlide(26)" class="hover-shadow gallery" src="images/gallery/thumbnails/vidwine.jpg" style="width:100%">
                         <img style="width:100%" onclick="currentSlide(21)" class="hover-shadow gallery" src="images/gallery/thumbnails/vidfall.jpg" style="width:100%">

                        </div>
                        <div class="galleryImage col-md-8 col-lg-8 col-xl-8 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">
                          <img style="width:100%" onclick="currentSlide(12)" class="hover-shadow gallery" src="images/gallery/thumbnails/eleven.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(16)" class="hover-shadow gallery" src="images/gallery/thumbnails/stweb.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(18)" class="hover-shadow gallery" src="images/gallery/thumbnails/violin.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(15)" class="hover-shadow gallery" src="images/gallery/thumbnails/st.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(19)" class="hover-shadow gallery" src="images/gallery/thumbnails/winelogo.jpg" style="width:100%">
                         </div>
                        <div class="galleryImage col-md-8 col-lg-8 col-xl-8 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">
                          <img style="width:100%" onclick="currentSlide(9)" class="hover-shadow gallery" src="images/gallery/thumbnails/chess.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(10)" class="hover-shadow gallery" src="images/gallery/thumbnails/manga.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(13)" class="hover-shadow gallery" src="images/gallery/thumbnails/hamiltonhawk.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(14)" class="hover-shadow gallery" src="images/gallery/thumbnails/room.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(22)" class="hover-shadow gallery" src="images/gallery/thumbnails/vidhealth.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(23)" class="hover-shadow gallery" src="images/gallery/thumbnails/vidlift.jpg" style="width:100%">
                          <img style="width:100%" onclick="currentSlide(20)" class="hover-shadow gallery" src="images/gallery/thumbnails/viddobby.jpg" style="width:100%"> -->


                        </div>
<!-- 20 -->
                      </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div> -->

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script>
-->
<!-- <script src="js/gallery.js" type="text/javascript"></script> -->
<!-- <script src="js/video.js" type="text/javascript"></script> -->
<script src="js/ajax.js" type="text/javascript">

</script>

</body>

</html>
