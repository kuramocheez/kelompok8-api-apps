<?php
session_start();
include_once('extend/config.php');
$query = mysqli_query($conn, "SELECT * FROM users");

if (!isset($_SESSION['login'])) {
    header('Location:login.php');
}
$source = "api/member.json";
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

    <title>Kelompok 8 API</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<embed>
<?php include_once('extend/navbar.php') ?>

<div class="container">
    <div class="text-center">
        <img src="img/valo.png" alt="Valorant Logo" class="img-fluid mt-3" width="600px">
        <ul class="menu mt-4">
            <li><a href="agents.php">Agents</a></li>
            <li><a href="weapons.php">Weapons</a></li>
            <li><a href="maps.php">Maps</a></li>
        </ul>
        <a class="mb-5" href="https://dash.valorant-api.com/" target="_BLANK">API: https://dash.valorant-api.com/</a>

        <?php
        if ($_SESSION['login']['token'] == "662bb734d57d22fd3da152b5ffe04014") {
        ?>
            <h2 class="mt-5">User</h2>
            <table class="table table-bordered mt-3" style="color: white; text-align:left">
                <tr>
                    <td>Id</td>
                    <td>Username</td>
                    <td>Password</td>
                </tr>
                <?php
                    while ($result = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?= $result['id'] ?></td>
                    <td><?= $result['username'] ?></td>
                    <td><?= $result['password'] ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        <?php
        }
        ?>

        <h2 class="mt-5">Our Team</h2>
        <div class="row">
            <?php foreach ($data['member'] as $member) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $member['picture'] ?>" class="card-img-top" alt="<?= $member['name'] ?>">
                        <div class="card-body">
                            <h5><?= $member['name'] ?></h5>
                            <p class="card-text"><?= $member['nim'] ?></p>
                        </div>
                    </div>
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