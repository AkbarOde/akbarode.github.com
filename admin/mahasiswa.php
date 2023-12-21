<?php

session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'connection.php';

$jurusan = mysqli_query($conn, "SELECT * FROM jurusan");

if (isset($_POST['tsimpan'])) {

    if(tsimpan($_POST) > 0){
        $_SESSION['simpan'] = 'Data Berhasil Di Simpan';
        }else{
        echo mysqli_error($conn);
        }
    $error = 1;
    }

function tsimpan($data){
    global $conn;
    $nim = htmlspecialchars($data['tnim']);
    $nama = htmlspecialchars($data['tnama']);
    $jurusan = htmlspecialchars($data['tjurusan']);

    // cek nim
    $cek = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
    if (mysqli_fetch_assoc($cek)) {
    // Jika NIM sudah terdaftar, tampilkan pesan
        $_SESSION['cek'] = 'Data Gagal Di Tambahkan!';
    return 0;
    }
    
    $insert= "INSERT INTO mahasiswa VALUES('', '$nim', '$nama', '$jurusan')";
    mysqli_query($conn, $insert);

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

        <!-- Sweetaler -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- My Style -->
        <link rel="stylesheet" href="../style/css/style.css">
    </head>

    <body>
        <!-- start navbar -->
        <?php

        include "../layout/navbar.php";
        
        ?>
        <!-- end navbar -->

        <!-- Start Table -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card shadow mt-3">
                        <div class="card-header bg-primary position-relative">
                            <h5><b>Data Mahasiswa</b></h5>
                        </div>
                        <div class="card-body col-auto">
                            <div class="table-responsive">
                                <!-- start table -->
                                <table id="tableCariData"
                                    class="table table-striped table-hover table-bordered text-center"
                                    style="width:100%">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalTambah"
                                        class="btn btn-success mb-3">Add Data<i
                                            class="fa-solid fa-plus-circle ms-2"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalTambah" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST" class="">

                                                        <div class="-header bg-dark text-light">
                                                            <!-- <h6>Masukan Data</h6> -->
                                                        </div>
                                                        <div class="-body">
                                                            <div class="mb-3">
                                                                <label for="id" class="form-label">Nim</label>
                                                                <input type="text" name="tnim" class="form-control"
                                                                    id="id" placeholder="Masukan Nim" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="text" name="tnama" class="form-control"
                                                                    id="nama" placeholder="Masukan Nama" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jurusan" class="form-label">Jurusan</label>
                                                                <!-- <input type="text" name="tjurusan" class="form-control" -->
                                                                <!-- id="jurusan" placeholder="Masukan Jurusan"> -->
                                                                <select class="form-select" id="jurusan" name="tjurusan"
                                                                    aria-label="Default select example" required>
                                                                    <?php while($row = mysqli_fetch_assoc($jurusan)) : ?>
                                                                    <option value="<?= $row['nama_jurusan']; ?>">
                                                                        <?= $row['nama_jurusan']; ?></option>
                                                                    <?php endwhile;?>
                                                                </select>

                                                            </div>
                                                            <div class="-footer bg-dark"></div>
                                                        </div>
                                                        <div class="modal-footer position-relative">
                                                            <button type="submit" name="tsimpan"
                                                                class="btn btn-success">Simpan</button>
                                                            <button type="button" name="treset"
                                                                class="btn btn-warning">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <thead>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php

                                        // include("db_connection.php");
                                      // persiapan menampilkan data
                                      $no = 1;
                                      // jika memulai dengan angka besar
                                    //   $read = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nim DESC");
                                      // jika memulai dengan angka kecil
                                      $read = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id ASC");
                                      while($data = mysqli_fetch_array($read)):
                                      
                                      ?>
                                        <tr>
                                            <!-- menampilkan data menggunakan array -->
                                            <td><?= $no++?></td>
                                            <td><?=$data['nim']?></td>
                                            <td><?=$data['nama']?></td>
                                            <td><?=$data['jurusan']?></td>
                                            <td>
                                                <a href="update.php?id=<?= $data['id']?>"
                                                    class="btn btn-warning alertUbah"><i
                                                        class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="delete.php?id=<?= $data['id'];?>"
                                                    class="btn btn-danger alertHapus"><i class="fa-solid fa-trash"></i>
                                                </a>
                                                <!-- <a href="details.php" class="btn btn-success"><i
                                                        class="fa-solid fa-paperclip"></i></a>
                                                <a href="nilai.php" class="btn btn-info"><i
                                                        class="fa-solid fa-address-book"></i></a> -->
                                            </td>
                                        </tr>
                                        <?php
                                        endwhile;
                                        
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <div class="card-footer bg-primary"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End conent -->
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    <script>
        new DataTable('#tableCariData');

    </script>

    <?php if(@$_SESSION['simpan']){ ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Data Berhasil Di Tambahkan',
            timer: 3000,
            showConfirmButton: false
        })

    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['simpan']); } ?>

    <?php if(@$_SESSION['cekNim']){ ?>
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Gagal',
            text: 'Data Gagal Di Ubah',
            timer: 3000,
            showConfirmButton: false
        })

    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['cekNim']); } ?>

    <?php if(@$_SESSION['cek']){ ?>
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Gagal',
            text: 'Data Gagal Di Tambahkan',
            timer: 3000,
            showConfirmButton: false
        })

    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['cek']); } ?>

    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
    <?php if(@$_SESSION['hapus']){ ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Data Berhasil Di Hapus',
            timer: 3000,
            showConfirmButton: false
        })

    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['hapus']); } ?>


    <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
    <script>
        $('.alertHapus').on('click', function () {
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin hapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "No"

            }).then(result => {
                //jika klik ya maka arahkan ke delete.php
                if (result.isConfirmed) {
                    window.location.href = getLink
                }
            })
            return false;
        });

    </script>
    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
    <?php

    include "../layout/sweetalert.php";
    
    ?>


    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
    <?php if(@$_SESSION['ubah']){ ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Data Berhasil Di ubah',
            timer: 3000,
            showConfirmButton: false
        })

    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['ubah']); } ?>


    <!-- di bawah ini adalah script untuk konfirmasi ubah data dengan sweet alert  -->
    <script>
        $('.alertUbah').on('click', function () {
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin ubah data?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "No"

            }).then(result => {
                //jika klik ya maka arahkan ke delete.php
                if (result.isConfirmed) {
                    window.location.href = getLink
                }
            })
            return false;
        });

    </script>

</html>
