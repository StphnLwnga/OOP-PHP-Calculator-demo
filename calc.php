<?php
	include('inc/prac-header.php');
	
	include('inc/CalcClass.php');
?>
<div class="offset-4 col-4 justify-content-center">
	<br> <br> <br><br>
	<h4 class="text-center text-success">
		<?php
			
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$calc = $_POST['calc'];
			
			$evaluate = new Calc($num1, $num2, $calc);
			
			echo $evaluate->calcMethod();
		?>
	</h4>
<?php
	include('inc/prac-footer.php');
?>
