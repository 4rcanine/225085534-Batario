<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop Activities</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .box {
            width: 300px;
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        pre {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            white-space: pre-wrap;
            word-wrap: break-word; 
            overflow-wrap: anywhere; 
        }
    </style>
</head>
<body>

<h2>PHP Loop Activities</h2>
<div class="container">

    <!-- Activity 1: Number Counter -->
    <div class="box">
        <h3>Activity 1: Number Counter</h3>
        <pre>
<?php
    $i = 2;
    while ($i <= 20) {
        echo "$i ";
        $i += 2;
    }
?>
        </pre>
    </div>

    <!-- Activity 2: Password Validator -->
    <div class="box">
        <h3>Activity 2: Password Validator</h3>
        <<form method="POST">
    <label for="password">Enter Password:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Submit</button>
</form>

        <pre>
        <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $correctPassword = "password123";


        if (isset($_POST['password'])) {
            $userPassword = $_POST['password'];

            if ($userPassword === $correctPassword) {
                echo "Access Granted.";
            } else {
                echo "Incorrect password. Please try again.";
            }
        } else {
            echo "Password field is missing!";
        }
    }
?>


        </pre>
    </div>

    <!-- Activity 3: Multiplication Table -->
    <div class="box">
        <h3>Activity 3: Multiplication Table</h3>
        <pre>
<?php
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . (7 * $i) . "\n";
    }
?>
        </pre>
    </div>

    <!-- Activity 4: Break and Continue -->
    <div class="box">
        <h3>Activity 4: Break and Continue</h3>
        <pre>
<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) continue;
        if ($i == 8) break;
        echo "$i ";
    }
?>
        </pre>
    </div>

    <!-- Activity 5: Sum of Numbers -->
    <div class="box">
        <h3>Activity 5: Sum of Numbers</h3>
        <pre>
<?php
    $sum = 0;
    $i = 1;
    while ($i <= 100) {
        $sum += $i;
        $i++;
    }
    echo "The sum of numbers from 1 to 100 is: $sum";
?>
        </pre>
    </div>

    <!-- Activity 6: Favorite Movies -->
    <div class="box">
        <h3>Activity 6: Favorite Movies</h3>
        <pre>
<?php
    $movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
    foreach ($movies as $index => $movie) {
        echo ($index + 1) . ". $movie\n";
    }
?>
        </pre>
    </div>

    <!-- Activity 7: Student Info -->
    <div class="box">
        <h3>Activity 7: Student Info</h3>
        <pre>
<?php
    $student = ["Name" => "Alice", "Age" => 20, "Grade" => "A", "City" => "Baguio"];
    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }
?>
        </pre>
    </div>

    <!-- Activity 8: Factorial Calculator -->
    <div class="box">
        <h3>Activity 8: Factorial Calculator</h3>
        <pre>
<?php
    $num = 4;
    $factorial = 1;
    for ($i = $num; $i >= 1; $i--) {
        $factorial *= $i;
    }
    echo "Factorial of $num is: $factorial";
?>
        </pre>
    </div>

    <!-- Activity 9: FizzBuzz Challenge -->
    <div class="box">
        <h3>Activity 9: FizzBuzz</h3>
        <pre>
        <?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo "$i ";
        }

        //line breaks para iwas overflow...
        if ($i % 10 == 0) {
            echo "\n";
        }
    }
?>
        </pre>
    </div>

    <!-- Activity 10: Prime Number Checker -->
    <div class="box">
        <h3>Activity 10: Prime Number Checker</h3>
        <form method="POST">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" id="number" required>
            <button type="submit">Check</button>
        </form>
        <pre>
        <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['number'])) {
        $num = (int) $_POST['number'];
        $isPrime = true;

        if ($num < 2) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i === 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "$num is a prime number.";
        } else {
            echo "$num is not a prime number.";
        }
    }
?>
        </pre>
    </div>

    <!-- Activity 11: Fibonacci Sequence -->
    <div class="box">
        <h3>Activity 11: Fibonacci Sequence</h3>
        <pre>
<?php
    $a = 0;
    $b = 1;
    $count = 0;

    while ($count < 10) {
        echo "$a ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
        $count++;
    }
?>
        </pre>
    </div>

    <!-- Activity 12: Reverse a String -->
    <div class="box">
        <h3>Activity 12: Reverse a String</h3>
        <pre>
<?php
    $str = "Hello";
    $reversed = "";

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    echo "Input: $str\nOutput: $reversed";
?>
        </pre>
    </div>

</div>

</body>
</html>
