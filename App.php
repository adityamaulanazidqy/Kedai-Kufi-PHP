<?php
require_once "helper/Order.php";
require_once "view/TampilanCoffe.php";
require_once "helper/Input.php";
require_once "helper/Bantuan.php";
require_once "booking/foodMenu.php";
require_once "booking/drinkMenu.php";
require_once "booking/fruits.php";
require_once "booking/heavyMeal.php";
require_once "booking/snack.php";
require_once "booking/CoolDrink.php";
require_once "booking/HotDrink.php";

function AwalCoffe()
{
    // Tampilan awal Coffee Mode
    pembuka();


    $pesanApa = input("Mau Pesan Apa?");
    if ($pesanApa == "x") {
        Penutup();
    } else if ($pesanApa == 1) {
        FoodMenu();
    } else if ($pesanApa == 2) {
        Fruits();
    } else if ($pesanApa == 3) {
        drinkMenu();
    } else {
        PenutupError();
        AwalCoffe();
    }
}


AwalCoffe();
