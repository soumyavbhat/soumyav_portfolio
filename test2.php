
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

    <div class="small visible-sm visible-md visible-xs">

        <div class="container">

          <nav class="navbar navbar-light row" style="background-color: #001a1f;">
              <img class="img-fluid col-xs-3 col-sm-2 col-md-2" src="images/desktop/logo.png" alt="Logo">
              <!-- <div type="button" class="col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8 hamButton"> -->

                <div type="button" data-dismiss="modal" class=" col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8" data-toggle="modal" data-target="#overlay"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>

                <!-- Modal -->
                <div id="overlay" class="modal fade"  >
                  <div class="modal-dialog"  >

                    <!-- Modal content-->
                      <ul class="row">
                          <li><a href="index.php"><h3>HOME</h3></a></li>
                          <li><a href="about.php"><h3>ABOUT</h3></a></li>
                          <li><a href="work.php"><h3>WORK</h3></a></li>
                          <li><a href="contact.php"><h3>CONTACT</h3></a></li>
                          <li data-dismiss="modal" ><span class="glyphicon glyphicon-chevron-up" aria-hidden="true" data-dismiss="modal"></span></li>
                      </ul>
                  </div>
                </div>
          </nav>
        </div>
    </div>

    <!-- <div class="visible-lg visible-xl"> -->

    <!-- Side Wrapper -->
    <!-- <div id="wrapper"> -->
        <div id="sidebar-wrapper" class="visible-lg visible-xl hide-sm hide-md hide-xs">
            <ul class="sidebar-nav visible-lg visible-xl">
                <li><img src="images/desktop/logo.png" alt="Logo"></li>
                <div class="navigation">
                    <a href="index.php">HOME</a>
                    <a href="about.php">ABOUT</a>
                    <a href="work.php">WORK</a>
                    <a href="contact.php">CONTACT</a>
                </div>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container ">
                    <div class="row contact visible-lg visible-xl gallery novid">
                        <h1 class=" col-lg-6 col-xl-6 col-md-10 col-sm-10 col-xs-10 col-lg-offset-3 col-xl-offset-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 ">My Portfolio <span>Gallery</span></h1>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-xl-8 col-lg-offset-2 col-xl-offset-2 hide-xs hide-sm hide-md visible-xl visible-lg galleryButton centered">
                        <h3 type="button" name="button">All</h3>
                        <h3 type="button" name="button">Design</h3>
                        <h3 type="button" name="button">3-Dimensional</h3>
                        <h3 type="button" name="button">Web Development</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="visible-xs visible-sm visible-md galleryButtonS">
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered" type="button" name="button">All</h3>
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered" type="button" name="button">Design</h3>
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered" type="button" name="button">3-Dimensional</h3>
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered" type="button" name="button">Web Development</h3>
                      </div>
                    </div>

<!-- Lightbox -->
<div id="lightbox" class=" modal light fade"  >
<div class="row">
<div class="col-lg-2 col-xl-2 col-lg-offset-10 col-xl-offset-10  col-xs-2 col-sm-1 col-md-1 col-xs-offset-10 col-sm-offset-11 col-md-offset-11"><i class="fa fa-times" data-dismiss="modal" aria-hidden="true"></i>
</div>
</div>
<div class="row">
    <div class="modal-content">
      <div class="col-lg-10 col-xl-10 col-md-10 col-xs-10 col-sm-10 col-lg-offset-2 col-xl-offset-2 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">
        <!-- <div class="lightbox" > -->

            <!-- <img  class="close" src="images/close.png" alt=""> -->

        <div class="p-low">
<div class="row placeholder">
  <img src="" class="video responsive light-header " alt="">

  </video>
</div>
          <!-- <img class=" col-lg-6 col-xl-6 col-md-10 col-xs-10 col-sm-10 light-header "></img>
          <video class="video responsive light-img" autoplay muted controls>  </video>
            <p style="color: blue"class="clearfix light-desc"></p> -->

          <!-- <img class="light-thumb" src="" alt=""> -->

        <!-- </div> -->
        </div>
      </div>
    </div>


</div>
  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>



<div id="lightbox2" class=" modal light fade"  >
<div class="row">
<div class="col-lg-2 col-xl-2 col-lg-offset-10 col-xl-offset-10  col-xs-2 col-sm-1 col-md-1 col-xs-offset-10 col-sm-offset-11 col-md-offset-11"><i class="fa fa-times" data-dismiss="modal" aria-hidden="true"></i>
</div>
</div>
<div class="row">
    <div class="modal-content">
      <div class="col-lg-10 col-xl-10 col-md-10 col-xs-10 col-sm-10 col-lg-offset-2 col-xl-offset-2 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">
        <!-- <div class="lightbox" > -->

            <!-- <img  class="close" src="images/close.png" alt=""> -->

        <div class="p-low">
<div class="row placeholder">
  <video class="light-img" autoplay muted controls>

  </video>
