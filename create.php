<?php include 'db.php';

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $conn->query("INSERT INTO items(name, quantity, price)
                  VALUES('$name', '$qty', '$price')");
    header("Location: index.php");
}
?>
<form method="POST">
  <input name="name" placeholder="Item Name" required><br>
  <input name="quantity" type="number" required><br>
  <input name="price" type="number" step="0.01" required><br>
  <button name="save">Save</button>
</form>
