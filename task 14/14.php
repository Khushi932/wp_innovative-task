<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Numbers</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Enter a number:</label>
		<input type="number" name="number" min="1" required>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$n = $_POST["number"];

		function fibonacci($n) {
			$first = 0;
			$second = 1;

			for ($i = 0; $i < $n; $i++) {
				if ($i <= 1) {
					$current = $i;
				} else {
					$current = $first + $second;
					$first = $second;
					$second = $current;
				}

				echo $current . "<br>";
			}
		}

		echo "<h2>Fibonacci Numbers:</h2>";
		echo "<ul>";
		fibonacci($n);
		echo "</ul>";
	}
	?>
</body>
</html>
