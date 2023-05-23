<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Xumoye LLC - Buy The xCabinet</title>
      <?php include("../include/links.php");?>
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <div class="pageRoot">
                    <div class="content">
                        <h1 style="font-size: 2.60em;" class="inline-h">Shopping Cart</h1>
                        <?php include("../include/buttongroup.php");?>
                        <br />
                        <h1>View your Shopping Cart</h1>
                        <a href="/products/xcabinet/" class="textLink"><h2 style="padding: 0pt; margin: 2pt;">xCabinet</h2></a>
                        <span>Quantity: <?php
                        $quantity = isset($_POST["orderquantity"]) ? $_POST["orderquantity"] : 0;
                        echo ($quantity);
                        session_start();
                        $_SESSION['quantity'] = $quantity; ?></span><br />
                        <span>Color: Black</span>
                        <div style="line-height:40%;">
                            <br />
                        </div>
                        <a href="/cart/checkout/"><button>Checkout</button></a>
                    </div>
                </div>
                <?php include("../include/footer.php");?>
            </div>
        </div>
    </body>
</html>
