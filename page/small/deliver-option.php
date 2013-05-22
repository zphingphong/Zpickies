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
            <h1>Delivery Option</h1>
            <button onclick="goToInfo()" data-role="button" type="button" data-icon="arrow-r" data-iconpos="notext" data-inline="true">
                Continue
            </button>
        </div>
        <div data-role="content" class="container-fluid">
            <form id="delivery-option-form">
                <label>How would you like to get the food?</label>
                <fieldset id="delivery-option" data-role="controlgroup" data-type="horizontal">
                    <input type="radio" name="delivery-option" id="pickup" value="pickup" checked="checked">
                    <label for="pickup"><i class="icon-men"></i><br>Pick up</label>
                    <input type="radio" name="delivery-option" id="delivery" value="delivery" disabled="true">
                    <label for="delivery"><i class="icon-automobile-car"></i><br>Delivery</label>
                </fieldset>
                <label>When should the food be ready for you?</label>
                <input id="ready-time" type="datetime-local" name="ready-time">
            </form>
            <div class="alert alert-info">
                <div class="note">We only offer order for pick up at the Summer Night Market(12631 Vulcan Way, Richmond) during the market hours (7-midnight on Fri & Sat, 7-11 on Sun) at the moment. We will offer more options soon. :-)</div>
            </div>
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
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function(){
        var current = new Date();
        var minute = current.getMinutes();
        var hours = current.getHours();
        var defaultMinutes = current.getMinutes()+30; //Add half hour
        if(defaultMinutes > 60) {
            hours++;
            defaultMinutes -= 60;
        }
        var currentFormatted = current.getFullYear() + '-' + pad((current.getMonth()+1).toString(), 2) + '-' + pad(current.getDate().toString(), 2) + 'T' + pad(hours.toString(), 2) + ':' + pad(defaultMinutes.toString(), 2);
        $('#ready-time').val(currentFormatted);
    });

    function pad (str, max) {
        return str.length < max ? pad("0" + str, max) : str;
    }

    function goToInfo(){
        console.log($('#ready-time'))
        //Set the default option to pickup
//        var currentDeliveryOption = getDeliveryOption();
//        if(!currentDeliveryOption){
//            setDeliveryOption($('input[name=delivery-option]:checked', '#delivery-option-form').val());
//        }
//        setReadyTime();
//        window.location = '/page/small/customer-info.php';
    }

    function setDeliveryOption(deliveryOption){
        window.localStorage.setItem('deliveryOption', deliveryOption);
    }

    function getDeliveryOption(){
        window.localStorage.getItem('deliveryOption');
    }

    function setReadyTime(readyTime){
//        window.localStorage.setItem('readyTime', readyTime);
    }
</script>
<!--========================== [END] JS imports ==========================-->
</body>

</html>

