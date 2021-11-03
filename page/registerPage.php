<!doctype html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="../style.css" rel="stylesheet">
            <title>Register Page</title>

            <style>

            body 
            {
            background-image: url("https://cf.bstatic.com/xdata/images/hotel/max1024x768/162446453.jpg?k=114020b3c1b0a62df2fdb5f1a7b8b045b7bb033356995be7b4206fcc4e203946&o=&hp=1");
            background-repeat: no-repeat;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            nav{
                background-color: #DC0000;
            }

            a{
                color: white;
            }
    </style>
        </head>
        <body>
            <nav class="navbar fixed-top">
            <div class="container">
            <a class="navbar-brand fw-bold" href="/HOTEL">THE ZURI</a>
            </div>
            </nav>
            <div class="text-dark">
            <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
            <div class="card-header fw-bold">REGISTRASI</div>
            <div class="card-body">
            <form action="../process/registerProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input class="form-control" id="name" require name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input class="form-control" id="email" require name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input class="form-control" id="username" require name="username" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control"  id="password" require name="password">
                        </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="register">Register</button>
            </div>
            </form>
            <p class="mt-2 mb-0">Sudah punya akun ? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p>
            </div>
            </div>
            </div>
            </div>
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>