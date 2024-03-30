<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search</title>
</head>
<style>
	body {
		background-image: url("img/img3.png");
		background-position: center;
	}
</style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                 
                                    <th>name</th>
                                    <th>number</th>
                                    <th>email</th>
                                    <th>method</th>
                                    <th>address</th>
                                    <th>total_products</th>
                                    <th>total_price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $mysqli = mysqli_connect("localhost","root","","test1");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM `order` WHERE CONCAT(name, number, email, method, address, total_products, total_price) LIKE '%$filtervalues%'";

                                     //   $query = "SELECT * FROM 'order' WHERE CONCAT(name,number,email,method,address,total_products,total_price) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($mysqli, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['number']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['method']; ?></td>
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['total_products']; ?></td>
                                                    <td><?= $items['total_price']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>