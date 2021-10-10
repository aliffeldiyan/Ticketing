<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Ticketing </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav>
    <div class="nav-container">
            <ul>
                <li class="list-unstyled">
                    <a href="#" class="nav-head">Quadran</a>
                </li>
                <hr class="hr-line">
                <li class="list-unstyled">
                    <a href="#" class="nav-ticket">Create Ticket</a>
                </li>
                <hr class="hr-line-ticket">
                <li style="list-unstyled">
                    <a href="#" class="nav-list">List Ticket</a>
                </li>
                <li style="list-unstyled">
                    <a href="login" class="logout" >Logout </a>
                </li>
                <a href="#"><img class="vector-btn-left" src="logo/vector-left.svg" alt=""></a>
            </ul>
    </div>
    </nav>
    <div class="head-box">
        <input class="search-border" type="text" placeholder="Search For...">
        <div class="btn-search"></div>
        <img class="search-btn" src="logo/search.svg" alt="">
        <img class="mail-btn" src="logo/mail.svg" alt="">
        <img class="shape-btn" src="logo/shape.svg" alt="">
        <div class="line"></div>
        <p class="your-name">Your Name</p>
        <img class="icon-btn" src="logo/icon.svg" alt="">
    </div>
    <div class="header-container">
        <div class="wrapper">
            <form action="#">
                <div class="head-container-ticket">
                <h3>Create Ticket</h3>
                </div>
                <label class="email" for="email">Email :</label>
                <input class="email-input" type="email" placeholder="YourName@gmail.com" style="alignt-center" readOnly>
                <label class="platform" for="platform">Platform :</label>
                <select class="platform-input" name="plaftform" id="platform">
                    <option value="Pilih Platform">Pilih Platform</option>
                    <option value="Web">Web</option>
                    <option value="Mobile">Mobile</option>
                </select>
                <label class="kategori" for="kategori">Kategori :</label>
                <select class="kategori-input" name="kategori" id="kategori">
                    <option value="Pilih Kategori">Pilih Kategori</option>
                    <option value="Eror 404">Eror 404</option>
                    <option value="Eror 502">Eror 502</option>
                    <option value="Eror Api">Eror Api</option>
                </select>
                <label class="sub-kategori" for="sub-kategori">Sub Kategori :</label>
                <select class="sub-kategori-input" name="sub-kategori" id="sub-kategori">
                    <option value="Pilih Sub Kategori">Pilih Sub Kategori</option>
                    <option value="Input Object">Input Object</option>
                    <option value="Output">Output Object</option>
                    <option value="Get Database">Get Database</option>
                </select>
                <label class="deskripsi" for="deskripsi">Deskripsi Masalah :</label>
                <div class="border-text">
                <textarea class="deskripsi-input" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                </div>
                <label class="upload" for="upload">Upload File :</label>
                <button class="btn-upload">Upload</button>
                <p class="max-img">*Only jpg, jpeg, png, or pdf file are allowed, Maximum size 10MB</p>
                <input class="kirim" type="submit" value="Kirim">
            </form>
            <p class="website">Your Website 2021</p>
        </div>
    </div>
</body>
</html>