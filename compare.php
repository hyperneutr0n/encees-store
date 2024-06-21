<?php
include "arraydata.php";
if (!isset($_POST['select'])) {
    header("Location:index.php");
    exit();
} else {
    $selected_phone = $_POST['select'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <div class="img-logo">
                    <img src="assets/ncs.jpg" alt="NCS">
                </div>
                <div class="store-name">
                    <h2>ENCEES STORE</h2>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="cards">
                <?php
                foreach ($selected_phone as $index_hape) {
                    $combined_name = strtolower($smartphones[$index_hape]['merk'] . "-" . preg_replace('/\s+/', '-', $smartphones[$index_hape]['model']));
                ?>
                    <div class="card">
                        <img src=<?= $smartphones[$index_hape]["url_gambar"] ?> alt=<?= $combined_name ?>>
                        <div class="phone-info">
                            <h2><?= $smartphones[$index_hape]["merk"] ?></h2>
                            <h3><?= $smartphones[$index_hape]["model"] ?></h3>
                            <p><?= numfmt_format_currency($fmt, $smartphones[$index_hape]["harga"], "IDR") ?></p>
                            <p>RAM : <?= $smartphones[$index_hape]["spec"]["ram"] ?></p>
                            <p>Jaringan : <?= $smartphones[$index_hape]["spec"]["jaringan"] ?></p>
                            <p>Baterai : <?= $smartphones[$index_hape]["spec"]["baterai"] ?></p>
                            <p>Storage : <?= $smartphones[$index_hape]["spec"]["internal"] ?></p>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
            <div class="clearfix"></div>
            <br>
            <a href="index.php">&lt;&lt; Kembali</a>
        </div>
    </div>
</body>

</html>