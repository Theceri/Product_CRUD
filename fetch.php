<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch</title>
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
        <div class="col-8">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>




                <?php
                include 'database.php';
                $sql="select * from products";
                $results = mysqli_query($conn, $sql);
                while ($product = mysqli_fetch_assoc($results)) //pulls one record at a time from the results and stores them in an associative array
                {
                    extract($product); //create variable from an associative array

                    echo "<tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$quantity</td>
                            <td>$price</td>
                            <td><a href='update.php?id=$id' class='btn btn-primary'>Update</a></td>
                            <td><a href='delete.php?id=$id' class='btn btn-danger'>Delete</a></td>
                        </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>