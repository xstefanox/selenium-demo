<?php session_start() ?>
<html>
  <head></head>
  <body>
    <form action="form.php" method="post">
      <div>
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="first-name" value="<?php if (isset($_SESSION['first-name'])) echo $_SESSION['first-name'] ?>" />
        <span id="error-first-name"><?php if (isset($_SESSION['error-first-name'])) echo $_SESSION['error-first-name'] ?></span>
      </div>
      <div>
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="last-name" value="<?php if (isset($_SESSION['last-name'])) echo $_SESSION['last-name'] ?>" />
        <span id="error-last-name"><?php if (isset($_SESSION['error-last-name'])) echo $_SESSION['error-last-name'] ?></span>
      </div>
      <div>
        <button type="submit" id="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
