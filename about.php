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
    <link rel="icon" type="image/png" href="images/logo.png" sizes="96x96"/>
<link rel="icon" type="image/png" href="images/logo.png" sizes="32x32"/>
<link rel="icon" type="image/png" href="images/logo.png" sizes="16x16"/>
<link rel="icon" type="image/png" href="images/logo.png" sizes="128x128"/>
    <title>Soumya About</title>
</head>

<body class="aboutpage">

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
  $myQuery = "SELECT about_desc FROM tbl_about";
$result = mysqli_query($conn, $myQuery);


}

 ?>

<h1 class="hidden">About Page</h1>
    <!-- Container -->
    <div class="small visible-sm visible-md visible-xs">

        <div class="container">

<!-- NAIGATION -->
<nav class="navbar navbar-light row" style="background-color: #023F48;">
    <img class="img-fluid col-xs-3 col-sm-2 col-md-2" src="images/desktop/logo.png" alt="Logo">
    <!-- <div type="button" class="col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8 hamButton"> -->

      <div type="button" data-dismiss="modal" class=" col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8" data-toggle="modal" data-target="#overlay"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>

      <!-- Modal -->
      <div id="overlay" class="modal fade"  >
        <div class="modal-dialog" >

          <!-- Modal content-->
          <!-- <div class="modal-content"> -->

            <ul class="row">
                <li><a href="index.php"><h3>HOME</h3></a></li>
                <li><a href="about.php"><h3>ABOUT</h3></a></li>
                <li><a href="work.php"><h3>WORK</h3></a></li>
                <li><a href="contact.php"><h3>CONTACT</h3></a></li>
                <li data-dismiss="modal" ><span class="glyphicon glyphicon-chevron-up" aria-hidden="true" data-dismiss="modal"></span></li>
            </ul>

          <!-- </div> -->

        </div>
      </div>



    <!-- </div> -->

