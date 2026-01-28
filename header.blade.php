<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Gym, Fitness, Workout">
    <meta name="description" content="Gym Website Template">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{ asset('frontend/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS (If not included inside style.min.css) -->
    <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet">
</head>

<body class="bg-white">

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">
                    Gymnast
                </h1>
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
                    <a href="{{ url('/feature') }}" class="nav-item nav-link">Our Features</a>
                    <a href="{{ url('/class') }}" class="nav-item nav-link">Classes</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="{{ url('/blog') }}" class="dropdown-item">Blog Grid</a>
                        </div>
                    </div>

                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Content -->
    <div class="container mt-5">
        <!-- <h2 class="text-center">Welcome to Gymnast</h2> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>
