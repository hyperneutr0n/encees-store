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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
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
            <div class="form">
                <form action="compare.php" method="post">
                    <?php $counter = 0;
                    foreach ($smartphones as $hape) {
                        $combined_name = strtolower($hape['merk'] . "-" . preg_replace('/\s+/', '-', $hape['model']));
                    ?>
                        <div class="cards">
                            <div class="card">
                                <img src=<?= $hape["url_gambar"] ?> alt=<?= $combined_name ?>>
                                <div class="phone-info">
                                    <h2><?= $hape["merk"] ?></h2>
                                    <h3><?= $hape["model"] ?></h3>
                                    <p><?= numfmt_format_currency($fmt, $hape["harga"], "IDR") ?></p>
                                </div>
                                <div class="checkboxes">
                                    <input type="checkbox" name="select[]" class="checkbox" id=<?= $combined_name ?> value=<?= $counter++ ?>>
                                    <label for="select[]">Pilih</label>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <div class="clearfix"></div>
                    <div class="button-container">
                        <button type="submit" class="btnCompare" disabled>BANDINGKAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>