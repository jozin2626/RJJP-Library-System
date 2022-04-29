<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <title> Library Management System</title>

</head>

<body>
  <ul id = "navbar">
    <li> <button type = "button " id = "logout"> Logout </button></li>
    <li> <button type = "button " id = "accountView">View Account</button> </li>

  </ul>
  <div class = "UpperScreen">
    <h1>
      Library Management System 
       </h1>
      <label for = "search"> Find Books: </label>
       <input type = "text" 
              placeholder="Search by Title, Author, Genre and more"
              id = "search">
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