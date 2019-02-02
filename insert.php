<?php
include 'database.php';
if (isset($_POST['price']))
{
//    var_dump($_POST);
    extract($_POST);
    $sql = "INSERT INTO `products`(`name`, `price`, `quantity`) 
                          VALUES ('$name', $price, $quantity)";
    mysqli_query($conn, $sql);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">CRUD App</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="insert.php">Add Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="fetch.php">View Products</a>
            </li>
        </ul>
    </div>
</nav>

<div class="row justify-content-center">
    <div class="col-5">
        <h2>Add Product</h2>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="email">Product Name</label>
                <input type="text" name="name" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Product Quantity</label>
                <input type="number" name="quantity" min="1" required class="form-control" id="pwd">
            </div>7
            <div class="form-group">
                <label for="pwd">Product Price</label>
                <input type="number" name="price" min="1" required class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>

</body>
</html>