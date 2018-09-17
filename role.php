<?php 
session_start();
if (!isset($_SESSION['user'])) {
  echo("<script>");
            echo("window.location='index.php';");
   echo("</script>"); 
     exit;
}
 ?>