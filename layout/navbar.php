<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Akbar La Ode | TI-5a</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link me-3 active" aria-current="page" href="index.php">Home</a>
                <!-- <a class="nav-link active" href="about.php">Programmer</a> -->
                <a class="nav-link me-3 active" href="mahasiswa.php">Mahasiswa</a>
                <!-- <li class="nav-item dropdown"> -->
                <?php
                    
                    if(!isset($_SESSION['login'])):
                    
                    ?>
                <a class="btn btn-primary" href="login.php">Login</a></li>
                <!-- <a class="nav-link active" href="register.php">daftar</a></li> -->
                <?php

                    endif;
                    
                    ?>
                <?php
                    
                    if(isset($_SESSION['login'])):
                    
                    ?>
                <a type="button" class="nav-link active alertOut" href="logout.php">Logout<i
                        class="fa-solid fa-right-from-bracket ms-3"></i></a>
                <?php

                    endif;
                    
                    ?>

                <!-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                    </ul>
                </li> -->
            </div>
        </div>
    </div>
</nav>

<!-- Start Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Akbar La Ode | TI-5a</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="mahasiswa.php">Mahasiswa</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto gap-2"> -->
<!-- <li class="nav-item">
                            <a type="button" class="nav-link btn bg-primary active" href="login.php">Login</a>
                        </li> -->

<!-- <li class="nav-item">

                </li>

            </ul>
        </div>
    </div>
</nav> -->
<!-- End Navbar -->
