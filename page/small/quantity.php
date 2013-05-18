<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

    <head>
        <title>Zapp - Order Quantity</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" media="screen and (max-width: 767px)" />

        <!--========================== [START] LESS ==========================-->
        <link rel="stylesheet/less" type="text/css" href="/css/small/quantity.less" media="screen and (max-width: 767px)" />
        <link rel="stylesheet/less" type="text/css" href="/css/global.less" />
        <!--========================== [END] LESS ==========================-->


        <!--========================== [START] JS imports ==========================-->
        <script src="/lib/less.min.js" type="text/javascript"></script>
        <!--========================== [END] JS imports ==========================-->

    </head>

    <body zpickies-product="<?php  ?>">

        <!--***========================== [START] Phone ==========================***-->
        <div data-role="page" class="visible-phone">
        </div>

        <div data-role="footer" class="visible-phone">
        </div>
        <!--***========================== [END] Phone ==========================***-->

        <!--========================== [START] JS imports ==========================-->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            if($(window).width <= 767) {
                $.getScript("http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js");
                $.getScript("/js/small");
            } else {
                $.getScript("http://code.jquery.com/ui/1.10.3/jquery-ui.js");
            }
        </script>
        <!--========================== [END] JS imports ==========================-->
    </body>

</html>

