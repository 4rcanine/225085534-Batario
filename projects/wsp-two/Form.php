<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
</head>
<body>
<div class="container">
    <h1>Update Grocery Item</h1>
    <?php
    include 'db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE id = $id";
    $result = $conn->query($sql);
    $item = $result->fetch_assoc();
    ?>
    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <input type="text" name="product" value="<?php echo $item['product']; ?>" required>
        <input type="number" step="0.01" name="price" value="<?php echo $item['price']; ?>" required>
        <input type="submit" value="Update Item">
    </form>
</div>
</body>
</html>
