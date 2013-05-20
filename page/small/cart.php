<?php
require_once('../util.php');

$product = "";

if($_POST && $_POST['product']){
    $product = $_POST['product'];
    $productTitle = getProductTitle($product);
    $basePrice = getProductBasePrice($product);
    $quantity = $_POST['quantity'];
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

    <head>
        <title>Zapp - Cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/css/jquery-themes/zapp.min.css" media="screen and (max-width: 767px)" />
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" media="screen and (max-width: 767px)" />
        <link rel="stylesheet" type="text/css" href="/img/icon/whhg-font/css/whhg.css" media="screen and (max-width: 767px)" />

        <!--========================== [START] LESS ==========================-->
        <link rel="stylesheet/less" type="text/css" href="/css/small/cart.less" media="screen and (max-width: 767px)" />
        <link rel="stylesheet/less" type="text/css" href="/css/global.less" />
        <!--========================== [END] LESS ==========================-->


        <!--========================== [START] JS imports ==========================-->
        <script src="/lib/less.min.js" type="text/javascript"></script>
        <!--========================== [END] JS imports ==========================-->

    </head>

    <body>

        <!--***========================== [START] Phone ==========================***-->
        <div class="visible-phone">
            <div id="page-container" data-role="page" zpickies-product="<?php echo $product ?>">
                <div data-role="header" data-position="fixed">
                    <a data-rel="back" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-inline="true">Back</a>
                    <h1>My Cart</h1>
                    <a href="/page/small/checkout.php" target="_self" data-role="button">
                        Checkout <i class="icon-shoppingcartalt"></i>
                    </a>
                </div>
                <div data-role="content" class="container-fluid">
                    <div id="product-image" zpickies-product="<?php echo $product ?>">
                        <img src="/img/product/medium/<?php echo $product ?>.png" >
                    </div>
                    <form>
                        <div id="quantity-slider"><input type="range" data-highlight="true" name="quantity" id="quantity" min="1" max="100" value="1"></div>
                    </form>
                    <div id="price">
                    </div>
                </div>
                <div data-role="footer" data-position="fixed">
                    <div data-role="navbar">
                        <ul>
                            <li>
                                <a id="logo-link" href="/index.php" target="_self">
                                    <img id="logo" src="/img/logo.png" alt="Logo">
                                </a>
                            </li>
                            <li>
                                <a href="/page/small/cart.php" target="_self">
                                    <div class="row">
                                        <i class="icon-shopping-cart"></i>
                                    </div>
                                    <div class="row">
                                        Cart
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/page/small/history.php" target="_self">
                                    <div class="row">
                                        <i class="icon-time"></i>
                                    </div>
                                    <div class="row">
                                        History
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/page/small/find-us.php" target="_self">
                                    <div class="row">
                                        <i class="icon-gpsoff-gps"></i>
                                    </div>
                                    <div class="row">
                                        Find Us
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--***========================== [END] Phone ==========================***-->

        <!--========================== [START] JS imports ==========================-->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            if($(window).width() <= 767) {
                $.getScript("http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js");
            } else {
                $.getScript("http://code.jquery.com/ui/1.10.3/jquery-ui.js");
            }

            $(function(){
                function getCurrentCartItems(){
                    var itemsJson = window.localStorage.getItem('cart');
                    if(itemsJson){
                        var items = $.parseJSON(itemsJson);
                        return items;
                    }
                    return new Array();
                }

                function addItemToCart(name, qty, total){
                    var currentItems = getCurrentCartItems();
                    var item = {};
                    item.name = name;
                    item.qty = qty;
                    item.total = total;
                    currentItems.push(item);
                    var itemsJson = JSON.stringify(currentItems);
                    window.localStorage.setItem('cart', itemsJson);
                }

                var product = "<?php echo $product ?>";
                <?php
                    if($product) {
                        $total = $quantity * $basePrice;
                        echo "addItemToCart(product, $quantity, $total);";
                    } else {
                        echo "getCurrentCartItems();";
                    }
                ?>
            });

        </script>
        <!--========================== [END] JS imports ==========================-->
    </body>

</html>
