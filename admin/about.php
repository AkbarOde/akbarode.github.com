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

        session_start();
        include "../layout/navbar.php";
        
        ?>
        <!-- end navbar -->
        <!-- Jumbotron -->
        <section class="jumbotron text-center mt-5">
            <div class="row">
                <div class="col mt-5 ms-5">
                    <h1 class="display-5 mt-5">La Ode Muhammad Akbar</h1>
                    <p class="lead">Collage Studend | Web Dev | Content Creator</p>
                </div>
                <div class="col mb-5">
                    <img src="../style/img/akbar.png" alt="akbar" width="300" class="rounded-circle img-thumbnail mt-4">
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#A9A9A9" fill-opacity="1"
                    d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,80C672,107,768,181,864,224C960,267,1056,277,1152,240C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- About -->
        <section id="about">
            <div class="container">
                <div class="row text-center mb-3 mt-3">
                    <div class="col">
                        <h2>About Me</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat inventore deleniti placeat
                            ea
                            aut quasi, autem sequi in at facere.</p>
                    </div>
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor est laudantium ratione tempore
                            ex
                            excepturi praesentium. Vel perferendis rem impedit explicabo quos labore temporibus?
                            Consectetur!</p>
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

        <!-- Projeck -->
        <section id="project">
            <div class="container">
                <div class="row text-center mb-3 mt-3">
                    <div class="col">
                        <h2>My Project</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/coffe.png" class="card-img-top" alt="project1">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/coffe.png" class="card-img-top" alt="project2">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/coffe.png" class="card-img-top" alt="project3">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/coffe.png" class="card-img-top" alt="project4">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/coffe.png" class="card-img-top" alt="project5">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
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

        <!-- Contact -->
        <section id="contact">
            <div class="container">
                <div class="row text-center mb-3 mt-3">
                    <div class="col">
                        <h2>Contact Me</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="nama_lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Ulasan & Tanggapan</label>
                                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="kirim">kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#A9A9A9" fill-opacity="1"
                    d="M0,64L40,96C80,128,160,192,240,202.7C320,213,400,171,480,160C560,149,640,171,720,170.7C800,171,880,149,960,144C1040,139,1120,149,1200,138.7C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Akhir Contact -->

        <!-- Footer -->
        <footer class="bg-secondary text-white text-center pb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col mt-3">
                        <p>&#169; 2023 - copyright | Made by La Ode Muhammad Akbar</p>
                    </div>
                </div>
            </div>
            <div class="col mx-auto">
                <div class="medsos-icon">
                    <a href="" class="link-light text-decoration-none link-lg">
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
            <div>
            </div>
            <!-- <p class="mt-3">See you<i class="fa-solid fa-person-running fa-lg ms-2 text-dark"></i><i
                    class="fa-solid fa-door-open fa-lg text-dark"></i></p> -->
        </footer>
        <!-- Akhir Footer -->
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</html>
