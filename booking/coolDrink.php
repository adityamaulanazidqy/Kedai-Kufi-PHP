<?php

function CoolDrink()
{
    TampilanCoolDrink();
    $menuHarga = [7, 5, 10, 8];
    $menuNames = ["Es Cincau", "Marimas Susu", "Es Campur", "Es Soda Gembira"];

    $mauMakanApa = input("Pilih Minuman Yang Cocok Untukmu");

    if ($mauMakanApa == 'x') {
        Penutup();
    } elseif (in_array($mauMakanApa, [1, 2, 3, 4])) {
        $menuIndex = $mauMakanApa - 1;
        $menuName = $menuNames[$menuIndex];
        $menuPrice = $menuHarga[$menuIndex];

        // Get the user input for the number of orders (Menerima berapa pesanan si klien yang berjeniskan integer)
        $mauBerapa = getInputInteger("Mau Pesan Berapa $menuName: ");

        // Proses pemesanan
        $whatYourName = (string) input("Siapa Namamu");
        $name = $whatYourName;
        $orderDetails = "$mauBerapa $menuName";
        // Panggil fungsi untuk menyimpan data pemesanan
        saveOrder($name, $orderDetails);

        $totalHarga = $menuPrice * $mauBerapa;
        echo "Kamu Pesan $orderDetails. Jadi Totalnya Adalah : $totalHarga k" . PHP_EOL;

        require_once "helper/LoadingProsses.php";
        for ($i = 0; $i <= 100; $i++) {
            usleep(10000); // Delay untuk mensimulasikan proses
            printProgress($i, ' Processing: ', '▓', '░');
        }

        $mauLagi = (string) input("Mau Pesan Lagi? y/n");
        if ($mauLagi == 'y') {
            AwalCoffe();
        } elseif ($mauLagi == 'n') {
            penutup();
        } else {
            PenutupError();
        }
    } else {
        PenutupError();
        CoolDrink();
    }
}
