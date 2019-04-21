<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/img/logo-red.png'?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-md-12" id="navbarSupportedContent ">
            <ul class="navbar-nav mr-auto navbar-fixed-top">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('home/beranda')?>"><img src="<?php echo base_url().'assets/img/home.png'?>" class="menu-icon p-1" />Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('deliverynow/index')?>"><img src="<?php echo base_url().'assets/img/deliver.png'?>" class="menu-icon p-1" />Deliver Now</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url().'assets/img/express-service.png'?>" class="menu-icon p-1" />
                        Express Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('home/tariffcheck')?>">Tarif Check</a>
                        <a class="dropdown-item" href="#">Trace &amp; Track</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url().'assets/img/about-us.png'?>" class="menu-icon p-1" />
                        About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('home/aboutus')?>">Contact Us</a>
                        <a class="dropdown-item" href="#">Commitment</a>

                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('home/career')?>"><img src="<?php echo base_url().'assets/img/career.png'?>" class="menu-icon p-1" />Career</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>