<?php

function saveOrder($name, $orderDetails)
{
    $filename = "orders.txt";

    $data = date('Y-m-d H:i:s') . " - Customer: " . $name . " - Order: " . $orderDetails . PHP_EOL;

    // Menyimpan data pesanan ke dalam file teks
    file_put_contents($filename, $data, FILE_APPEND);
}
