<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

    <head>
        <title>Zapp - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" media="screen and (min-width: 768px)" />
        <link rel="stylesheet" type="text/css" href="/css/jquery-themes/zapp.min.css" media="screen and (max-width: 767px)" />
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" media="screen and (max-width: 767px)" />
<!--        <link rel="stylesheet" type="text/css" href="/img/icon/jquery-mobile-icons/original/jqm-icon-pack.css" media="screen and (max-width: 767px)" />-->
        <link rel="stylesheet" type="text/css" href="/img/icon/whhg-font/css/whhg.css" media="screen and (max-width: 767px)" />

        <!--========================== [START] LESS ==========================-->
        <link rel="stylesheet/less" type="text/css" href="/css/small/index.less" media="screen and (max-width: 767px)" />
        <link rel="stylesheet/less" type="text/css" href="/css/global.less" />
        <!--========================== [END] LESS ==========================-->


        <!--========================== [START] JS imports ==========================-->
        <script src="/lib/less.min.js" type="text/javascript"></script>
        <!--========================== [END] JS imports ==========================-->

    </head>

    <body>

        <!--***========================== [START] Phone ==========================***-->
        <div class="visible-phone">
            <div data-role="page">
                <div data-role="header" data-position="fixed">
                    <div id="logo-container">
                        <a href="/">Hello! Welcome to <img id="logo" src="/img/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div data-role="content" class="container-fluid">
                    <a href="/page/small/quantity.php?product=porkBurger" data-transition="slide" data-ajax="false">
                        <div id="pork-burger" class="row-fluid">
                            <div class="span6">
                                <img src="/img/product/small/porkBurger.png" alt="Sticky Rice Pork Burger">
                            </div>
                            <div class="span6">
                                <div class="row-fluid product-icon">
                                    <img src="/img/icon/small/pork.png" alt="Sticky Rice Pork Burger Icon">
                                </div>
                                <div class="row-fluid product-name">
                                    Pork
                                </div>
                            </div>
                        </div>
                    </a>
    <!--                <div id="beef-burger" class="row-fluid">-->
    <!--                    <div class="span6">-->
    <!--                        <div class="row-fluid product-icon">-->
    <!--                            <img src="/img/icon/small/beef.png" alt="Sticky Rice Beef Burger Icon">-->
    <!--                        </div>-->
    <!--                        <div class="row-fluid product-name">-->
    <!--                            Beef-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="span6">-->
    <!--                        <img src="/img/product/small/beefBurger.png" alt="Sticky Rice Beef Burger">-->
    <!--                    </div>-->
    <!--                </div>-->
                    <a href="/page/small/quantity.php?product=prawnBurger" data-transition="slide" data-ajax="false">
                        <div id="prawn-burger" class="row-fluid">
                            <div class="span6">
                                <div class="row-fluid product-icon">
                                    <img src="/img/icon/small/prawn.png" alt="Sticky Rice Prawn Burger Icon">
                                </div>
                                <div class="row-fluid product-name">
                                    Prawn
                                </div>
                            </div>
                            <div class="span6">
                                <img src="/img/product/small/prawnBurger.png" alt="Sticky Rice Prawn Burger">
                            </div>
                        </div>
                    </a>
                    <a href="/page/small/quantity.php?product=mushroomBurger" data-transition="slide" data-ajax="false">
                        <div id="mushroom-burger" class="row-fluid">
                            <div class="span6">
                                <img src="/img/product/small/mushroomBurger.png" alt="Sticky Rice Mushroom Burger">
                            </div>
                            <div class="span6">
                                <div class="row-fluid product-icon">
                                    <img src="/img/icon/small/mushroom.png" alt="Sticky Rice Pork Mushroom Icon">
                                </div>
                                <div class="row-fluid product-name">
                                    Mushroom
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/page/small/quantity.php?product=thaiSalad" data-transition="slide" data-ajax="false">
                        <div id="thai-salad" class="row-fluid">
                            <div class="span6">
                                <div class="row-fluid product-icon">
                                    <img src="/img/icon/small/salad.png" alt="Thai Salad Icon">
                                </div>
                                <div class="row-fluid product-name">
                                    Thai Salad
                                </div>
                            </div>
                            <div class="span6">
                                <img src="/img/product/small/thaiSalad.png" alt="Thai Salad">
                            </div>
                        </div>
                    </a>
                </div>
                <div data-role="footer" data-position="fixed">
                    <div data-role="navbar">
                        <ul>
                            <li>
                                <a href="/page/small/cart.php">
                                    <div class="row">
                                        <i class="icon-shopping-cart"></i>
                                    </div>
                                    <div class="row">
                                        Cart
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/page/small/history.php">
                                    <div class="row">
                                        <i class="icon-time"></i>
                                    </div>
                                    <div class="row">
                                        History
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/page/small/find-us.php">
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
        </script>
        <!--========================== [END] JS imports ==========================-->
    </body>

</html>

