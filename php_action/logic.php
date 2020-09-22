<?php
// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

  // Grab to token that came from the email link
  $token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    $username = mysqli_fetch_assoc($results)['username'];

    if ($username) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE login SET password='$new_pass' WHERE username='$username'";
      $results = mysqli_query($db, $sql);
      header('location: ../php_action/login.php');
    }
  }
}
?>