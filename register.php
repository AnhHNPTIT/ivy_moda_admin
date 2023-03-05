<?php
include_once "connect-to-sql.php";
session_start();

if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])) {
  $firstName = $_POST['$firstName'];
  $lastName = $_POST['$lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $stmt = $connection->prepare("SELECT * FROM admins WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();  
  header('Content-type: application/json');

  if ($stmt->num_rows > 0) {
    $_SESSION['email'] = $email;
    echo json_encode(['success' => false, 'message' => "Email is existed"]);
  } else {
    $stmt = $connection->prepare("INSERT INTO admins (firstName,lastName,email,password) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, md5($password));
    $result = $stmt->execute();
    if ($result === TRUE){
      echo json_encode(['success' => true, 'message' => "Register success"]);
    }
    else {
      echo json_encode(['success' => false, 'uncomplete' => 'Error']);	
    }
  }
}
