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
				echo "<div class='article-box'>
					<h3>".$row['name']."</h3>
					<p>".$row['description']."</p>
					
				</div>";


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
			<td><?php echo $product->id; ?></td>
			<td><?php echo $product->name; ?></td>
			<td><?php echo $product->price; ?></td>
			<br>
			<td><a href="cart.php?id=<?php echo $product->id; ?>">Purchase</a></td>
			<br>
			
		</tr>
	<?php } ?>
</html>