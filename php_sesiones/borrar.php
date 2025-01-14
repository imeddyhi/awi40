<?php
  session_start();
  session_unset();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1><?php echo $_SESSION["nombre"];?></h1>
    </body>
</html>