<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/style-manual.css">
  <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

</head>

<body>
  <!-- Header Navbar -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          NAMA BUTIK
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">About Us</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Lokasi</a></li>
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" class="btn btn-primary">Daftar</button>
        </div>
      </header>
    </div>

    <section class="container">
      <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: #b6ccfe;">
        <div class="col-md-12 px-0">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aspernatur enim harum porro illo. Dolore, velit! Laboriosam omnis doloremque aliquam, rem provident vero eligendi id blanditiis recusandae suscipit nisi. Ut architecto, aut libero nemo similique porro sed dignissimos adipisci consequatur sit voluptas quia obcaecati sint eligendi sapiente voluptatum? Sapiente blanditiis fuga, provident possimus vero officia praesentium dolorem deserunt laboriosam beatae, consectetur doloremque. Possimus soluta placeat modi sint eum, nemo mollitia consectetur repellendus similique excepturi? Necessitatibus ullam, eius aperiam laudantium suscipit possimus similique commodi tenetur? Error exercitationem voluptatibus ipsam adipisci nisi expedita itaque numquam, placeat sint esse? Corrupti hic dolore qui!</p>
        </div>
        <div class="col-md-12">
          <h1 class="text-center fst-italic display-4">BUTIK BERKAH</h1>
        </div>
      </div>
    </section>

    <!-- card product -->
    <section>
      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic3.jpg" alt="">

                <div class="card-body">
                  <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div> -->
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic1.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="assets/img/pic2.jpg" alt="">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–<?= date("Y")  ?> Butik Berkah.</p>
    </footer>
  </div>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>