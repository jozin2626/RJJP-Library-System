<?php
	include 'includes/dbh.inc.php';
?>

<link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">





<div class="container-fluid text-center">
<h1>Search page</h1>
<br>	
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
				echo "<br>";
				echo "<br>";
				echo "<br>";
				
			}
		} else {
			echo "There are no results matching your search!";
		}
	}

?>

</div>
