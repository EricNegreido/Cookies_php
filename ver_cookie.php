<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    if(!$_COOKIE["idioma"]){
      header("Location:index.php");
    }else if($_COOKIE["idioma"] == "es"){
      header("Location:es.php");
    }else{
      header("Location:en.php");
    }
  ?>
</body>
</html>