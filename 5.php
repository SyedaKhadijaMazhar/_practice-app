<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo pow(2,4);
 echo "<br>";
 $str = "My name is Khadija";
 echo strtoupper($str);
 echo "<br>";
 $arr = [10,7,6,5,3,4,6,1,8,2,9];
 
 

 sort($arr);


  print_r($arr);
  echo "<br>";

  $str1 = "Khadija";
  $arr1 = [1234,"hello", "345", 4567, $str1];
  $found = in_array($str1,$arr1);
  if($found)
  {
	  echo "Found it";
  }
  else{
	  echo "Did not found it";
  }

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>