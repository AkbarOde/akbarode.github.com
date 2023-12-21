<?php

session_start();

if(isset($_SESSION["login"])){
  header("Location: mahasiswa.php");
  exit;
}

require 'connection.php';

// cek apakah button login sudah ditekan
if (isset($_POST['login'])) {

  // ambil username dan password yang di inputkan

    $email = $_POST['temail'];
    $password = $_POST['tpass'];

 $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  // cek username
  if(mysqli_num_rows($query) === 1){

    // cek password
    $row = mysqli_fetch_assoc($query);
    if (password_verify($password, $row["password"])){
      // set session
      $_SESSION["login"] = true;
      header("Location: mahasiswa.php");
      exit;
    }
  }
  $error = true;
}

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Keamanan Informasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f2780eb9e6.js" crossorigin="anonymous"></script>
        <!-- Start Data Table -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
        <!--Akhir Data Table -->
        <!-- My Style -->
        <link rel="stylesheet" href="../style/css/style.css">
    </head>

    <body>
        <!-- start navbar -->
        <?php

        include "../layout/navbar.php";
        
        ?>
        <!-- end navbar -->

        <!-- start login -->
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 mx-auto">
                    <div class="shadow p-3">
                        <div class="shadow-header text-center">
                            <h4>Login</h4>
                        </div>

                        <?php if(isset($error)):?>
                        <p>
                            <script>
                                alert("username atau password salah");

                            </script>
                        </p>
                        <?php endif;?>
                        <hr>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="temail"
                                    placeholder="name@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="tpass"
                                    placeholder="Password">
                            </div>
                            <div class="mb-3 d-grid gap-3">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                            </div>
                            <!-- <div class="mb-3">
                                <span>Belum Punya Akun<a href="register.php" class="btn btn-link">Klik
                                        Disini</a></span>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end login -->

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</html>
