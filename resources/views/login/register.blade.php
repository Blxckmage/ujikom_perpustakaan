<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Perpustakaan | Register</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="./assets/css/theme.css">
</head>
<!-- End Head -->

<body>
    <main class="container-fluid w-100" role="main">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
                <a class="u-login-form py-3 mb-auto" href="index.html">
                    <img class="img-fluid" src="./assets/img/logo.png" width="160" alt="Stream Dashboard UI Kit">
                </a>

                <div class="u-login-form">
                    <form class="mb-3" action="/register" method="POST">
                        @csrf

                        <div class="mb-3">
                            <h1 class="h2">Create Your Account</h1>
                            <p class="small">Login to your dashboard with your registered email address and password.
                            </p>
                        </div>

                        <div class="form-group mb-4">
                            <label for="name">Your name</label>
                            <input id="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                                name="name" type="text" placeholder="John Doe" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Your email</label>
                            <input id="email" class="form-control rounded-top @error('email') is-invalid @enderror"
                                name="email" type="email" placeholder="john.doe@example.com" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input id="password"
                                class="form-control rounded-top @error('password') is-invalid @enderror" name="password"
                                type="password" placeholder="Enter your password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    </form>

                    <p class="small">
                        Already have an account? <a href="/sign-in">Login here</a>
                    </p>
                </div>

                <div class="u-login-form text-muted py-3 mt-auto">
                    <small><i class="far fa-question-circle mr-1"></i> If you are not able to sign up, please <a
                            href="#">contact us</a>.</small>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                <img class="img-fluid position-relative u-z-index-3 mx-5" src="./assets/svg/mockups/mockup.svg"
                    alt="Image description">

                <figure class="u-shape u-shape--top-right u-shape--position-5">
                    <img src="./assets/svg/shapes/shape-1.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-left u-shape--position-6">
                    <img src="./assets/svg/shapes/shape-2.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-right u-shape--position-7">
                    <img src="./assets/svg/shapes/shape-3.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                    <img src="./assets/svg/shapes/shape-4.svg" alt="Image description">
                </figure>
            </div>
        </div>
    </main>
</body>


<!-- Global Vendor -->
<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="./assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Initialization  -->
<script src="./assets/js/sidebar-nav.js"></script>
<script src="./assets/js/main.js"></script>

</html>
