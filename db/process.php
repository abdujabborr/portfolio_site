<?php
require_once('config.php'); 
?>


<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO portfolio (firstname, project, email, message)
  VALUES (?,?,?,?)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;





    //   if(isset($_POST)) {

    //     $firstname  = $_POST['firstname'];
    //     $email      = $_POST['email'];
    //     $project = $_POST['project'];
    //     $message    = $_POST['message'];


    //     $sql = "INSERT INTO callback (firstname, email, project, message ) VALUES(?,?,?,?,?)";
    //     $stmtinsert = $db->prepare($sql);
    //     $result = $stmtinsert->execute([$firstname, $email, $project, $message]);
    //     if($result) {
    //       echo 'Sucessfully saved';
    //     }else {
    //       echo 'There were errors while saving the data';
    //     }
       
    // }else {
    //     echo 'No data';
    // }
?>