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
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <div class="img-logo">
                    <img src="https://picsum.photos/100/100" alt="picsum">
                </div>
                <div class="store-name">
                    <h2>ENCEES STORE</h2>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="form">
                <form action="compare.php" method="post">
                    <?php foreach ($smartphones as $hape) {
                        $combined_name = strtolower($hape['merk'] . "-" . preg_replace('/\s+/', '-', $hape['model']));
                    ?>

                        <div class="card">
                            <img src=<?= $hape["url_gambar"] ?> alt=<?= $combined_name ?>>
                        </div>

                    <?php } ?>
                </form>
            </div>

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
                    <?php foreach ($smartphones as $hape) {
                        $combined_name = strtolower($hape['merk'] . "-" . preg_replace('/\s+/', '-', $hape['model']));
                    ?>

                        <tr>
                            <td><?= $hape["sku"] ?></td>
                            <td><?= $hape["merk"] ?></td>
                            <td><?= $hape["model"] ?></td>
                            <td><?= numfmt_format_currency($fmt, $hape["harga"], "IDR") ?></td>
                            <td><img src=<?= $hape["url_gambar"] ?> alt=<?= $combined_name ?>></td>
                            <td><?= $hape["spec"]["ram"] ?></td>
                            <td><?= $hape["spec"]["internal"] ?></td>
                            <td><?= $hape["spec"]["jaringan"] ?></td>
                            <td><?= $hape["spec"]["baterai"] ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>