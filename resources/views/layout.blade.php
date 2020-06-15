<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" crossorigin="anonymous">
    <title>Resto App</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="/">Resto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">List Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add">Add Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Search Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Login</a>
                    </li>
                    <li class="nav">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container" style="width:80% ;margin-left: auto; margin-right:auto;">
        @yield('content')
    </div>
    <footer class="text-center">
        Copyright &copy; 2020 Resto App.
        <br>
        Created with &hearts; by KishanDasani
    </footer>
</body>
</html>