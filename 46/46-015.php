<?php
function getToken() {
  $s = openssl_random_pseudo_byte(24)
  return base64_encode($s); 
}
  session_start();
  $token = getToken(); 
  setcookie('token', $token);
  $_SESSION['token'] = $token;
?>
<body>
認証成功<a href="46-016.php">next</a>
</body>

