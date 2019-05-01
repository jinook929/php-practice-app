<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

$connection = mysqli_connect('localhost', 'root', 'root', 'demo');

$query = "SELECT * FROM members";
$result = mysqli_query($connection, $query);

// $row = mysqli_fetch_array($result);
// echo $row['nickname']."<br>";
// $row = mysqli_fetch_array($result);
// echo $row['nickname']."<br>";
// $row = mysqli_fetch_array($result);
// echo $row['nickname']."<br>";
// $row = mysqli_fetch_array($result);
// echo $row['nickname']."<br>";

while($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
	$nickname = $row['nickname'];
	echo "<h2>$id. "."$nickname<h2>";
}

?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
