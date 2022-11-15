<?php
session_start();

  // session_destroy();
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <a href="product.php">
  <button  class="btn btn-outline-primary ms-5 mt-5" >
   GO BACK TO PRODUCT
  </button>
</a>
  <div class="container  mt-5">
    <div class="row">
      <div class="col-lg-12 text-center rounded bg-light ">
        <h1 class='mt-5 me-5'>My Cart</h1>
        <div class="col-lg-8">
          <table class="table ms-5 mt-5 text-center ">
            <thead>
              <tr>
                <th scope="col">S N </th>
                <th scope="col">Item Name </th>
                <th scope="col"> Item Price</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $total = 0;
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                  $sn = $key + 1;
                  $total += $value['Price'];
                  echo "
        <tr>  
        <td>$sn</td> 
        <td> $value[Item_Name]</td>
        <td> $value[Price] </td>
        <form action='rendercart.php' method='POST'>
        <td>  <button name='remove' class= ' button btn-sm btn-outline-danger'> Remove </td>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </tr> ";

                }
              }
              ?>


            </tbody>
          </table>

        </div>
        <div class="col-lg-4 ms-5">
          <div class="border bg-light rounded p-4">
            <h5>Total Price : <span class='text-info'>
                <?php echo $total ?>
              </span> </h5>
           
              <a href="operation.php"><button type='submit' class='btn btn-primary btn-block'>PURCHASE </button></a>
         
          </div>

        </div>
      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>