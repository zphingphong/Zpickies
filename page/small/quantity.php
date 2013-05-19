<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

    <head>
        <title>Zapp - Order Quantity</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/css/jquery-themes/zapp.min.css" media="screen and (max-width: 767px)" />
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" media="screen and (max-width: 767px)" />
        <link rel="stylesheet" type="text/css" href="/img/icon/jquery-mobile-icons/original/jqm-icon-pack.css" media="screen and (max-width: 767px)" />

        <!--========================== [START] LESS ==========================-->
        <link rel="stylesheet/less" type="text/css" href="/css/small/quantity.less" media="screen and (max-width: 767px)" />
        <link rel="stylesheet/less" type="text/css" href="/css/global.less" />
        <!--========================== [END] LESS ==========================-->


        <!--========================== [START] JS imports ==========================-->
        <script src="/lib/less.min.js" type="text/javascript"></script>
        <!--========================== [END] JS imports ==========================-->

    </head>

    <body>

        <!--***========================== [START] Phone ==========================***-->
        <div class="visible-phone">
            <div id="page-container" data-role="page" zpickies-product="<?php echo $_GET['product'] ?>">
                <div data-role="header" data-position="fixed">
                    <a href="#" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-inline="true">Back</a>
                    <h1>Quantity</h1>
                    <a href="#" data-role="button" data-icon="arrow-r" data-iconpos="notext" data-inline="true">Next</a>
                </div>
                <div data-role="content" class="container-fluid">
                    <div id="product-image" zpickies-product="<?php echo $_GET['product'] ?>">
                        <img src="/img/product/medium/<?php echo $_GET['product'] ?>.png" >
                    </div>
                    <form>
                        <div id="quantity-slider"><input type="range" data-highlight="true" name="quantity" id="quantity" min="1" max="100" value="1"></div>
                    </form>
                    <div id="price">
                    </div>
                    <div id="base-price" class="hidden"><?php
                        switch($_GET['product']) {
                            case "porkBurger":
                            case "mushroomBurger":
                                echo "5";
                                break;
                            case "prawnBurger":
                                echo "7";
                                break;
                            case "thaiSalad":
                                echo "4";
                                break;
                        }
                    ?></div>
                </div>
                <div data-role="footer" data-position="fixed">
                    <div data-role="navbar">
                        <ul>
                            <li><a id="logo-link" href="/"><img id="logo" src="/img/logo.png" alt="Logo"></a></li>
                            <li><a href="/" class="ui-btn-active">Order</a></li>
                            <li><a href="/page/small/contact-us.php">Contact Us</a></li>
                            <li><a href="/page/small/location.php">Location</a></li>
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

                function calculatePrice(){
                    $("#price").text("$" + ($("#quantity").val() * $("#base-price").html()));
                };

                calculatePrice();
                $("#quantity-slider").on("change", function(){
                        calculatePrice();
                    }
                );
            });

        </script>
        <!--========================== [END] JS imports ==========================-->
    </body>

</html>

