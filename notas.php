<?php

//CREAR UNA COOKIE (NOMBRE, VALOR, TIEMPO DE VIDA)
setcookie("NOMBRE", "VALOR", time() + 30);
//time()timepo en el momento 
// borramos la cookie usando el setcookie con valor time()-1

?>