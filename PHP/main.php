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
    <li> <button type = "button " id = "accountView">View Account</button> </li>

    </nav>
    <div class="container-fluid text-center" id="preview">
    <h1>Library Management System </h1>
    <label for = "search"> Find Books: </label>
    <input type = "text" placeholder="Search by Title, Author, Genre and more" id="search" style="width: 20%;">
  <div class="row content">
    <div class="col-sm-3">
  <h2 style = "text-align: center">
    Product preview
  </h2>
  <p id = "title">
    Book Title
  </p>
  <div id = "productImageDisplay">
   <!-- are we able to display a picture of the product?-->
   <!-- Yes, but we will need to download the image -->
  </div>
  <p id ="product description">
    Brief description of product goes here
  </p>
  <button type = "button" class="btn btn-primary">Checkout</button>
    </div>

<div class="col-sm-6">
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
  
</div>
   
</body>
</html> 
