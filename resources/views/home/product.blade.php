<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="img/LOGO CVRejekiAgung.webp" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@100;300;400;700;900&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="css/styles.css" rel="stylesheet" />

    <title>Home | CV. Rejeki Agung</title>
</head>

<body>
    <!-------------whatsapp -------------->
    <div class="whatsapp_float">
        <a href="https://api.whatsapp.com/send?phone=628122865542&amp;text=Halo,%20Saya%20mendapatkan%20nomor%20ini%20dari%20website.%20Saya%20ingin%20bertanya%20seputar%20timbangan"
            target="_blank"><img src="images/wa_logo copy.png" width="57px" class="whatsapp_float_btn" /></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index">
                <div class="footer-content">
                    <img src="img/LOGO CVRejekiAgung.webp" alt="Interscales Logo" class="footer-logo" />
                    <span class="footer-company-name">CV. Rejeki Agung</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link custom-color" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color" aria-current="page" href="product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color" aria-current="page" href="documentation">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-color" aria-current="page" href="contact">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex container-form">
                    <div class="search-wrapper">
                        <input class="form-control me-2" type="search" id="search-item" placeholder="Cari Produk"
                            aria-label="Search" />
                    </div>
                    <div class="product-list" id="searchResults">
                        <!-- Search results will be injected here -->
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="slides">
        <div class="slide slide-1">
            <img src="images/slide/image (1).webp" alt="img-1" />
            <div class="slide-text"></div>
        </div>
        <div class="slide slide-2">
            <img src="images/slide/image (2).webp" alt="img-2" />
            <div class="slide-text"></div>
        </div>
        <div class="slide slide-3">
            <img src="images/slide/image (3).webp" alt="img-3" />
            <div class="slide-text"></div>
        </div>
        <div class="slide slide-4">
            <img src="images/slide/image (4).webp" alt="img-4" />
            <div class="slide-text">
                <h2 id="slide_2_h2"><!-- TEXT AT JS --></h2>
                <p id="slide_2_p"><!-- TEXT AT JS --></p>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: rgba(243, 212, 212, 0.5)">
        <br />
        <h1 class="text-center" style="color: #ba6203; font-weight: bold">
            Kategori Produk
        </h1>
        <br />
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card rounded-img shadow-card" style="width: 20rem">
                    <img src="allProduct/INDICATOR.webp" class="card-img-top rounded-img" alt="BenchScale" />
                    <div class="card-body">
                        <h5 class="card-title">Indicator</h5>
                        <p></p>
                        <div class="btn-center">
                            <button type="button" class="btn btn-primary custom-btn">
                                <a href="Indicator">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card rounded-img shadow-card" style="width: 20rem">
                    <img src="allProduct/BENCH SCALE.webp" class="card-img-top rounded-img" alt="BenchScale" />
                    <div class="card-body">
                        <h5 class="card-title">Bench Scale</h5>
                        <div class="btn-center">
                            <button type="button" class="btn btn-primary custom-btn">
                                <a href="Bench_Scale">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card rounded-img shadow-card" style="width: 20rem">
                    <img src="allProduct/loadcell.webp" class="card-img-top rounded-img" alt="BenchScale" />
                    <div class="card-body">
                        <h5 class="card-title">Load Cell</h5>
                        <div class="btn-center">
                            <button type="button" class="btn btn-primary custom-btn">
                                <a href="Load_Cell">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card rounded-img shadow-card" style="width: 20rem">
                    <img src="allProduct/TRUCK SCALE.webp" class="card-img-top rounded-img" alt="BenchScale" />
                    <div class="card-body">
                        <h5 class="card-title">Truck Scale</h5>
                        <div class="btn-center">
                            <button type="button" class="btn btn-primary custom-btn">
                                <a href="Truck_Scale">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>

    <footer class="footer">
        <div class="footer-content">
            <img src="img/LOGO CVRejekiAgung.webp" alt="Interscales Logo" class="footer-logo" />
            <span class="footer-company-name"><a href="index">CV. Rejeki Agung</a></span>
        </div>
        <div class="footer-rights">
            Jl. Puri Anjasmoro Blok C3 nomor 7, Semarang, Jawa Tengah
        </div>
        <div class="footer-rights">Fax. (024) 7601994 Wa. 08122865542</div>
        <div class="footer-rights">Email : sales@rejekiagung.com</div>
    </footer>
    <script src="js/search.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
