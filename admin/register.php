<?php

session_start();
if(isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

require 'connetion.php';

if(isset($_POST["register"])){

  if(register($_POST) > 0){
    echo "<script>
      alert('user baru berhasil di tambahkan!');
      document.location = 'login.php';
      </script>";
  }else{
      echo mysqli_error($conn);
  }
    $error = true;
}

function register($data){
  global $conn;
  $username = strtolower(stripcslashes($data["username"]));
  $email = strtolower(stripcslashes($data["temail"]));
  $password = mysqli_real_escape_string($conn, $data["tpass"]);
  $password2 = mysqli_real_escape_string($conn, $data["tpass2"]);


  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' OR email ='$email'");
  if(mysqli_fetch_assoc($result)){
    echo "<script>alert('Username atau email Sudah Terdaftar');</script>";
    return false;
  }


  // cek konfirmasi password
  if($password !== $password2){
    echo "<script>
    alert('Konfirmasi Password Tidak Sesuai');
    </script>";
    return false;
  }

  // enkripsi passwordnya
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
 mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password')");


  return mysqli_affected_rows($conn);

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
                            <h4>Register</h4>
                        </div>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="temail"
                                    placeholder="name@gmail.com" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="tpass"
                                        placeholder="Masukan password" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <label for="password2">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="password2" name="tpass2"
                                        placeholder="Masukan password" required>
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-3 mt-4">
                                <button class="btn btn-primary" type="submit" name="register">Register</button>
                            </div>
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
