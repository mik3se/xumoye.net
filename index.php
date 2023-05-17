<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Xumoye LLC - Home</title>
      <?php include("include/links.php");?>
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <div class="pageRoot">
                    <div class="content">
                        <h1 style="font-size: 3em;" class="inline-h">Home</h1>
                        <?php include("include/buttongroup.php");?>
                        <p style="clear:both"><br \>We are Xumoye LLC. We are a team of acoustic engineers who want to make the acoustic world a better place.<br \></p>
                        <img src="/images/logo.png" width="480" alt="Cat wearing headphones"><br \>
                        <a href="/about" class="textLink"><h1>Meet our Founders</h1></a>
                        <?php include("include/aboutgroup.php");?>
                        <a href="/products" class="textLink"><h1>Our Products:</h1></a>
                        <a href="/products/xcabinet" class="textLink"><h2>xCabinet</h2></a>
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/e728uL3w4P4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br \>
                        <?php include("include/xcabinetgroup.php");?>
                    </div>
                </div>
                <?php include("include/footer.php");?>
            </div>
        </div>
    </body>
</html>