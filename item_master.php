<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>
<body>
    <h1>Add New Item</h1>
    <form action="item_master_form.php" method="post">
        <label for="ItemName">Item Name:</label>
        <input type="text" id="ItemName" name="ItemName" required>
        <br>
        <label for="UOM">Unit of Measure:</label>
        <input type="text" id="UOM" name="UOM" required>
        <br>
        <label for="PRate">Purchase Rate:</label>
        <input type="number" id="PRate" name="PRate" step="0.01" required>
        <br>
        <button type="submit">Add Item</button>
    </form>
</body>
</html>
