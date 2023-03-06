<?php
include_once "connect-to-sql.php";
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $stmt = $connection->prepare("SELECT * FROM admins WHERE email = ? AND password = ?");
  $stmt->bind_param("ss", $email, md5($password));
  $stmt->execute();
  $result = $stmt->get_result();
  $users = $result->fetch_all(MYSQLI_ASSOC);
  header('Content-type: application/json');
  if (isset($_SESSION['settime_allow']) && date('H:i:s') < $_SESSION['settime_allow']) {
    echo json_encode(['success' => false, 'message' => "You can access after 5 minutes"]);
  } else {
    if (count($users) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['trylogin'] = 0;
      echo json_encode(['success' => true]);
    } else {
      if ($_SESSION['trylogin']) {
        $_SESSION['trylogin'] = $_SESSION['trylogin'] + 1;
      } else {
        $_SESSION['trylogin'] = 1;
      }
      if ($_SESSION['trylogin'] > 2) {
        $_SESSION['settime_allow'] = date('H:i:s', strtotime('+5 minutes'));
      }
      echo json_encode(['success' => false, 'message' => "Email or password is wrong"]);
    }
  }
  $stmt->close();
}
