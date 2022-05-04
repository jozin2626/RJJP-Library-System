<?php
	include 'includes/dbh.inc.php';
?>

<h1>Search page</h1>

<div class="article-container">
<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM product WHERE name LIKE '%$search%' OR author LIKE '%$search%' OR isbn LIKE '%$search%' OR genre LIKE '%$search%' ";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);

		echo "There are ".$queryResult." results!";

		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$image = $row['img'];

				echo "<a href='article.php?title=".$row['name']."&date=".$row['author']."'><div 
				class='article-box'>
					<h3>".$row['name']."</h3>
					<p>".$row['author']."</p>
				</div></a>";
				echo '<img src = "imgs/'.$image.'" />';
			}
		} else {
			echo "There are no results matching your search!";
		}
	}

?>

</div>
