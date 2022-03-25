<?php
    include_once('cart_data.php');
    session_start();
    $product_cart = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Danh sách sản phẩm trong kho</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Số lượng</th>
      <th>Giá bán</th>
      <th>Ảnh sản phẩm</th>
      <th>Thời gian</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($product_cart as $key => $product){?>
      <tr>
        <td><?= $product['product_code'] ?></td>
        <td><?= $product['product_name'] ?></td>
        <td>
            <div class="buttons_added">
                <a class="btn" href="./cart_reduction.php?id=<?= $key?>">-</a>
                <input aria-label="quantity" class="input-qty" max="20" min="1" name="quantity" type="number" value="<?= $product['product_quantity'] ?>">
                <a class="btn" href="./cart_increment.php?id=<?= $key?>">+</a>
            </div>
        </td>
        <td><?= number_format($product['product_price']*$product['product_quantity']); ?></td>
        <td> <img width="100px" height="100px" src="<?= $product['product_image'] ?>" alt=""> </td>
        <td><?= $product['time'] ?></td>
        <td><a class="btn btn-warning" href="delete_product.php?id=<?= $key?>">Delete</a></td>
      </tr>
      <?php }?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php">Quay lại</a>
</div>
</body>
</html>