<?php
$uuid = $_GET['uuid'];
$source = "https://valorant-api.com/v1/agents/$uuid";
$content = file_get_contents($source);
$data = json_decode($content, true);
if ($data['status'] != 200) {
    header('Location: 404-notfound.php');
}
$d = $data['data'];
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
            <!-- Carousel -->
            <div id="agent" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#agent" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#agent" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#agent" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img width="400px" src="<?= $d['displayIcon'] ?>" alt="Breach" class="d-block mx-auto">
                    </div>
                    <div class="carousel-item">
                        <img width="400px" src="<?= $d['fullPortrait'] ?>" alt="Breach" class="d-block mx-auto">
                    </div>
                    <div class="carousel-item">
                        <img width="400px" src="<?= $d['fullPortraitV2'] ?>" alt="Breach" class="d-block mx-auto">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#agent" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#agent" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <p class="mt-2"><?= $d['description'] ?></p>

            <?php
            $role = $d['role'];
            $abilities = $d['abilities'];
            ?>
            <h1>Role</h1>
            <img src="<?= $role['displayIcon'] ?>" alt="<?= $role['displayName'] ?>">
            <h3><?= $role['displayName'] ?></h3>

            <h1 class="mt-5 mb-3">Abilities</h1>
            <div class="row">
                <?php foreach ($abilities as $a) : ?>
                    <div class="col-3">
                        <h3><?= $a['slot'] ?></h3>
                        <img width="50px" src="<?= $a['displayIcon'] ?>" alt="">
                        <h4><?= $a['displayName'] ?></h4>
                        <p><?= $a['description'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>


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