<?php
// add.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $price = $_POST['price'];

    $sql = "INSERT INTO items (product, price) VALUES ('$product', '$price')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
