<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <form id="loginForm" action="/phpday/day14-assignment/task1.php" method="POST">
        <div class="form-group">
          <label for="loginType">Choose login type:</label>
          <select class="form-control" id="loginType" name="loginType">
            <option  value="username">Username</option>
            <option value="tel">Phone number</option>
          </select>
        </div>
        <div class="form-group">
          <label for="credential">Enter</label>
          <input type="text" class="form-control" name="credential" id="credential" placeholder="Enter username or phone number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- PHP and JavaScript start here -->

    <?php
      session_start();
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginType"]) && isset($_POST["credential"])) {
        $loginType = $_POST["loginType"];
        $credential = $_POST["credential"];

        // validate login credentials
        if ($loginType === "username" && $credential === "ariff") {
          $_SESSION["username"] = $credential;
          echo '<script>alert("Login successful!");</script>';
        } elseif ($loginType === "tel" && $credential === "123456") {
          $_SESSION["username"] = $credential;
          echo '<script>alert("Login successful!");</script>';
        } else {
          echo '<script>alert("Invalid login!");</script>';
        }
      }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
