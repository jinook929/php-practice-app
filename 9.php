<?php session_start();
$_SESSION['props'] = "Session Properties";

setcookie("TheName", "Cookie cooked", time()+60*60*24*7);

$_GET['id'];
?>
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>
<?php 

if(isset($_GET['id'])){
	echo $_GET['id'];
}

?>
	<a href="9.php?id=abc">Click Here</a>
<br>
	<?php
	
	if(isset($_COOKIE["TheName"])){
		echo $_COOKIE["TheName"];
	}
	
	echo "<br>";

	if(isset($_SESSION["props"])){
		echo $_SESSION['props'];
	}
	?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>