</div>
          <!-- <img class=" col-lg-6 col-xl-6 col-md-10 col-xs-10 col-sm-10 light-header "></img>
          <video class="video responsive light-img" autoplay muted controls>  </video>
            <p style="color: blue"class="clearfix light-desc"></p> -->

          <!-- <img class="light-thumb" src="" alt=""> -->

        <!-- </div> -->
        </div>
      </div>
    </div>


</div>
  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
</div>
<!-- End -->


                    <div class="row imgs">
                        <div class="galleryImage col-md-8 col-lg-8 col-xl-8 col-md-offset-3 col-lg-offset-2 col-xl-offset-2 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">
                          <img style="width:100%" id="1" class="hover-shadow gallery novid" src="images/gallery/thumbnails/cat.jpg" style="width:100%">
                          <img style="width:100%" id="2" class="hover-shadow gallery novid" src="images/gallery/thumbnails/concept.jpg" style="width:100%">
                          <img style="width:100%" id="3" class="hover-shadow gallery novid" src="images/gallery/thumbnails/ballerina.jpg" style="width:100%">
                          <img style="width:100%" id="4" class="hover-shadow gallery novid" src="images/gallery/thumbnails/bulb.jpg" style="width:100%">
                          <img style="width:100%" id="11" class="hover-shadow gallery novid" src="images/gallery/thumbnails/chair.jpg" style="width:100%">
                          <img style="width:100%" id="17" class="hover-shadow gallery novid" src="images/gallery/thumbnails/type.jpg" style="width:100%">
                          <img style="width:100%" id="25" class="hover-shadow gallery videos  " src="images/gallery/thumbnails/vidwalk.jpg" style="width:100%">

                        </div>
                       <div class="galleryImage col-md-8 col-lg-8 col-xl-8 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">
                         <img style="width:100%" id="5" class="hover-shadow gallery novid" src="images/gallery/thumbnails/panda.jpg" style="width:100%">
                         <img style="width:100%" id="6" class="hover-shadow gallery novid" src="images/gallery/thumbnails/batman.jpg" style="width:100%">
                         <img style="width:100%" id="8" class="hover-shadow gallery novid" src="images/gallery/thumbnails/egg.jpg" style="width:100%">
                         <img style="width:100%" id="7" class="hover-shadow gallery novid" src="images/gallery/thumbnails/girl.jpg" style="width:100%">
                         <img style="width:100%" id="24" class="hover-shadow gallery videos"  src="images/gallery/thumbnails/vidprison.jpg" style="width:100%">
                         <img style="width:100%" id="26" class="hover-shadow gallery videos"  src="images/gallery/thumbnails/vidwine.jpg" style="width:100%">
                         <img style="width:100%" id="21" class="hover-shadow gallery videos"  src="images/gallery/thumbnails/vidfall.jpg" style="width:100%">

                        </div>
                        <div class="galleryImage col-md-8 col-lg-8 col-xl-8 data-dismiss="modal" data-toggle="modal" data-target="#lightbox"">
                          <img style="width:100%" id="12" class="hover-shadow gallery novid" src="images/gallery/thumbnails/eleven.jpg" style="width:100%">
                          <img style="width:100%" id="16" class="hover-shadow gallery novid" src="images/gallery/thumbnails/stweb.jpg" style="width:100%">
                          <img style="width:100%" id="18" class="hover-shadow gallery novid" src="images/gallery/thumbnails/violin.jpg" style="width:100%">
                          <img style="width:100%" id="15" class="hover-shadow gallery novid" src="images/gallery/thumbnails/st.jpg" style="width:100%">
                          <img style="width:100%" id="19" class="hover-shadow gallery novid" src="images/gallery/thumbnails/winelogo.jpg" style="width:100%">
                         </div>
                        <div class="galleryImage col-md-8 col-lg-8 col-xl-8 data-dismiss="modal" data-toggle="modal" data-target="#lightbox2"">
                          <img style="width:100%" id="9" class="hover-shadow gallery novid" src="images/gallery/thumbnails/chess.jpg" style="width:100%">
                          <img style="width:100%" id="10" class="hover-shadow gallery novid" src="images/gallery/thumbnails/manga.jpg" style="width:100%">
                          <img style="width:100%" id="13" class="hover-shadow gallery novid" src="images/gallery/thumbnails/hamiltonhawk.jpg" style="width:100%">
                          <img style="width:100%" id="14" class="hover-shadow gallery novid" src="images/gallery/thumbnails/room.jpg" style="width:100%">
                          <img style="width:100%" id="22" class="hover-shadow gallery videos"  src="images/gallery/thumbnails/vidhealth.jpg" style="width:100%">
                          <img style="width:100%" id="23" class="hover-shadow gallery videos"  src="images/gallery/thumbnails/vidlift.jpg" style="width:100%">
                          <img style="width:100%" id="20" class="hover-shadow gallery videos"  src="images/gallery/thumbnails/viddobby.jpg" style="width:100%">


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
<!-- <script src="js/gallery.js" type="text/javascript"></script> --> videos

<script src="js/ajax.js" type="text/javascript">

</script>
<script src="js/video.js" type="text/javascript"></script>

</script>

</script>
</body>

</html>
