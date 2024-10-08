<?php
require_once "heavyMeal.php";
require_once "snack.php";
require_once "helper/Bantuan.php";
function FoodMenu()
{
    TampilanFood();
    $mauMakanApa = input("Pilih Jenis Makanan");
    if ($mauMakanApa == 'x') {
        Penutup();
    } else if ($mauMakanApa == 1) {
        HeavyMeal();
    } else if ($mauMakanApa == 2) {
        snack();
    } else {
        PenutupError();
        FoodMenu();
    }
}
