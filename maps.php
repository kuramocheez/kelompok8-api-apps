<?php
$source = "https://valorant-api.com/v1/maps";
$content = file_get_contents($source);
$data = json_decode($content, true);
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
        <h1 class="text-center mb-3">Valorant Maps</h1>
        <div class="row">
            <?php foreach ($data['data'] as $d) : ?>
                <div class="col-4 mb-3">

                    <div class="card" style="width: 18rem;">
                        <img src="<?= $d['splash'] ?>" class="card-img-top" alt="<?= $d['displayName'] ?>">
                        <div class="card-body">
                            <h5><?= $d['displayName'] ?></h5>
                            <p class="card-text"><?= $d['coordinates'] ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
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