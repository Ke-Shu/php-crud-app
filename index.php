<?php include 'db.php'; ?>
<h2>Inventory Items</h2>
<a href="create.php">Add Item</a>
<table border="1">
<tr>
  <th>ID</th><th>Name</th><th>Qty</th><th>Price</th><th>Actions</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM items");
while($row = $result->fetch_assoc()):
?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['quantity'] ?></td>
<td><?= $row['price'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
<a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
