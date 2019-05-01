
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>

<form action="6.php" method="post">
	<input type="text" name="email" placeholder="Your Email Here">
	<input type="submit" name="submit">
</form>

<?php 

$isSubmitted = isset($_POST['submit']);
$email = $_POST['email'];
if($isSubmitted){
	if($email) {
		echo "We will send you an email (Your Email: $email).";
	} else {
		echo "Please, enter your email.";
	}
} 

?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>