<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

  // Create a database connection
  $con = mysqli_connect($server, $username, $password);

  // Check for connection success
  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }
// echo "Success Subbmitting in the database";

$name = htmlspecialchars(strip_tags(trim($_POST['name'])));
        $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
        $person = htmlspecialchars(strip_tags(trim($_POST['person'])));
        $reservation_date = htmlspecialchars(strip_tags(trim($_POST['reservation-date'])));
        $time = htmlspecialchars(strip_tags(trim($_POST['time'])));
        $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

$sql = "INSERT INTO `reservations` . `reservations` (`name`, `phone`, `person`, `reservation_date`, `time`, `message`, `created_at`) VALUES ('$name', '$phone', '$person', '$reservation_date', '$time', '$message', current_timestamp())";
// echo $sql;

if($con->query($sql) == true){
    header("Location: confirm.php?name=" . urlencode($name) . 
           "&phone=" . urlencode($phone) . 
           "&person=" . urlencode($person) . 
           "&reservation_date=" . urlencode($reservation_date) . 
           "&time=" . urlencode($time));

    exit();
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>