<?php

function getProductTitle($product) {
    switch($product) {
        case "porkBurger":
            $productTitle = "Pork Burger";
            break;
        case "mushroomBurger":
            $productTitle = "Mushroom Burger";
            break;
        case "prawnBurger":
            $productTitle = "Prawn Burger";
            break;
        case "thaiSalad":
            $productTitle = "Thai Salad";
            break;
    }

    return $productTitle;
}

function getProductBasePrice($product){
    switch($product) {
        case "porkBurger":
        case "mushroomBurger":
            $basePrice = 5;
            break;
        case "prawnBurger":
            $basePrice = 7;
            break;
        case "thaiSalad":
            $basePrice = 4;
            break;
    }

    return $basePrice;
}
