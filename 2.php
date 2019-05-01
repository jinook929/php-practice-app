<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */
	// $number1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	// $number2 = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
	$number1 = 10;
	$number2 = 20;

	echo $number1 + $number2 . "<br>";

	$names1 = array('John', 'Tom', 'Brad');
	$names2 = ["ceo" => 'John', "developer" => 'Tom', "designer" => 'Brad'];

	echo $names1[1];
	echo "<br>";
	echo $names2["designer"];
	
		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>