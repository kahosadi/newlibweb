<!DOCTYPE html><html lang="en"><head>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <meta name="description" content="">    <meta name="author" content="">    <title>Modern Business - Start Bootstrap Template</title>    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">    <!-- Bootstrap core CSS    <!-- Custom fonts for this template    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">    <!-- Custom styles for this template    <link href="css/modern-business.css" rel="stylesheet"> -->    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">    <link rel="stylesheet" href="<?=$css?>" type="text/css" />    <link rel="stylesheet" href="<?=base_url().'assets/css/font-awesome.min.css'?>" type="text/css" />	<!-- Move to back header.php-->	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/ckeditor/style.css">	<!-- Move to back header.php-->    <!-- Temporary navbar container fix -->    <style>    .navbar-toggler {        z-index: 1;    }    @media (max-width: 576px) {        nav > .container {            width: 100%;        }    }    /* Temporary fix for img-fluid sizing within the carousel */    .carousel-item.active,    .carousel-item-next,    .carousel-item-prev {        display: block;    }    </style></head><body>    <!-- Navigation -->    <nav class="navbar navbar-toggleable-md navbar-inverse bg-6ABBDA" id="institutionalNav">        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">            <span class="navbar-toggler-icon"></span>        </button>        <div class="container">            <div class="collapse navbar-collapse" id="navbarTop">                <ul class="navbar-nav ml-auto bg-BAC97C">                    <li class="nav-item">                        <a class="nav-link" href="services.html">UKSW</a>                    </li>                    <li class="nav-item">                        <a class="nav-link" href="services.html">SIASAT</a>                    </li>                    <li class="nav-item">                        <a class="nav-link" href="services.html">FLEARN</a>                    </li>                    <li class="nav-item">                        <a class="nav-link" href="services.html">REPOSITORI</a>                    </li>                    <li class="nav-item">                        <a class="nav-link" href="services.html">EJOURNAL</a>                    </li>                </ul>            </div>        </div>    </nav>    <nav class="navbar navbar-toggleable-md navbar-inverse bg-6ABBDA">        <button class="navbar-toggler navbar-toggler-right navbar-toggler-margin" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">            <span class="navbar-toggler-icon"></span>        </button>        <div class="container">            <a class="navbar-brand" href="#"><img class="img-fluid hidden-md-down" src="<?=$logo?>" alt="Logo"></a>            <a class="navbar-brand" href="#"><img class="img-fluid hidden-lg-up" src="<?=$logoXS?>" alt="Logo"></a>            <div class="collapse navbar-collapse" id="navbarMain">                <ul class="navbar-nav ml-auto">                    <li class="nav-item">                        <a class="nav-link" href="services.html">Beranda</a>                    </li>                    <li class="nav-item dropdown">                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            Tentang Kami                        </a>                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">                            <a class="dropdown-item" href="portfolio-1-col.html">Sejarah</a>                            <a class="dropdown-item" href="portfolio-2-col.html">Visi dan Misi</a>                            <a class="dropdown-item" href="portfolio-3-col.html">Struktur Organisasi</a>                            <a class="dropdown-item" href="contact.html">Tata Tertib</a>                        </div>                    </li>                    <li class="nav-item dropdown">                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            Titik Layanan                        </a>                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">                            <a class="dropdown-item" href="portfolio-1-col.html">Reserve</a>                            <a class="dropdown-item" href="portfolio-2-col.html">Referensi</a>                            <a class="dropdown-item" href="portfolio-3-col.html">Serial</a>                            <a class="dropdown-item" href="portfolio-3-col.html">Sirkulasi</a>                            <a class="dropdown-item" href="portfolio-3-col.html">Lab. Komputer</a>                        </div>                    </li>                    <li class="nav-item dropdown">                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHelp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            Bantuan                        </a>                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">                            <a class="dropdown-item" href="portfolio-1-col.html">Kontak</a>                            <a class="dropdown-item" href="portfolio-2-col.html">FAQs</a>                        </div>                    </li>                    <li class="nav-item">                        <a class="nav-link" href="services.html">Pencarian Koleksi</a>                    </li>                </ul>            </div>        </div>    </nav>    <section class="bg-BAC97C" id="hours">      <div class="container" style="vertical-align:middle;">        <span class="fa fa-clock-o fa-lg" aria-hidden="true"></span>        Jam Layanan : Senin - Jumat 07.00 - 18.00 | Sabtu 07.00 - 12.00      </div>    </section>