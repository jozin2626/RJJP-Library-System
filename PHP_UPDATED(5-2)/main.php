<?php
  include 'includes/dbh.inc.php';
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <title> Library Management System</title>

</head>

<body>
  <ul id = "navbar">
    <li> 
      <a href="logout.php">
        <button type = "button " id = "logout"> Logout </button>
      </a>
    </li>
    <li> <button type = "button " id = "accountView">View Account</button> </li>
  </ul>
  <div class = "UpperScreen">
    <h1>
      Library Management System 
       </h1>

       <!-- SEARCH -->
      <label for = "search"> Find Books: </label>
       <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
          <button type="submit" name="submit-search">Search</button>
      </form>
    </div>

    
<div class="article-container">
  <?php
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='article-box'>
          <h3>".$row['name']."</h3>
          <p>".$row['description']."</p>
          
        </div>";
      }
    }
  ?>
</div>


<div class="productDisplay">
  <h2 style = "text-align: center">
    Product preview
  </h2>
  <p id = "title">
    Book Title
  </p>
  <div id = "productImageDisplay">
   <!-- are we able to display a picture of the product?-->
  </div>
  <p id ="product description">
    Brief description of product goes here
  </p>

    <button type = "button" id = "checkout">Checkout</button>

  <form action="cart.php" method="POST">
        <button type="submit" name="submit-search">Cart</button>
  </form>
  
  <form action="test.php" method="POST">
        <button type="submit" name="submit-search">TEST</button>
  </form>

</div>

<div class="main">
 <ul> <!-- this is just place filler -->
  <li><a href> Book</a></li>
   <br>
   <br>
  <li><a href>  Book</a></li>
   <br>
   <br>
   <li><a href> Book</a></li>
   <br>
   <br>
   <li><a href> Book</a></li>
   <br>
   <br>
   <li><a href> Book</a></li>
   <br>
   <br>
</ul>  
  
  
</div>
   
</body>
</html> 