<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/galeri.css">
</head>
<body>
     <!-- navbar -->
     <x-nav2><section class="container hero">
        <h1 class="text-uppercase"> galeri kami </h1>
      </section></x-nav2>

<div style="background-color: #f4f4f4">
    <section class="container py-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/oranye.jpg" class="caro d-block w-100  rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/ramen.jpg" class="caro d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/makan.jpg" class="caro d-block w-100 rounded" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="lft bi bi-arrow-left-circle-fill" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="rgt bi bi-arrow-right-circle-fill" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
</div>      

<section class="container py-5 gallery">
    <div class="row">
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/telur.jpg" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/gizi.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/hitam.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/putih.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/vegan.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/jeruk.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/soto.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/memasak.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/makan.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/makanan.jpg" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/sayur.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card">
                <img src="/img/berry.jpg"" class="card-img-top img-fluid rounded" alt="Gallery Image">
            </div>
        </div>
    </div>
</section>

<x-footer></x-footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>