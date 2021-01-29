
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

if(isset($_POST['submit']))
{
	echo $username = $_POST['name'];
}
	
?>
<form action="6.php" method="post">
<input type="text" name="name" placeholder="Enter your name:">
<input type="submit" name="submit">
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>