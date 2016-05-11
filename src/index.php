<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1 class="text-center">Selenium demo</h1>
    <div class="container">
      <form class="form-horizontal" action="form.php" method="post">
        <div class="form-group <?php if (isset($_SESSION['error-first-name'])): ?>has-error<?php endif ?>">
          <label for="first-name" class="col-sm-2 col-sm-offset-2 control-label">First Name</label>
          <div class="col-sm-4">
            <input type="text" id="first-name" class="form-control" name="first-name" value="<?php if (isset($_SESSION['first-name'])) echo $_SESSION['first-name'] ?>" />
            <span id="error-first-name" class="help-block"><?php if (isset($_SESSION['error-first-name'])) echo $_SESSION['error-first-name'] ?></span>
          </div>
        </div>
        <div class="form-group <?php if (isset($_SESSION['error-last-name'])): ?>has-error<?php endif ?>">
          <label for="last-name" class="col-sm-2 col-sm-offset-2 control-label">Last Name</label>
          <div class="col-sm-4">
            <input type="text" id="last-name" class="form-control" name="last-name" value="<?php if (isset($_SESSION['last-name'])) echo $_SESSION['last-name'] ?>" />
            <span id="error-last-name" class="help-block"><?php if (isset($_SESSION['error-last-name'])) echo $_SESSION['error-last-name'] ?></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-4">
            <button type="submit" id="submit" class="btn btn-info">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
