<?php
	include 'header.php';
?>

<h1>Article page</h1>

<div class="article-container">
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
					<p>".$row['author']."</p>
					<p>".$row['description']."</p>
					<p>".$row['quantity']."</p>
					<p>".$row['price']."</p>
					<p>".$row['genre']."</p>
					<p>".$row['isbn']."</p>
					<p>".$row['pub_date']."</p>
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
		<tr>
			<br>
			<td><a href="cart.php?id=<?php echo $product->id; ?>">Add to Cart</a></td>
			<br>
			
		</tr>
	<?php } ?>
</html>