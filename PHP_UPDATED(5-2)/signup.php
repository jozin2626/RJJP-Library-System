<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <title> Library Management System</title>
    
</head>

<body>


<form action="includes/signup.inc.php" method="POST">
    <div class="UpperScreen">
        <h1>
            Library Management System

        </h1>
        <h2>
            Login Access
        </h2>
    </div>

    
    <br>
    <div>
        <label for="fname">First Name</label>
        <input type="text" name="FIRSTNAME" placeholder="firstname">
    </div>
    <br>
    <div>
        <label for="lname">Last Name</label>
        <input type="text" name="LASTNAME" placeholder="lastname">
    </div>
    <br>
    <div>
        <label for="fname">Username</label>
        <input type="text" name="USERNAME" placeholder="username">
    </div>
    <br>
    <div>
        <label for="pass">Password</label>
        <input type="text" name="PASSWORD" placeholder="password">
    </div>    
    <br>
    <div>
        <label for="email">Email</label>
        <input type="email" name="EMAIL" placeholder="email">
    </div>
    <br>
    <div>
        <button type="submit" onclick="validate()">Validate</button>
    </div>
</form>



</body>
<script src="index.js"></script>
</html>