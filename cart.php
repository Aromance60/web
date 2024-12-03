<?php
include "includes/head.php"
?>

<body>

  <div class="site-wrap">


    <?php
    include "includes/header.php"
    ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Aromance</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Carrito</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form action="cart.php" class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($_SESSION['cart'])) {
                    $data = get_cart();
                    delete_from_cart();
                    $num = sizeof($data);
                    for ($i = 0; $i < $num; $i++) {
                      if (isset($data[$i])) {
                  ?>
                        <tr>
                          <td class="product-thumbnail">
                            <img src="images/<?php echo $data[$i][0]['item_image'] ?>" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black"><?php echo $data[$i][0]['item_title'] ?></h2>
                          </td>
                          <td>$<?php echo $data[$i][0]['item_price'] ?></td>
                          <td><?php echo $_SESSION['cart'][$i]['quantity'] ?></td>
                          <td>$<?php echo ($data[$i][0]['item_price'] * $_SESSION['cart'][$i]['quantity']) ?></td>
                          <td><a href="cart.php?delete=<?php echo $data[$i][0]['item_id'] ?>" class="btn btn-primary height-auto btn-sm">Eliminar</a></td>
                        </tr>
                    <?php }
                    } ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col pl-5">
            <div class="row justify-content-end">
                <div class="row">
                  <div class="col-md-6">
                    <button class="btn btn-añadir btn-lg" onclick="window.location='store.php'">Continuar comprando</button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-añadir btn-lg" onclick="window.location='checkout.php'">Seguir con la compra</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php


                  } else {
  ?>
    <h1 style="text-align: center; color:Red; ">Tu carrito esta vacio</h1>
    <img style="width:46rem; margin-left: 330px; margin-bottom:20px;" src="images/nocart.png" alt="">
  <?php
                  }
                  include "includes/footer.php"
  ?>
  </div>
</body>

</html>