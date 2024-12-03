<?php
include "includes/head.php";
?>

<body>
    <div class="site-wrap">
        <?php include "includes/header.php"; ?>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="index.php">Aromance</a>
                        <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Tienda</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <?php
                    // Obtener los resultados de búsqueda
                    $data = search();

                    if ($data != "no result" && !empty($data)) {
                        // Mostrar los resultados de búsqueda
                        foreach ($data as $item) {
                            renderProductItem($item);
                        }
                    } else {
                        // Mostrar todos los productos si no hay resultados de búsqueda
                        $data = all_products();

                        if (!empty($data)) {
                            foreach ($data as $item) {
                                renderProductItem($item);
                            }
                        } else {
                            // Mostrar un mensaje si no hay productos disponibles
                            echo '<div class="text-center col-12">';
                            echo '<img class="img-fluid" style="margin-top: -90px;" src="images/1.gif" alt="No hay productos">';
                            echo '</div>';
                        }
                    }

                    /**
                     * Función para renderizar un producto
                     */
                    function renderProductItem($item)
                    {
                        ?>
                        <div class="col-sm-6 col-lg-4 text-center item mb-4">
                            <a href="product.php?product_id=<?php echo $item['item_id']; ?>">
                                <img class="rounded mx-auto d-block" style="width:270px; height:270px;" 
                                     src="images/<?php echo $item['item_image']; ?>" alt="Image">
                            </a>
                            <h3 class="text-dark">
                                <a href="product.php?product_id=<?php echo $item['item_id']; ?>">
                                    <?php
                                    echo strlen($item['item_title']) <= 20
                                        ? $item['item_title']
                                        : substr($item['item_title'], 0, 20) . "...";
                                    ?>
                                </a>
                            </h3>
                            <p class="price">$<?php echo $item['item_price']; ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php include "includes/footer.php"; ?>
    </div>
</body>
</html>
