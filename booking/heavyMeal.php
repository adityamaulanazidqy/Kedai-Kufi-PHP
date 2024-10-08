<?php
require_once "./App.php";
require_once "helper/Bantuan.php";
function HeavyMeal()
{
    TampilanHeavyMeal();
    $menuHarga = [14, 17, 12, 8];
    $menuNames = ["Chicken bucket", "Crispy giant squid", "Bola-bola ubi", "Bakso"];

    $mauMakanApa = getInputInteger("Pilih Jenis Makanan :");

    if ($mauMakanApa == 'x') {
        Penutup();
        return;
    }

    if ($mauMakanApa >= 1 && $mauMakanApa <= count($menuNames)) {
        $menuIndex = $mauMakanApa - 1;
        $menuName = $menuNames[$menuIndex];
        $menuPrice = $menuHarga[$menuIndex];

        $mauBerapa = getInputInteger("Mau Pesan Berapa $menuName :");
        $totalHarga = $menuPrice * $mauBerapa;

        // Proses pemesanan
        $whatYourName = (string) input("Siapa Namamu");
        $name = $whatYourName;
        $orderDetails = "$mauBerapa $menuName";
        // Panggil fungsi untuk menyimpan data pemesanan
        saveOrder($name, $orderDetails);

        echo "Kamu Pesan $orderDetails. Jadi Totalnya Adalah : $totalHarga k" . PHP_EOL;

        require_once "helper/LoadingProsses.php";
        for ($i = 0; $i <= 100; $i++) {
            usleep(10000); // Delay untuk mensimulasikan proses
            printProgress($i, ' Processing: ', '▓', '░');
        }

        $mauLagi = (string) input("Mau Pesan Lagi? y/n");
        if ($mauLagi == 'y') {
            AwalCoffe();
        } else if ($mauLagi == 'n') {
            penutup();
        } else {
            PenutupError();
        }
    } else {
        PenutupError();
        HeavyMeal();
    }
}
