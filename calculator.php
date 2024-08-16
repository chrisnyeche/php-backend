<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="number" name="num01" required>
        <select name="operator" required>
            <option value="add"> + </option>
            <option value="subtract"> - </option>
            <option value="multiply"> * </option>
            <option value="divide"> / </option>
        </select>
        <input type="number" name="num02" required>
        <button name="calculate"> Calculate </button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize and validate the input
        $num01 = filter_var($_POST['num01'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num02 = filter_var($_POST['num02'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = htmlspecialchars($_POST['operator'], ENT_QUOTES, 'UTF-8');

        // Example echo with htmlspecialchars for output
        echo "<p>Number 1: " . htmlspecialchars($num01, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>Number 2: " . htmlspecialchars($num02, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>Operator: " . htmlspecialchars($operator, ENT_QUOTES, 'UTF-8') . "</p>";

        // Calculate and display the result
        if (is_numeric($num01) && is_numeric($num02)) {
            switch ($operator) {
                case 'add':
                    $result = $num01 + $num02;
                    break;
                case 'subtract':
                    $result = $num01 - $num02;
                    break;
                case 'multiply':
                    $result = $num01 * $num02;
                    break;
                case 'divide':
                    if ($num02 != 0) {
                        $result = $num01 / $num02;
                    } else {
                        $result = "Error: Division by zero.";
                    }
                    break;
                default:
                    $result = "Error: Invalid operator.";
                    break;
            }
            echo "<p>Result: " . htmlspecialchars($result, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>Invalid input.</p>";
        }
    }
    ?>
</body>
</html>