<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if(3 < 2){
	echo "I love Java";
} elseif(4 === "4") {
	echo "I love JavaScript";
} else {
	echo "I love PHP";
}

echo "<br>";

for($i = 0; $i < 10; $i++){
	echo $i . "<br>";
} 

$str = "String";
switch($str){
	case "string":
		echo "The first letter should be capitalized";
		break;
	case "Strings":
		echo "The word should be singular";
		break;
	case "Strng":
		echo "You are missing 'i'";
		break;
	case "strine":
		echo "The last letter should be 'g'";
		break;
	case "String":
		echo "It is correct. The word was 'String'!!!";
		break;
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>