</nav>

            <!-- <nav class="navbar row" style="background-color: #023F48;">
              <h2 class="hidden">Navigation</h2>
                <img class="img-fluid col-xs-3 col-sm-2 col-md-2" src="images/desktop/logo.png" alt="Logo">
                <div type="button" class="fa fa-bars col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8 hamButton"></div>

            </nav>
            <h2 class="hidden">Menu</h2>
            <div class="overlay">
                <div class="overlayContent row">
                    <ul class="row">
                        <li class="box"><a href="index.php">HOME</a></li>
                        <li class="box"><a href="about.php">ABOUT</a></li>
                        <li class="box"><a href="work.php">WORK</a></li>
                        <li class="box"><a href="contact.php">CONTACT</a></li>
                    </ul>
                    <div type="button" class="fa fa-chevron-up close col-xs-12 col-sm-12 col-md-12 close"></div><br>

                </div>
            </div> -->


            <div class="row">
                <img class="img-fluid img-responsive aboutMeImage col-xs-8 col-sm-8 col-md-8 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 centered" src="images/desktop/AboutMe.gif?<?php echo time();?>" style="width:50%" alt="About Me Image">
            </div>


            <div class="row">
              <div class="profile col-xs-10 col-sm-10 col-md-10 col-xs-offset-2 col-sm-offet-2 col-md-offset-2 centered">
                  <h2>PROFILE</h2>

                  <p>Designer, Motion Graphics Artist, Animator, Developer</p>
              </div>
            </div>

            <div id="accordion" role="tablist">

              <div class="card panel">
                  <div class="card-header" role="tab" id="headingOne">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="collapseOne">
                          <div class="collapseButton"><h2>About Me</h2>
                          </div>
                        </a>
                      </h5>

                  </div>

                  <div id="about" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body resumeSInfo">
                          <p class="aboutSInfo" class="about_desc">
                            <?php while ($row = $result->fetch_assoc()) {
                                echo $row['about_desc']."<br>";
                            } ?>
                                                    </p>
                      </div>
                  </div>
              </div>

              <div class="card panel">
                  <div class="card-header" role="tab" id="headingTwo">
                      <h5 class="mb-0">
      <a class="collapsed" data-toggle="collapse" href="#resume" aria-expanded="false" aria-controls="collapseTwo">
          <div class="collapseButton"><h2>Resume</h2></div>
      </a>
    </h5>
                  </div>
                  <div id="resume" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body resumeSInfo">
                          <div class="row">
                              <div class="videoS resumeSInfo col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">Video goes here</div>
                              <a style="text-align:center"class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 centered" href="images/desktop/Resume.pdf " download="resume">
                                  <p>Download my Resume</p>
                              </a>                            </div>
                      </div>
                  </div>
              </div>


              <div class="card panel">
                  <div class="card-header" role="tab" id="headingFive">
                      <h5 class="mb-0">
      <a class="collapsed" data-toggle="collapse" href="#skills" aria-expanded="false" aria-controls="collapseFive">
          <div class="collapseButton"><h2>Skills</h2></div>
      </a>
    </h5>
                  </div>
                  <div id="skills" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                      <div class="card-body skillSInfo">

                        <div class="row skillSInfo">
                            <p class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1" id="designS">
                              <?php
                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '1'";
                                $skill_name = mysqli_query($conn, $skillNquery);
                                while ($row = $skill_name->fetch_assoc()) {
                                    echo $row['skill_name'];
                                }
                              ?>
                              <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <br><span>
                                  <?php
                                    $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '1'";
                                    $skills_desc = mysqli_query($conn, $skillNquery);
                                    while ($row = $skills_desc->fetch_assoc()) {
                                        echo $row['skills_desc'];
                                    }
                                  ?>
                                </span></p>
                            <p class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1" id="videoS">
                              <?php
                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '2'";
                                $skill_name = mysqli_query($conn, $skillNquery);
                                while ($row = $skill_name->fetch_assoc()) {
                                    echo $row['skill_name'];
                                }
                              ?>
                              <i class="fa fa-caret-down" aria-hidden="true"></i><br><span>
                                <?php
                                  $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '2'";
                                  $skills_desc = mysqli_query($conn, $skillNquery);
                                  while ($row = $skills_desc->fetch_assoc()) {
                                      echo $row['skills_desc'];
                                  }
                                ?>
                               </span></p>
                            <p class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1" id="devS">
                              <?php
                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '3'";
                                $skill_name = mysqli_query($conn, $skillNquery);
                                while ($row = $skill_name->fetch_assoc()) {
                                    echo $row['skill_name'];
                                }
                              ?>
                              <i class="fa fa-caret-down" aria-hidden="true"></i><br><span>
                                <?php
                                $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '3'";
                                $skills_desc = mysqli_query($conn, $skillNquery);
                                while ($row = $skills_desc->fetch_assoc()) {
                                    echo $row['skills_desc'];
                                }
                              ?>
                            </span></p>
                            <p class="col-lg-5 col-xl-5">
                              <?php
                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '4'";
                                $skill_name = mysqli_query($conn, $skillNquery);
                                while ($row = $skill_name->fetch_assoc()) {
                                    echo $row['skill_name'];
                                }
                              ?>
                              <i class="fa fa-caret-down" style="opacity:0" aria-hidden="true"></i><br><span><?php
                              $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '4'";
                              $skills_desc = mysqli_query($conn, $skillNquery);
                              while ($row = $skills_desc->fetch_assoc()) {
                                  echo $row['skills_desc'];
                              }
                            ?></span></p>
                            <p class="col-lg-5 col-xl-5">  <?php
                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '4'";
                                $skill_name = mysqli_query($conn, $skillNquery);
                                while ($row = $skill_name->fetch_assoc()) {
                                    echo $row['skill_name'];
                                }
                              ?>
                              <i class="fa fa-caret-down" style="opacity:0" aria-hidden="true"></i><br><span>Grade Exams | Trinity College of London</span></p>
                            <p class="col-lg-5 col-xl-5">Check out my music on <a href="https://soundcloud.com/soumya-bhat91">SoundCloud</a><i class="fa fa-caret-down" style="opacity:0" aria-hidden="true"></i></p>
                        </div>
                        <div class="graphS">
                            <div class="defaultS">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Design</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                <span class="skill"><i class="val">95%</i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Vocals</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                <span class="skill"><i class="val">90%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Video</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                <span class="skill"><i class="val">95%</i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Violin</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                <span class="skill"><i class="val">80%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Development</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                <span class="skill"><i class="val">90%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="designS">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Photoshop</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                <span class="skill"><i class="val">80%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div>

                                <div class="row"> -->
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Illustrator</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                <span class="skill"><i class="val">80%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>InDesign</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span class="skill"><i class="val">75%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vidS">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Maya</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                <span class="skill"><i class="val">85%</i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Premier</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                <span class="skill"><i class="val">80%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Cinema-4D</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span class="skill"><i class="val">75%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Audition</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="skill"><i class="val">70%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>After Effects</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                <span class="skill"><i class="val">90%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>3DS Max</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="skill"><i class="val">70%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="devS">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>HTML5</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                <span class="skill"><i class="val">95%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>JavaScript</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span class="skill"><i class="val">75%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>CSS/SCSS</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                <span class="skill"><i class="val">95%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>MVC Framework</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span class="skill"><i class="val">75%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Responsive Framework</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                <span class="skill"><i class="val">80%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-5 col-mg-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                        <h2>Vue</h2>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="skill"><i class="val">65%</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <div class="visible-lg visible-xl">
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav visible-lg visible-xl">
                    <li><img src="images/desktop/logo.png" alt="Logo"></li><br>
                    <li class="navigation">
                        <a href="index.php">HOME</a>
                        <a href="about.php">ABOUT</a>
                        <a href="work.php">WORK</a>
                        <a href="contact.php">CONTACT</a>
                  </li>
                </ul>
            </div>

            <div id="page-content-wrapper" >
                <div class="page-content ">
                  <div class="visible-lg visible-xl">
                    <div class="container ">
                        <div class="row visible-lg visible-xl">
                            <div id="myCarousel" class="carousel slide " data-ride="carousel" data-interval="false">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner ">
                                    <div class="item active">
                                        <div class="row" >
                                            <div class=" col-lg-4 col-xl-4 col-lg-offset-1 col-xl-offset-1">
                                                <img class="img-fluid img-responsive aboutMeImage visible-lg visible-xl" src="images/desktop/AboutMe.gif?<?php echo time();?>" alt="About Me Image">
                                            </div>
                                            <!-- ABout Info -->
                                            <p class="aboutInfo col-lg-6 col-xl-6 " class="about_desc">
                                              <?php
                                                $bio = "SELECT about_desc FROM `tbl_about` WHERE about_id = '1'";
                                                $about_desc = mysqli_query($conn, $bio);
                                                while ($row = $about_desc->fetch_assoc()) {
                                                    echo $row['about_desc'];
                                                }
                                              ?>
                                                         <!-- Glass slippers, toys with life, the boy in the jungle and other make-believe speculations in the virtual world instigated a passion for animation. I, Soumya, wriggled my way into the animation industry about 2 years ago. I currently hold a Bachelor’s
                                                in Animation, awarded by Manipal University Bangalore Campus. Shortly after graduation, I gained immense experience when I was hired by a production house, Urban Image as the Assistant Art Director. In order
                                                to expand my knowledge and areas of Interest, I moved to Canada and enrolled in the Interactive Media Design Program, Fanshawe College. Breaking out of my comfort zone, got me interested in developing as
                                                well. I have been pursuing a few certifications in Music – Vocals and Violin (Trinity College of Music) and Dance. Years from now, I would like to see myself watching the outcome of another visual culture,
                                                but this time with my indelible mark on it. It’s my time to repay the artistic area with my eloquent performance. -->
                                            </p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="row resume">
                                            <div class=" col-lg-2 col-xl-2 col-lg-offset-1 col-xl-offset-1 centered">
                                                <h2>RESUME</h2>
                                                <a href="images/desktop/Resume.pdf " download="resume">
                                                    <p>Download my Resume</p>
                                                </a>
                                            </div>
                                            <p>
                                              <?php
                                                $resume = "SELECT * FROM `tbl_resume` WHERE resume_id = '1'";
                                                $resume_video = mysqli_query($conn, $resume);
                                                $resume_path = "videos/";
                                                while ($vid = $resume_video->fetch_assoc()) {
                                                  $video =  $resume_path.$vid['resume_video'];
                                              }
                                              ?></p>
                                              <video class="col-lg-8 col-xl-8 video responsive" autoplay muted controls>
                                                  <source src="<?php echo $video; ?>" type="video/mp4"  >
                                                </video>


                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="row skill">
                                            <div class=" col-lg-2 col-xl-2 col-lg-offset-1 col-xl-offset-1 centered">
                                                <h2>SKILLS</h2>
                                            </div>
                                        </div>

                                        <div class="row skillsInfo">
                                            <p class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1" id="design" class="1" >
                                              <?php
                                              // if(isset($_GET['class'])){
                                              // $class = $_GET["class"];
                                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '1'";
                                                $skill_name = mysqli_query($conn, $skillNquery);
                                                while ($row = $skill_name->fetch_assoc()) {
                                                    echo $row['skill_name'];
                                                }
