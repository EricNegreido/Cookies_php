<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  setcookie("idioma", $_GET["idioma"], time() + 120);
  header("Location:ver_cookie.php"); 
  ?>
</body>
</html>