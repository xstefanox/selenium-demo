<?php session_start() ?>
<html>
  <head>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1 class="text-center">Selenium demo</h1>
    <div class="container">
      <h3 class="text-center">Inserted values</h3>
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 col-sm-offset-3 control-label">First Name</label>
          <div class="col-sm-4">
            <p id="first-name" class="form-control-static"><?php echo $_SESSION['first-name'] ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-offset-3 control-label">Last Name</label>
          <div class="col-sm-4">
            <p id="last-name" class="form-control-static"><?php echo $_SESSION['last-name'] ?></p>
          </div>
        </div>
        </form>
    </div>
  </body>
</html>
