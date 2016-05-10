<?php session_start() ?>
<html>
  <head></head>
  <body>
    <div>Inserted values:</div>
    <div>
      <span>First Name:</span>
      <span><?php echo $_SESSION['first-name'] ?></span>
    </div>
    <div>
      <span>Last Name:</span>
      <span><?php echo $_SESSION['last-name'] ?></span>
    </div>
  </body>
</html>
