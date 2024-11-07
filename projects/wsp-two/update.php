<?php
// update.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = $_POST['product'];
    $price = $_POST['price'];

   
    $sql = "UPDATE items SET product=?, price=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        
        $stmt->bind_param("sdi", $product, $price, $id);
        
       
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
