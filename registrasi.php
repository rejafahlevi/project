<!doctype html>
<html>
    <head>
        <title> REGISTRASI </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b><h2>REJA   |    </h2></b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    
    </head>
    <body>
        <div class="card mb-4">
        <div class="card-fluid text-white bg-dark mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="Neko full.jpg" class="img-fluid rounded-start" alt="Login">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <h1><center><b>R E G I S T R A S I</b></center></h1>
            <form action="simpan.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" name="username" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                    Ulangi
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Register</button>
            </form>
            </div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>