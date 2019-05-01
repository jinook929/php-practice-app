<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values

*/

function addNumbers(){
	return 23 + 45;
}
echo addNumbers();

echo "<br>";

function greeting($name) {
	return "Hi, $name!";
}
echo greeting("Tim");

echo "<br>";

function multiplication($num1, $num2) {
	$multi_result = $num1 * $num2;
	return $multi_result;
}
echo multiplication(33, 56);

echo "<br>";

function randomNum($num) {
	$randNum = rand(1, 3);
	$result = $num + $randNum;
	return $result;
}
echo randomNum(10);

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>