<?php
session_start();
$message = "";
include_once('extend/config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $check = mysqli_num_rows($query);
    if ($check == 1) {
        $data = mysqli_fetch_array($query);
        $_SESSION['login'] = $data;
        header("Location:index.php");
    } else {
        $message = "Username atau Password Salah!";
    }
}
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
    <style>
        /* body{
            margin-top: 250px;
            background-image: url('img/valo.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 50px 50px;
        } */
    </style>
</head>

<embed>


<div class="container">
    <div class="text-center mt-5">
        <img src="img/valo.png" alt="Valorant" width="100px">

        <div class="card mt-5" style="border-color:#fa4454; width:25rem;margin:auto ">
            <div class="card-header" style="background-image: linear-gradient(to right, #fa4454, #dc3d4b); color:white">
                LOGIN
            </div>
            <div class="card-body" style="background-color: rgb(29, 29, 29); color:white; text-align:left;">
                <form method="POST">
                    <div class="form-group mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button name="login" class="btn btn-primary">Login</button>
                </form>
                <?php
                if (!empty($message)) {
                ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?= $message ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


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