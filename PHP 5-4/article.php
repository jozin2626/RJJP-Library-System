<?php
	include 'header.php';
?>

<link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">



<div class="container-fluid text-center">
	<h1>Product Page</h1>
	<br>	
	<?php
		$title = mysqli_real_escape_string($conn, $_GET['title']);
		$date = mysqli_real_escape_string($conn, $_GET['date']);

		$sql = "SELECT * FROM product WHERE name='$title'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$image = $row['img'];
				echo "<div class='article-box'>
					<h3>".$row['name']."</h3>
					<p>Author: ".$row['author']."</p>
					<p>Description: ".$row['description']."</p>
					<p>Quantity: ".$row['quantity']."</p>
					<p>Price: ".$row['price']."</p>
					<p>Genre: ".$row['genre']."</p>
					<p>ISBN: ".$row['isbn']."</p>
					<p>Publication Date: ".$row['pub_date']."</p>
				</div>";
				
				echo '<img src = "imgs/'.$image.'" />';


			}
		}
	?>
</div>

</body>
<?php 

$query = "SELECT * FROM product WHERE name='$title' ";
$result = mysqli_query($conn, $query);

while($product = mysqli_fetch_object($result)) { ?>
	<div class="container-fluid text-center">	
		<tr>
			<br>
			<td><a href="cart.php?id=<?php echo $product->id; ?>">Add to Cart</a></td>
			<br>
			
		</tr>
	</div>
	<?php } ?>
</html>