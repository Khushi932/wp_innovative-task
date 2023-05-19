<!DOCTYPE html>
<html>
<head>
  <title>Print First N Odd Numbers</title>
  <script>
    function printOddNumbers() {
      var n = document.getElementById("inputNumber").value;
      var output = document.getElementById("output");

      // Initialize variable i to 1 and an empty string for output
      var i = 1;
      var oddNumbers = "";

      // Loop through the first N odd numbers and append them to the output string
      for (var count = 0; count < n; count++) {
        oddNumbers += i + ", ";
        i += 2;
      }

      // Remove the last comma and space from the output string
      oddNumbers = oddNumbers.slice(0, -2);

      // Display the output
      output.innerHTML = "The first " + n + " odd numbers are: " + oddNumbers;
    }
  </script>
</head>
<body>
  <h1>Print First N Odd Numbers</h1>
  <label for="inputNumber">Enter a number:</label>
  <input type="number" id="inputNumber">
  <button onclick="printOddNumbers()">Print Odd Numbers</button>
  <p id="output"></p>
</body>
</html>
