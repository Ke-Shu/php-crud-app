<?php include 'db.php';

$id = $_GET['id'];
$item = $conn->query("SELECT * FROM items WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $conn->query("UPDATE items SET name='$name', quantity='$qty', price='$price'
                  WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="POST">
  <input name="name" value="<?= $item['name'] ?>"><br>
  <input name="quantity" value="<?= $item['quantity'] ?>"><br>
  <input name="price" value="<?= $item['price'] ?>"><br>
  <button name="update">Update</button>
</form>
