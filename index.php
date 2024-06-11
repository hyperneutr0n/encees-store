<?php
include "arraydata.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnCeEs Store</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th rowspan="2">sku</th>
                <th rowspan="2">merk</th>
                <th rowspan="2">model</th>
                <th rowspan="2">harga</th>
                <th rowspan="2">url</th>
                <th colspan="4">spesifikasi</th>
            </tr>
            <tr>

                <th>ram</th>
                <th>internal</th>
                <th>jaringan</th>
                <th>baterai</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smartphones as $hape) { ?>

                <tr>
                    <td><?= $hape["sku"] ?></td>
                    <td><?= $hape["merk"] ?></td>
                    <td><?= $hape["model"] ?></td>
                    <td><?= numfmt_format_currency($fmt, $hape["harga"], "IDR") ?></td>
                    <td><?= $hape["url_gambar"] ?></td>
                    <td><?= $hape["spec"]["ram"] ?></td>
                    <td><?= $hape["spec"]["internal"] ?></td>
                    <td><?= $hape["spec"]["jaringan"] ?></td>
                    <td><?= $hape["spec"]["baterai"] ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

</body>

</html>