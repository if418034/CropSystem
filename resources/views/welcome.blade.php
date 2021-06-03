<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Crop System</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <img src="img/logo.png" class="img-responsive" width="260px" href="#page-top"></img>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Information</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Images</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>

                    @auth
                    <li class="nav-item ml-2"><a href="{{ url('/dashboard') }}" class="nav-link js-scroll-trigger">Dashboard</a></li>
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Log in</a></li>

                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Register</a></li>
                    @endif
                    @endauth
                </ul>
            </div>
            @endif
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white font-weight-bold">Selamat datang di Website Cropsystem Food estate</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Sekarang semua dapat bercocok tanam! Anda bisa mendapatkan dalam bercocok tanam disini.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Temukan Lebih banyak</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Informasi Cropping!</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">Pertanian ditentukan oleh jenis tanah dan parameter iklim yang menentukan pengaturan agro-ekologi keseluruhan untuk makanan dan kesesuaian atau serangkaian tanaman atau serangkaian tanaman untuk budidaya</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Informasi Sistem Rotasi Tanaman</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-water text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Kondisi tanah</h3>
                        <p class="text-muted mb-0">Kondisi tanah mencakup kelembapan, suhu, dan konduktivitas listrik (EC) di berbagai kedalaman.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-cloud-sun text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Kondisi Cuaca</h3>
                        <p class="text-muted mb-0">Informasi cuaca meliputi suhu udara, kelembapan, kecepatan angin, evapotranspirasi (ET), curah hujan, suhu min dan maks, dan banyak lagi.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-chart-area text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Pemetaan Tanah</h3>
                        <p class="text-muted mb-0">Jenis dan tekstur tanah sangat penting untuk perhitungan tingkat kelembapan yang tepat, sistem irigasi, sifat hidrolik dan bahan organik</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-cloud-moon-rain text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Musim</h3>
                        <p class="text-muted mb-0">Musim hujan di Indonesia terjadi antara bulan September-Maret. Musim Kemarau dimulai bulan April-Agustus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/1.jpg">
                        <img class="img-fluid" src="img/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Kacang</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/2.jpg">
                        <img class="img-fluid" src="img/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Pertanian</div>
                            <div class="project-name">Sawah</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/2s.jpg">
                        <img class="img-fluid" src="img/2s.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Pertanian</div>
                            <div class="project-name">Gandum</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/3s.jpg">
                        <img class="img-fluid" src="img/3s.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Bawang</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/4.jpg">
                        <img class="img-fluid" src="img/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Jagung</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/5.jpg">
                        <img class="img-fluid" src="img/5.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Jeruk</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-light text-black">
        <form class="mx-5" method="post" action="{{ route('comments.store') }}">
            @csrf
            <h3>Leave your reply</h3>
            <div class="form-group ml-5 mr-5 mt-5">
                <label for="email">Alamat Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{ old('email', ' ') }}">
                @error('email')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', '') }}" placeholder="Nama Lengkap">
                @error('nama')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="komentar">Komentar</label>
                <textarea class="form-control" id="komentar" name="komentar" value="{{ old('komentar', '') }}" placeholder="Berikan komentar anda" rows="3"></textarea>
                @error('komentar')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-secondary mx-5">Post</button>
        </form>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Hubungi Kami disini!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Punya Kendala dan masalah? hubungi kami pada kontak dibawah ini.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+6282287955430</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:cropsystem@gmail.com">cropsystem@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">
                Copyright &copy;
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());
                </script>
                - Company Name
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>