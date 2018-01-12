
<?php
//ini_set("display_errors",1);
//error_reporting(E_ALL);
$user = 'root';
$pass = '';
$host= 'localhost';
$db = 'db_portfolio';

$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conn, 'utf8');

if (mysqli_connect_errno()){
  printf("Connect fail: %s\n", mysqli_connect_error()); //forces error to be a string
  exit();
}
//echo "working";

if (isset($_GET['id'])) {

  $id=$_GET['id'];

  $myQuery = "SELECT * FROM tbl_work WHERE work_id={$id}";
//echo $myQuery;
  $result = mysqli_query($conn, $myQuery);
//echo $result;
  //$row = mysqli_fetch_assoc($result);
}
$grpResult="";
echo"[";
// $proResult = array();
while ($proResult= mysqli_fetch_assoc($result)){
  // echo $result['gallery_name'];
  $jsonResult = json_encode($proResult);
  //echo$jsonResult;
  $grpResult .= $jsonResult.",";
  //JSONLINT copy and paste your json code from the browser to see if its valid
}
echo substr ($grpResult,0, -1);

echo "]";
mysqli_close($conn);
?>
