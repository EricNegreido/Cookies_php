<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    if(isset($_COOKIE["idioma"])){
      if($_COOKIE["idioma"] == "es"){
        header("Location:es.php");
      }else{
        header("Location:en.php");

      }
    }
  ?>
  <table>
    <tr>
      <td colspan="2" align="center"> <h1> Elige Idioma</h1> </td>
    </tr>
    <tr>
      <td align="center"> <a href="crearCookie.php?idioma=es"> Español </a></td>
      <td align="center"><a href="crearCookie.php?idioma=en"> Ingles </a></td>
    </tr>
  </table>
</body>
</html>