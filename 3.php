<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

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
for($i=1;$i<=10;$i++)
{
	echo $i . "</br>";
}

$mark = 50;
switch ($mark) {
	case '20':
	echo "Fail";
		break;
		case '5':
			echo "Pass";
			break;

	
	default:
		echo"Invalid";
		break;
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>