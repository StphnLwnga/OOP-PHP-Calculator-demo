<?php	include('inc/prac-header.php');	?>

<div class="offset-4 col-4 justify-content-center">
	<br> <br> <br><br>
	<form action="calc.php" method="POST">
		<div class="row">
			<div class="col">
				<input class="form-control form-control-lg" type="text" name="num1" />
			</div>
			<br>
			<div class="col">
				<input class="form-control form-control-lg" type="text" name="num2" />
			</div>
		</div>
		<br>
		<select class="my-1 mx-auto form-control" name="calc">
			<?php
				$arr = array("Add", "Subtract", "Multiply", "Divide");
				foreach ($arr as $value) {
					echo "<option value='".strtolower(substr($value, 0, 3))."'>".$value."</option>";
				}
			?>
		</select>
		<br>
		<button type="submit" class="btn-sm btn-primary btn-block">Calculate</button>
	</form>
</div>

<?php	include('inc/prac-footer.php');	?>
