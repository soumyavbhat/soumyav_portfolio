<?php
  $user = "root";
  $pass = ""; // this should be a blank screen for windows machines
  $host = "localhost";
  $db = "db_portfolio";

  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset($conn, 'utf8');

  if (!$conn) {
    exit;
  }


  // $myQuery = "SELECT * FROM tbl_about";
  // $result = mysqli_query($conn, $myQuery);
  //
  // $rows = array();
  //
  // while($row = mysqli_fetch_assoc($result)) {
  //   $rows[] = $row;
  // }


  if (isset($_GET['aboutDesc'])) {
    $desc = $_GET['aboutDesc'];

    $myQuery = "SELECT about_desc FROM tbl_about";
 $result = mysqli_query($conn, $myQuery);

    $row =mysqli_fetch_assoc($result);

    echo json_encode($row['about_desc']);
  }


?>
