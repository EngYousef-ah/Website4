<nav class="navbar navbar-expand-lg  bg-dark">
    <div class="container-fluid bg-dark">
        <a class="navbar-brand text-white" href="index.php" style="font-size: 30px;">Student Website</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item mx-2">
                    <a class="nav-link text-white nv" href="create.php">Add student</a>
                </li>
            </ul>

            <?php
            if (empty($_COOKIE['user'])) { ?>
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                    <a href="register.php" id="signAndLogout"
                        class="text-white text-decoration-none px-3 py-1  rounded-4 mt-3">Register</a>
                </div>
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">

                    <a href="login.php" id="signAndLogout"
                        class="text-white text-decoration-none px-4 py-1 mx-3 rounded-4 mt-3">Login</a>
                <?php
            } else { ?>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                        <a href="logout.php" id="signAndLogout"
                            class="text-white text-decoration-none px-3 py-1  rounded-4">Logout</a>
                    </div>
                <?php  }
                ?>

                </div>
        </div>
</nav>