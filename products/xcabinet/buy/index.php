<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Xumoye LLC - Products</title>
      <?php include("../../../include/links.php");?>
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <div class="pageRoot">
                    <div class="content">
                        <h1 style="font-size: 2.60em;" class="inline-h">Buy The xCabinet</h1>
                        <?php include("../../../include/buttongroup.php");?>
                        <a href="/products/xcabinet" class="textLink"><h2>xCabinet</h2></a>
                        <?php include("../../../include/xcabinetgroup.php");?>
                        <form action="/cart/" method="post">
                        <label for="color">Color:</label><br />
                        <select name="color" id="color" required>
                            <option value="midnight">Midnight Black</option>
                            <option value="onyx">Onxy</option>
                            <option value="vantablack">Vantablack®</option>
                        </select>
                        <div style="line-height:40%;">
                            <br />
                        </div>
                        <input type="submit" value="Add to Cart">
                    </form>
                    </div>
                    </div>
                </div>
                <?php include("../../../include/footer.php");?>
            </div>
    </body>
</html>