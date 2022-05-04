


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <title> Library Management System</title>
  </head>

  <body>
    <div class = "UpperScreen">
    <h1>
      Library Management System
    </h1>
       <h2>Login Access</h2>
    </div>

      <form action="includes/login.inc.php" method="post">
        <input type= "text" name="USERNAME" placeholder="Username">
        <br>
        <input type= "password" name="PASSWORD" placeholder="Password">
        <br>
        <button type="submit" name="submit">Log In</button>
        <br>
        <a href="signup.php" id = "createaccount"> Create Account </a>
      </form>
  </body>
</html>

