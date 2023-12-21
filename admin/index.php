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

        <!--  -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />
        <link rel="stylesheet" href="../style/css/style.css">
    </head>

    <body>
        <!-- start navbar -->
        <?php

        session_start();
        include "../layout/navbar.php";
        
        ?>
        <!-- end navbar -->
        <!-- Jumbotron -->
        <section class="jumbotron text-center mt-5">

            <img src="../style/img/kelas.png" alt="akbar" width="200" class="mt-4">
            <h1 class="display-4">Teknik Informatika A</h1>
            <p class="lead">Mobile | Jaringan</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#A9A9A9" fill-opacity="1"
                    d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,80C672,107,768,181,864,224C960,267,1056,277,1152,240C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- About -->
        <section id="about">
            <div class="container mt-5">
                <div class="row fs-5">
                    <div class="col-md-4">
                        <h5 class="text-light-emphasis">Siapa Kami</h5>
                        <h4 class="text-dark fw-bold mb-4">Teknik Informatika A</h4>
                        <p> <b class="ms-3">TIA</b>, adalah himpunan atau perkumpulan mahasiswa dari kampus ITB-Stikom
                            Ambon.</p>
                        <p>
                            <span class="ms-3">Kami</span> Juga merupakan mahasiswa jurusan Teknik Informatika.
                            Kami
                            terbagi
                            menjadi 2 jurusan konsentrasi, yang mana ada anak konsentrasi Mobile & anak konsentrasi
                            Jaringan
                        </p>
                    </div>
                    <div class="col-md-8">
                        <img src="../style/img/tia01.jpeg" style="width: 600px; max-width: 100%;" alt="">
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#A9A9A9" fill-opacity="1"
                    d="M0,256L48,245.3C96,235,192,213,288,224C384,235,480,277,576,277.3C672,277,768,235,864,197.3C960,160,1056,128,1152,122.7C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Akhir About -->

        <!-- Member kelas -->
        <section id="project">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col mt-5">
                        <h5 class="text-light-emphasis">Teknik Informatika A</h5>
                        <h2 class="fw-bold">ANGGOTA KELAS</h2>
                    </div>
                </div>
                <!--  -->
                <div class="container-fluid my-5">
                    <!-- <h1 class="text-center fw-bold display-1 mb-5">Owl <span class="text-danger">Carousel</span></h1> -->
                    <div class="row">
                        <div class="col-lg-12 m-auto">
                            <div class="owl-carousel owl-theme">
                                <div class="item mb-2">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/renol.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Ketua Tingkat</h6>
                                                <h5 class="card-text fw-bold">Renol Labobar</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ode.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Wakil Ketua Tingkat</h6>
                                                <h5 class="card-text fw-bold">La Ode Muhammad Akbar</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/sil.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Prisillia Lauhenapessy</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/tami.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Riska Utami Gailea</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/illa.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Nadila Amilludin</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/norman.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Muhammad Norman Tohir</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/sam.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Samsul Bahri Rumadhan</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ari.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Ary Nuharaf</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/hafiz.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Hafiz Saifullah Romadhon</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/tedi.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Tedi Zulham Kumkelo</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ida.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Firda Adiningsi Handaru</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/fit.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Fitriani Efendi</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/tilar.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Tilar Tanassy</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ina.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Ina Rahayu Kolwow</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/nisa.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Anisa Putri Latar</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ninda.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Hiryaninda Lewaherila</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/evi.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Deselvi Y Maimina</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ridwan.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Ridwan Bin Taher</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card border-0 shadow">
                                        <img src="../style/img/ona.jpeg" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h6 class="text-light-emphasis">Anggota</h6>
                                                <h5 class="card-text fw-bold">Adriana Julia Talahatu</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="" class="btn btn-dark mb-3 mx-auto"><span class="ms-auto">Show All</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#A9A9A9" fill-opacity="1"
                    d="M0,96L80,128C160,160,320,224,480,224C640,224,800,160,960,154.7C1120,149,1280,203,1360,229.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Akhir members kelasss -->

        <!-- Member project -->
        <section id="project">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col mt-5">
                        <h5 class="text-light-emphasis">Teknik Informatika A</h5>
                        <h2 class="fw-bold">PROJECT</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="../style/img/project/portfolio-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Agency Website</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../style/img/project/portfolio-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Landing Page</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../style/img/project/portfolio-3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Dashboard Admin</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#A9A9A9" fill-opacity="1"
                    d="M0,96L80,128C160,160,320,224,480,224C640,224,800,160,960,154.7C1120,149,1280,203,1360,229.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Akhir Projeck -->

        <!-- Footer -->
        <footer class="bg-secondary text-white text-center pb-md-5 mb-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>&#169; 2023 - copyright | Made by La Ode Muhammad Akbar</p>
                    </div>
                </div>
                <!-- </div> -->
                <div class="row">
                    <div class="col mx-auto">
                        <div class="medsos-icon mb-5">
                            <a href="https://www.instagram.com/mosega_ld05/"
                                class="link-light text-decoration-none link-lg">
                                <i class="fa-brands fa-instagram fa-xl me-2"></i>
                            </a>
                            <a href="" class="link-light text-decoration-none">
                                <i class="fa-brands fa-github fa-xl me-2"></i>
                            </a>
                            <a href="" class="link-light text-decoration-none">
                                <i class="fa-brands fa-linkedin fa-xl me-2"></i>
                            </a>
                            <a href="" class="link-light text-decoration-none">
                                <i class="fa-brands fa-facebook fa-xl me-2"></i>
                            </a>
                            <a href="" class="link-light text-decoration-none">
                                <i class="fa-brands fa-twitter fa-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <p class="mt-3">See you<i class="fa-solid fa-person-running fa-lg ms-2 text-dark"></i><i
                    class="fa-solid fa-door-open fa-lg text-dark"></i></p> -->
        </footer>
        <!-- Akhir Footer -->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 15,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

        </script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</html>
