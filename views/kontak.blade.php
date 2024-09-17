<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasty Food</title>
  <link rel="stylesheet" href="/css/kontak.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

  </style>
</head>
<body>
  <!-- navbar -->
  <x-nav2><section class="container hero">
    <h1 class="text-uppercase"> kontak kami </h1>
  </section></x-nav2>

<section class="container contact-section" >
    <h2 class="text-center">Kontak Kami</h2>
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="subject"></label>
                        <input type="text" class="form-control" rows="2" id="subject" placeholder="Enter subject" style="border: 2px solid black;">
                    </div>
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" style="border: 2px solid black;">
                    </div>
                    <div class="form-group " style="padding-bottom: ">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" style="border: 2px solid black;">
                    </div>

                </div>
                <div class="col-md-6" style="padding-bottom: 20px">
                    <div class="form-group">
                        <label for="message"></label>
                        <textarea class="form-control" id="message" rows="6" placeholder="Enter your message" style="border: 2px solid black;"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="from-group">
                        <button type="submit" class="btn btn-dark w-100">Kirim</button>
                    </div>
                </div>
            </form>
    </div>
    
    <div class="row contact-info text-center mt-5">
        <div class="col-md-4">
            <img src="/img/emaill.png" alt="" style="width: 90px;">
            <h5>Email</h5>
            <p>tastyfood@gmail.com</p>
        </div>
        <div class="col-md-4">
            <img src="/img/tel.png" alt="" style="width: 90px">
            <h5>Phone</h5>
            <p>+62 812 3456 7890</p>
        </div>
        <div class="col-md-4">
            <img src="/img/location.png" alt="" style="width: 90px;">
            <h5>Location</h5>
            <p>Kota Bandung, Jawa Barat</p>
        </div>
    </div>
    
    <div class="map mt-5" style="margin-bottom: 50px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851666664!2d107.66141237410693!3d-6.94320606796817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sus!4v1722998864829!5m2!1sid!2sus" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<x-footer></x-footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>