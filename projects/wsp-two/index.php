<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; }
        .container { max-width: 600px; margin: 50px auto; }
        h1 { text-align: center; color: #444; }
        form { margin-bottom: 20px; }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #28a745; color: white; }
        .actions a { margin-right: 10px; text-decoration: none; color: #007bff; }
    </style>
</head>
<body>
<div class="container">
    <h1>Grocery List</h1>
    <form action="add.php" method="POST">
        <input type="text" name="product" placeholder="Product Name" required>
        <input type="number" step="0.01" name="price" placeholder="Product Price" required>
        <input type="submit" value="Add Item">
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'db.php';
        $sql = "SELECT * FROM items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['product'] . "</td>";
                echo "<td>₱" . number_format($row['price'], 2) . "</td>";
                echo "<td class='actions'>
                        <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                        <a href='form.php?id=" . $row['id'] . "'>Update</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No items in your list.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>
</body>
</html>
