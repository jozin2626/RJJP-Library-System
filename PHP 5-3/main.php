<?php
  include 'includes/dbh.inc.php';
  
?>

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
        window.location.href='logout.php';
      }
    </script>
    </nav>
    <div class="container-fluid text-center" id="preview">
    <h1>Library Management System </h1>
    <label for = "search"> Find Books: </label>
<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search by Title, Author, Genre and more" style="width: 20%;">
      <button type="submit" name="submit-search">Search</button>
</form>
  <div class="row content">
    <div class="col-sm-3">
  <h2 style = "text-align: center">
    Best Seller
  </h2>
  <p id = "title">
    Johnny the Walrus
  </p>
  <div id = "productImageDisplay">
   <!-- are we able to display a picture of the product?-->
   <!-- Yes, but we will need to download the image -->
  </div>

  <p id ="product description">
    Walsh
  </p>
  <?php echo '<img src="imgs/johnny1.jpg" alt="icon" />';?>
    <form action="cart.php" method="POST">
      <button type = "submit" class="btn btn-primary">Checkout</button>
    </form>
    </div>
<div class="article-container">
  
  <?php
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['img'];
        echo "<a href='article.php?title=".$row['name']."&date=".$row['description']."'><div class='article-box'>
          <h3>".$row['name']."</h3>
          <p>".$row['author']."</p>
        </div></a>";
        echo '<img src = "imgs/'.$image.'" />';
      }
    } 
?>

</div>
  
</div>
   
</body>
</html> 