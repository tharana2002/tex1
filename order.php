<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="css/order.css"> 
  
  <style type="text/css">
  
  table{
	  font-size:10px;
	  
  }
  
  </style>
  
  <title>orders of customers</title>
  
</head>

<style>
	body {
		background-image: url("img/img3.png");
		background-position: center;
	}
</style>

<body>
  <header class="header">

   <section class="flex">


      <nav class="navbar">
      
         
      </nav>
      <div class="icons">
         <a href="search.php"><i class="fas fa-search"></i></a>
      </div>

     

   </section>

</header>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">number</th>
          <th scope="col">email</th>
          <th scope="col">method</th>
          <th scope="col">address</th>
		  <th scope="col">total_products</th>
		  <th scope="col">total_price</th>
        </tr>
      </thead>
      <tbody >
        <?php
        $sql = "SELECT * FROM `order`";
        $result = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
		<br><br>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["number"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["method"] ?></td>
			<td><?php echo $row["address"] ?></td>
			<td><?php echo $row["total_products"] ?></td>
			<td><?php echo $row["total_price"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>