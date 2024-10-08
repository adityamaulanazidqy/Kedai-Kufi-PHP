<?php

function snack()
{
    $menuItems = [
        ["Potato Chiken", 6],
        ["Hypitos Barbeqy", 8],
        ["Nastar Vanilla", 4],
        ["Nabati Cheesy", 10],
    ];

    TampilanSnack();

    $mauMakanApa = getInputInteger("Pilih Jenis Makanan :");

    if ($mauMakanApa == 'x') {
        Penutup();
        return;
    }

    if ($mauMakanApa >= 1 && $mauMakanApa <= count($menuItems)) {
        $menuIndex = $mauMakanApa - 1;
        $menuName = $menuItems[$menuIndex][0];
        $menuPrice = $menuItems[$menuIndex][1];

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
        snack();
    }
}
