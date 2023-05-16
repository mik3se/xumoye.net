<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Xumoye LLC - Buy The xCabinet</title>
      <?php include("../../../include/links.php");?>
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <div class="pageRoot">
                    <div class="content">
                        <h1 style="font-size: 2.60em;" class="inline-h">Buy The xCabinet</h1>
                        <?php include("../../../include/buttongroup.php");?>
                        <br />
                        <h1>Your order has been fulfilled!</h1>
                        Your total order cost is: $<?php
                        $quantity = $_POST["orderquantity"];
                        echo (15 * $quantity); ?>.<br>
                        Please do not expect this product to arrive, this is not a real order form.
                        <a href="/" class="textLink"><h2>Back home</h2></a>
                    </div>
                </div>
                <?php include("../../../include/footer.php");?>
            </div>
        </div>
    </body>
</html>