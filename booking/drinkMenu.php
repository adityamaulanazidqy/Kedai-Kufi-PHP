<?php

require_once "heavyMeal.php";
require_once "coolDrink.php";
require_once "hotDrink.php";
function drinkMenu()
{
    TampilanDrink();
    $mauMakanApa = input("Pilih Jenis Makanan");
    if ($mauMakanApa == 'x') {
        Penutup();
    } else if ($mauMakanApa == 1) {
        CoolDrink();
    } else if ($mauMakanApa == 2) {
        HotDrink();
    } else {
        PenutupError();
        drinkMenu();
    }
}
