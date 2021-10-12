<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Fifth navbar example" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Quadran</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                  </form>
                </ul>
                <li style="list-style:none;" class="nav-item dropdown">
                    <a class="nav-link link-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome, {{auth()->user()->name }}</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index"><img src="logo/arrow-right.svg"> Create </a></li>
                        <li><a class="dropdown-item" href="#">List</a></li>
                        <li><hr class="dropdown-divider"></li>
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

          <div class="container-lg">
                <form class="form-floating" method="POST">
                    <input type="email" class="form-control" id="floatingInputInvalid" placeholder="name@example.com" value=" {{auth()->user()->email }}" readonly>
                    <label for="floatingInputInvalid">Email</label>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>Pilih Platform</option>
                          <option value="1">Web</option>
                          <option value="2">Mobile</option>
                        </select>
                        <label for="floatingSelect">Platform</label>
                      </div>
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>Pilih Kategori</option>
                          <option value="1">Eror 404</option>
                          <option value="2">Eror 502</option>
                          <option value="3">Eror API</option>
                        </select>
                        <label for="floatingSelect">Kategori</label>
                      </div>
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>Pilih Sub Kategori</option>
                          <option value="1">Input Object</option>
                          <option value="2">Output Object</option>
                          <option value="3">Get Database</option>
                        </select>
                        <label for="floatingSelect">Sub-Kategori</label>
                      </div>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Deskripsi</label>
                      </div>
        </form>
        <div class="d-grid gap-2">
            <button class="btn btn-success mt-2" type="button">Upload</button>
          </div>
          <p class="text-center"><small>*Only jpg, jpeg, png, or pdf file are allowed, Maximum size 10MB</small></p>
          <div class="d-grid gap-2">
            <button class="btn btn-info" type="button">Kirim</button>
          </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
