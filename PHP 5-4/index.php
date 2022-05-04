<link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">

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

<div class="container-fluid text-center">
      <form action="includes/login.inc.php" method="post">
        <br>
        <input type= "text" name="USERNAME" placeholder="Username">
        <br>
        <input type= "password" name="PASSWORD" placeholder="Password">
        <br>
        <br>
        <button type="submit" name="submit">Log In</button>
        <br>
        <a href="signup.php" id = "createaccount"> Create Account </a>
      </form>
    </div>
  </body>
</html>

