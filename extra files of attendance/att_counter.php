<!DOCTYPE html>
<html>
<head>
    <title>Counter Example</title>
    <script>
        // JavaScript function to handle button click event
        function incrementCounter() {
            // Increment the counter value
            var counterElement = document.getElementById('counter');
            var currentCount = parseInt(counterElement.innerText);
            counterElement.innerText = currentCount + 1;
        }
    </script>
</head>
<body>

<!-- HTML table to display the counter value -->
<table border="1">
    <tr>
        <th>Counter</th>
    </tr>
    <tr>
        <td id="counter">0</td>
    </tr>
</table>

<!-- Button to increment the counter -->
<button onclick="incrementCounter()">Increment Counter</button>

</body>
</html>
