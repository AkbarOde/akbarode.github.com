<?php

  session_start();
  if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
  }


  require 'connection.php';

  $jurusan = mysqli_query($conn, "SELECT * FROM jurusan");

  if(!isset($_GET['id'])){
    header("mahasiswa.php");
  }
  $id = $_GET['id'];
  $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
  $mahasiswa = mysqli_fetch_assoc($sql);
  if(mysqli_num_rows($sql) < 1){
    die("Data Tidak Di Temukan...");
  }

if(isset($_POST['tubah'])){
  // ambil data dari formulir
  $id = $_POST['id'];
  $nim = $_POST['tnim'];
  $nama = $_POST['tnama'];
  $jurusan = $_POST['tjurusan'];
    // $foto    = $_FILES['foto'];

    $update = mysqli_query($conn, "UPDATE mahasiswa SET 
                                                    nim = '$nim', 
                                                    nama = '$nama', 
                                                    jurusan = '$jurusan'
                                                    
                                                    WHERE 
                                                    id = '$id'");

    $_SESSION['ubah'] = 'Data Berhasil Di Ubah';

  header("Location: mahasiswa.php");

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

    <body style="background-color: #e3e3e3;">
        <!-- Start Navbar -->
        <?php
        include "../layout/navbar.php";
        
        ?>
        <!-- End Navbar -->

        <!-- Start carousel -->

        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="card shadow">
                        <div class="card-header bg-primary">
                            <h4>Update Data Mahasiswa</h4>
                        </div>
                        <form action="" runat="server" method="POST" class="">
                            <input type="hidden" name="id" value="<?=$mahasiswa['id']?>">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="id" class="form-label">Nim</label>
                                    <input type="text" name="tnim" value="<?=$mahasiswa['nim']?>" class="form-control"
                                        id="id" readonly>
                                </div>
                                <input type="hidden" name="nimLama" id="nimLama">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="tnama" value="<?=$mahasiswa['nama']?>" class="form-control"
                                        id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <!--  -->
                                    <select class="form-select" name="tjurusan" value="<?=$mahasiswa['jurusan']?>"
                                        aria-label="Default select example">
                                        <?php while($row = mysqli_fetch_assoc($jurusan)) : ?>
                                        <option value="<?= $row['nama_jurusan']; ?>">
                                            <?= $row['nama_jurusan']; ?></option>
                                        <?php endwhile;?>
                                        <!-- <option value="3">Three</option> -->
                                    </select>
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <img src="img/<?= $mhs['foto'];?>" class="" width="40" alt=""> -->
                                <!-- <input type="file" name="foto" id="foto"> -->
                                <!-- </div>
                                <div class="mb-3"> -->
                                <!-- <form runat="server"> -->
                                <!-- <input accept="image/*" class="mt-3" type="file" name="foto" id="imgInp" />
                                    <img id="blah" width="75" src="#" alt="your image" /> -->
                                <!-- </form> -->
                                <!-- </div> -->
                            </div>
                            <div class="card-footer">
                                <div class="modal-footer position-relative">
                                    <a href="mahasiswa.php" class="btn btn-success me-2"><i
                                            class="fa-solid fa-backward"></i>
                                        Back</a>
                                    <button type="submit" name="tubah" class="btn btn-primary"><i
                                            class="fa-solid fa-save"></i>
                                        Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#A9A9A9" fill-opacity="1"
                d="M0,256L48,245.3C96,235,192,213,288,224C384,235,480,277,576,277.3C672,277,768,235,864,197.3C960,160,1056,128,1152,122.7C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <!-- end carousel -->
        <!-- Footer -->
        <footer class="bg-secondary text-white text-center pb-md-5">
            <p>Copy right <i class="bi bi-heart-fill text-danger"></i> by La Ode Muhammad Akbar </p>
        </footer>
        <!-- Akhir Footer -->
        <!-- preview foto -->
        <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }

        </script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <?php

    include "../layout/sweetalert.php";
    
    ?>

</html>
