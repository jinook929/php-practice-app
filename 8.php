<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	$password = "New_York";
	echo $password . "<br>";
	$password = crypt($password, "$2y$10$" . "iloveyouGod...iloveyouGod");
	echo $password . "<br>";
	$secret = "123";
	echo $secret . "<br>";
	$secret = crypt($secret, "$2y$10$.....................A");
	echo $secret . "<br>";
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>