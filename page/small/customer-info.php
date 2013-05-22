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
            <a href="javascript:$('#quantity-form').submit();" data-role="button" data-icon="arrow-r" data-iconpos="notext" data-inline="true">Continue</a>
        </div>
        <div data-role="content" class="container-fluid">
            <table id="cart-table" class="table-stroke table-stripe">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="cart-body">
                </tbody>
            </table>
            <a href="/index.php" target="_self" data-role="button" type="button" data-inline="true" data-mini="true">
                <i class="icon-circleadd"></i> Add more item
            </a>
            <button onclick="removeAllFromCart()" data-role="button" type="button" data-inline="true" data-mini="true">
                <i class="icon-trash"></i> Remove all items
            </button>
            <label for="delivery-method" class="select">Please select delivery method:</label>
            <select name="delivery-method" id="delivery-method" data-mini="true">
                <option value="pickup">Pick up</option>
            </select>
            <div class="note">**Note: We only offer order for pick up at the Summer Night Market(12631 Vulcan Way, Richmond) at the moment. We will offer more options soon. :-)</div>
            <button onclick="goToInfo()" data-role="button" type="button" data-mini="true">
                <i class="icon-circleplay"></i> Continue
            </button>
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

    function removeItemFromCart(button){
        var currentIndex = $(button).parents('td').children('input').val();
        var items = getCurrentCartItems();
        items.splice(currentIndex, 1);
        var itemsJson = JSON.stringify(items);
        window.localStorage.setItem('cart', itemsJson);
        replaceCartDisplay(items);

    }

    function emptyCartDisplay(){
        $('#cart-body').empty();
    }

    function removeAllFromCart(){
        window.localStorage.removeItem('cart');
        replaceCartDisplay([]);
    }

    function displayCart(cartData){
        var cartElement = $('#cart-body');
        if(cartData.length > 0){
            for(var i = 0; i < cartData.length; i++){
                var cartItem = cartData[i];
                cartElement.append('<tr><td class="img"><img src="/img/product/medium/' + cartItem.name + '.png"></td><td class="name">' + cartItem.title + '</td><td class="qty">' + cartItem.qty + '</td><td class="total">$' + cartItem.total + '</td><td><input type="hidden" value="' + i + '"><button type="button" onclick="removeItemFromCart(this)" data-role="button" data-iconpos="notext" data-icon="minus"></button></td></tr>')
            }
            $('[data-role="button"]').not('.ui-btn').button();
        } else {
            cartElement.append('<tr><td colspan="5">Your cart is currently empty</td></tr>');
        }
    }

    function replaceCartDisplay(cartData){
        emptyCartDisplay();
        displayCart(cartData);
    }

    function getCurrentCartItems(){
        var itemsJson = window.localStorage.getItem('cart');
        if(itemsJson){
            var items = $.parseJSON(itemsJson);
            return items;
        }
        return new Array();
    }

    function addItemToCart(name, title, qty, total){
        var currentItems = getCurrentCartItems();
        var item = {};
        item.name = name;
        item.title = title;
        item.qty = qty;
        item.total = total;
        currentItems.push(item);
        var itemsJson = JSON.stringify(currentItems);
        window.localStorage.setItem('cart', itemsJson);
        displayCart(currentItems);
    }

    function goToInfo(){
        window.localStorage.setItem('deliveryOption', $('#delivery-method').val());
        window.location = '/page/small/customer-info.php';
    }

    var product = "<?php echo $product ?>";
    <?php
    if($product) {
        $total = $quantity * $basePrice;
        $title = getProductTitle($product);
        echo "addItemToCart('$product', '$title', $quantity, $total);";
    } else {
        echo "displayCart(getCurrentCartItems());";
    }
    ?>

</script>
<!--========================== [END] JS imports ==========================-->
</body>

</html>

