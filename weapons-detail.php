<?php
$uuid = $_GET['uuid'];
$source = "https://valorant-api.com/v1/weapons/$uuid";
$content = file_get_contents($source);
$data = json_decode($content, true);
if ($data['status'] != 200) {
    header('Location: 404-notfound.php');
}
$d = $data['data'];
$stats = $d['weaponStats'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Kelompok 8 API</title>
</head>

<body>
    <?php include_once('extend/navbar.php') ?>
    <div class="container">
        <div class="text-center">
            <h1 class="mb-4"><?= $d['displayName'] ?></h1>
            <img src="<?= $d['displayIcon'] ?>" alt="<?= $d['displayName'] ?>">
        </div>

        <?php if ($_GET['uuid'] != "2f59173c-4bed-b6c3-2191-dea9b58be9c7") : ?>
            <table class="table table-bordered mt-3" style="color:white">
                <tr>
                    <th colspan="2">Weapon Stats</th>
                </tr>
                <tr>
                    <td>Fire Rate</td>
                    <td><?= $stats['fireRate'] ?></td>
                </tr>
                <tr>
                    <td>Magizine Size</td>
                    <td><?= $stats['magazineSize'] ?></td>
                </tr>
                <tr>
                    <td>Run Speed Multiplier</td>
                    <td><?= $stats['runSpeedMultiplier'] ?></td>
                </tr>
                <tr>
                    <td>Equip Time Seconds</td>
                    <td><?= $stats['equipTimeSeconds'] ?></td>
                </tr>
                <tr>
                    <td>Reload Time Seconds</td>
                    <td><?= $stats['reloadTimeSeconds'] ?></td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td><?= $d['shopData']['cost'] ?></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><?= $d['shopData']['category'] ?></td>
                </tr>
            </table>
        <?php endif ?>


        <!-- <h1>SKINS</h1> -->
        <?php $skins = $d['skins'] ?>
        <!-- Carousel -->
        <!-- <div id="skins" class="carousel slide" data-bs-ride="carousel"> -->

        <!-- Indicators/dots -->
        <!-- <div class="carousel-indicators"> -->
        <?php $i = 0 ?>
        <?php foreach ($skins as $bla) : ?>
            <!-- <button type="button" data-bs-target="#skins" data-bs-slide-to="<?= $i ?>" class="active"></button> -->
            <?php $i++ ?>
        <?php endforeach ?>
        <!-- </div> -->

        <!-- The slideshow/carousel -->
        <!-- <div class="carousel-inner"> -->
        <?php foreach ($skins as $s) : ?>
            <!-- <div class="carousel-item active"> -->
            <!-- <img width="400px" src="<?= $s['displayIcon'] ?>" alt="<?= $s['displayName'] ?>" class="d-block mx-auto"> -->
            <!-- </div> -->
        <?php endforeach ?>
        <!-- </div> -->

        <!-- Left and right controls/icons -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#skins" data-bs-slide="prev"> -->
        <!-- <span class="carousel-control-prev-icon"></span> -->
        <!-- </button> -->
        <!-- <button class="carousel-control-next" type="button" data-bs-target="#skins" data-bs-slide="next"> -->
        <!-- <span class="carousel-control-next-icon"></span> -->
        <!-- </button> -->
        <!-- </div> -->
    </div>

        <?php include_once('extend/footer.php') ?>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>