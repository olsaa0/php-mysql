<?php
include_once('config.php');
$sql="SELECT * FROM products";
$selectProducts=$conn->prepare($sql);
$selectProducts->execute();

$products_data=$selectProducts->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th {
            padding: 10px 20px;
        }
        </style>
</head>
<body>
  
    <table>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
            
    </thead>
    <tbody>
      <?php
      foreach($products_data as $product){
      ?>
      <tr>
        <td> <?= $product['id'] ?></td>
        <td> <?= $product['title'] ?></td>
        <td> <?= $product['description'] ?></td>
        <td> <?= $product['quantity'] ?></td>
        <td> <?= $product['price'] ?></td>
        <td> <?= "<a href='updateProduct.php?id=$product[id]'>Update</a>"?></td>
        <td> <?= "<a href='delteProduct.php?id=$product[id]>Delete</a>"?></td>
      </tr>
        <?php
      }
      ?>
        </tbody>
    </table>
    <a href="index.php">Add User</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>