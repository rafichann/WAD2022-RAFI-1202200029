<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Home</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="product">Mycar</a>
                            
                        </li>
                        @endauth
                        @auth
                        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                        @endauth
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h1>Selamat Datang  Di Showroom Rafi</h1>
                    <p class="mb-5">#JualBeliMobil? Gampang!</p>
                    @auth
                    <a href="product" class="btn btn-primary p-2 px-4 mb-5">MyCar</a>
                    @endauth
                    <div>
                        <img src="https://drive.google.com/file/d/1SAhdBEA3gVNq8C5q5lwK_QKkTHP-eSGv/view?usp=sharing" alt="Logo" height="32" width="auto">
                        <span class="px-3">Muhammad Rafi_1202200029</span>
                    </div>
                </div>
                <div class="col">
                    <img src="https://i.gifer.com/AR9s.gif" class="img-fluid">
                </div>
            </div>
        </div>
    </body>
</html>