// }
                                              ?>
                                              <i class="fa fa-caret-down" aria-hidden="true"></i><br><span class="skills_desc">
                                                <?php
                                                  $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '1'";
                                                  $skills_desc = mysqli_query($conn, $skillNquery);
                                                  while ($row = $skills_desc->fetch_assoc()) {
                                                      echo $row['skills_desc'];
                                                  }
                                                ?>
                                              </span></p>

                                            <p class="col-lg-5 col-xl-5" class="skill_name">
                                              <?php
                                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '4'";
                                                $skill_name = mysqli_query($conn, $skillNquery);
                                                while ($row = $skill_name->fetch_assoc()) {
                                                    echo $row['skill_name'];
                                                }
                                              ?>
                                              <i class="fa fa-caret-down" style="opacity:0 "aria-hidden="true"></i><br><span class="skills_info">
                                                <?php
                                                  $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '4'";
                                                  $skills_desc = mysqli_query($conn, $skillNquery);
                                                  while ($row = $skills_desc->fetch_assoc()) {
                                                      echo $row['skills_desc'];
                                                  }
                                                ?>
                                                </span></p>
                                        </div>
                                        <div class="row skillsInfo">
                                            <p class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1" id="video"  class="skill_name">
                                              <?php
                                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '2'";
                                                $skill_name = mysqli_query($conn, $skillNquery);
                                                while ($row = $skill_name->fetch_assoc()) {
                                                    echo $row['skill_name'];
                                                }
                                              ?>
                                              <i class="fa fa-caret-down" aria-hidden="true"></i><br><span class="skills_info">
                                                <?php
                                                  $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '2'";
                                                  $skills_desc = mysqli_query($conn, $skillNquery);
                                                  while ($row = $skills_desc->fetch_assoc()) {
                                                      echo $row['skills_desc'];
                                                  }
                                                ?>
                                              </span></p>
                                            <p class="col-lg-5 col-xl-5">
                                              <?php
                                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '5'";
                                                $skill_name = mysqli_query($conn, $skillNquery);
                                                while ($row = $skill_name->fetch_assoc()) {
                                                    echo $row['skill_name'];
                                                }
                                              ?>
                                              <i class="fa fa-caret-down" style="opacity:0 "aria-hidden="true"></i><br><span class="skills_info">
                                                <?php
                                                  $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '5'";
                                                  $skills_desc = mysqli_query($conn, $skillNquery);
                                                  while ($row = $skills_desc->fetch_assoc()) {
                                                      echo $row['skills_desc'];
                                                  }
                                                ?>
                                              </span></p>
                                        </div>
                                        <div class="row skillsInfo">
                                            <p class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1" id="dev" class="skill_name">
                                              <?php
                                                $skillNquery = "SELECT skills_id, skill_name FROM `tbl_skills` WHERE skills_id = '3'";
                                                $skill_name = mysqli_query($conn, $skillNquery);
                                                while ($row = $skill_name->fetch_assoc()) {
                                                    echo $row['skill_name'];
                                                }
                                              ?>
                                              <i class="fa fa-caret-down" aria-hidden="true"></i><br><span class="skills_info">
                                                <?php
                                                  $skillNquery = "SELECT skills_id, skills_desc FROM `tbl_skills` WHERE skills_id = '3'";
                                                  $skills_desc = mysqli_query($conn, $skillNquery);
                                                  while ($row = $skills_desc->fetch_assoc()) {
                                                      echo $row['skills_desc'];
                                                  }
                                                ?>
                                              </span></p>
                                            <p class="col-lg-5 col-xl-5">Check out my music on <a href="https://soundcloud.com/soumya-bhat91">SoundCloud</a><i class="fa fa-caret-down" style="opacity:0 "aria-hidden="true"></i></p>
                                        </div>

                                        <div class="graph">
                                              <div class="default">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                          <h2>Design</h2>
                                                          <div class="progress">
                                                              <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                                  <span class="skill"><i class="val">95%</i></span>
                                                              </div>
                                                          </div>
                                                      </div>

                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>Vocals</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                                <span class="skill"><i class="val">90%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>Video</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                                <span class="skill" ><i class="val">95%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>Violin</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                                <span class="skill"><i class="val">80%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>Development</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                                <span class="skill"><i class="val">90%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="design">
                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>Photoshop</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                                <span class="skill"><i class="val">80%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- </div>

                                                <div class="row"> -->
                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>Illustrator</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                                <span class="skill"><i class="val">80%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>InDesign</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                                <span class="skill"><i class="val">75%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="vid">
                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>Maya</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                                <span class="skill"><i class="val">85%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>Premier</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                                <span class="skill"><i class="val">80%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>Cinema-4D</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                                <span class="skill"><i class="val">75%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>Audition</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                                <span class="skill"><i class="val">70%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>After Effects</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                                <span class="skill"><i class="val">90%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>3DS Max</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                                <span class="skill"><i class="val">70%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dev">
                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>HTML5</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                                <span class="skill"><i class="val">95%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>JavaScript</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                                <span class="skill"><i class="val">75%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>CSS/SCSS</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                                <span class="skill"><i class="val">95%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>MVC Framework (Laravel)</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                                <span class="skill"><i class="val">75%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                                                        <h2>Responsive Framework</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                                <span class="skill"><i class="val">80%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-xl-5">
                                                        <h2>Vue</h2>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                                <span class="skill"><i class="val">65%</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row ">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
</div>

                <!-- Script -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
                <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script>
 -->
 <!-- <script type="text/javascript" src="js/aboutdata.js"> </script> -->
 <!-- <script src="js/vendor/jquery.js"></script> -->
<script src="js/video.js" type="text/javascript"></script>

                <script src="js/about.js"></script>
                <script>

                </script>
</body>

</html>
