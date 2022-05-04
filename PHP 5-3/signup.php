<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <title> Library Management System</title>
    
</head>
<body>
<nav id = "navbar">
    <li> <button type = "button " onclick="home()" id = "logout"> Logout </button></li>
    <script>
      function home() {
        window.location.href='index.php';
      }
    </script>
    
    </nav>
<form action="includes/signup.inc.php" method="POST">
    <div class="UpperScreen">
        <h1>
            Library Management System
        </h1>
        <h2>
            Account Creation
        </h2>
    </div>
    <div class="container-fluid text-center">
    <br>
        <label for="FIRSTNAME">First Name</label><br>
        <input type="text" name="FIRSTNAME" placeholder="First Name">
    <br>
        <label for="LASTNAME">Last Name</label><br>
        <input type="text" name="LASTNAME" placeholder="Last Name">
    <br>
        <label for="USERNAME">Username</label><br>
        <input type="text" id="USERNAME" name="USERNAME" placeholder="Username">
    <br>
        <label for="PASSWORD">Password</label><br>
        <span>Passwords must be at least 8 characters, and contain at least one letter, and number.</span><br>
        <input type="password" id="PASSWORD" name="PASSWORD" placeholder="Password">
    <br>
        <label for="EMAIL">Email</label><br>
        <input type="email" name="EMAIL" placeholder="Email">
    <br><br>
        <button type="submit" class="btn btn-secondary" onclick="validate()">Create Account</button>
    </div>
</form>
</body>
<script src="index.js"></script>
</html>