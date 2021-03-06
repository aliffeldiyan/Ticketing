<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Quadran</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        {{-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index">create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="list">list</a>
                        </li> --}}
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                        </form>
                    </ul>
                    <li style="list-style:none;" class="nav-item dropdown">
                        <a class="nav-link link-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome, {{auth()->user()->name }}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index"> Create </a></li>
                            <li><a class="dropdown-item" href="list"><img src="logo/arrow-right.svg">List</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="bg-white">
            <div class="head-container-ticket">
                <h3 style="text-align:center;">List Ticket</h3>
            </div>
            <!-- card -->
            <div class="p-1">
                4/10/2021
            </div>
            <div class="card shadow-sm" style="background-color:#EEE">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 text-center border-end border-dark">
                            <div class="small mb-2">
                                Ticket
                            </div>
                            <div>
                                12345678
                            </div>
                        </div>
                        <div class="col-2 text-center border-end border-dark">
                            <div class="small mb-2">
                                Platform
                            </div>
                            <div>
                                Mobile
                            </div>
                        </div>
                        <div class="col-3 text-center border-end border-dark">
                            <div class="small mb-2">
                                Kategori
                            </div>
                            <div>
                                Error 404
                            </div>
                        </div>
                        <div class="col-3 text-center border-end border-dark">
                            <div class="small mb-2">
                                Sub Kategori
                            </div>
                            <div>
                                Input Object
                            </div>
                        </div>
                        <div class="col-2 text-center">
                            <div class="small mb-2">
                                Status
                            </div>
                            <div>
                                <span class="badge bg-success">
                                    Approve
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-1">
                21/09/2021
            </div>
            <div class="card shadow-sm" style="background-color:#EEE">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 text-center border-end border-dark">
                            <div class="small mb-2">
                                Ticket
                            </div>
                            <div>
                                9876543210
                            </div>
                        </div>
                        <div class="col-2 text-center border-end border-dark">
                            <div class="small mb-2">
                                Platform
                            </div>
                            <div>
                                Web
                            </div>
                        </div>
                        <div class="col-3 text-center border-end border-dark">
                            <div class="small mb-2">
                                Kategori
                            </div>
                            <div>
                                Error 502
                            </div>
                        </div>
                        <div class="col-3 text-center border-end border-dark">
                            <div class="small mb-2">
                                Sub Kategori
                            </div>
                            <div>
                                Output
                            </div>
                        </div>
                        <div class="col-2 text-center">
                            <div class="small mb-2">
                                Status
                            </div>
                            <div>
                                <span class="badge bg-warning">
                                    Pending
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
