<!DOCTYPE html>
<html lang="en">

<head>
    <title> Delivery Now</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">

</head>

<body style=background-color:#ddd>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/img/logo-red.png'?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-md-12" id="navbarSupportedContent ">
            <ul class="navbar-nav mr-auto navbar-fixed-top">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="<?php echo base_url().'assets/img/home.png'?>" class="menu-icon p-1" />Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="<?php echo base_url().'assets/img/deliver.png'?>" class="menu-icon p-1" />Deliver Now</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url().'assets/img/express-service.png'?>" class="menu-icon p-1" />
                        Express Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Tarif Check</a>
                        <a class="dropdown-item" href="#">Trace &amp; Track</a>
                        <a class="dropdown-item" href="#">Drop Point</a>
                        <a class="dropdown-item" href="#">Prohibited</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url().'assets/img/about-us.png'?>" class="menu-icon p-1" />
                        About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Contact Us</a>
                        <a class="dropdown-item" href="#">Commitment</a>

                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="<?php echo base_url().'assets/img/career.png'?>" class="menu-icon p-1" />Career</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url().'assets/img/carousel5.jpg'?>" class="d-block w-100" alt="carou2">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>

    <div class='container' style=background-color:white>
        <h4 class='text-danger text-center'>Delivery Now</h4>
        <form>
            <div class='row flex tools'>
                <div class='inner-container col-md-6 align-items-center p-5'>
                    <h6 class='text-danger text-left'>Sender Information</h6>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Select City</option>
                                <option>Bandung</option>
                                <option>Jakarta Timur</option>
                                <option>Cimahi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                </div>

                <div class='inner-container col-md-6 align-items-center p-5'>
                    <h6 class='text-danger text-left'>Recipient Information</h6>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Select City</option>
                                <option>Bandung</option>
                                <option>Jakarta Timur</option>
                                <option>Cimahi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                </div>

                <div class='inner-container col-md-6 align-items-center p-5'>
                    <h6 class='text-danger text-left'>Package Information</h6>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Item Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Goods Value</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                </div>
                <div class='inner-container col-md-6 align-items-center p-5'>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Weight</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Remark</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div>
                        <button type="submit" class="btn btn-danger">Delivery Now</button>
                        <!-- <button class="btn btn-red disabled" type="submit" value="Delivery Now"></button> -->
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div class='container mt-3' style='background-color:white'>
            <div class='row'>
                <div class='col-md-3'>
                    <h5>Service</h5>
                    <div class='d-flex flex-column'>
                        <a class='text-dark' href="">Home</a>
                        <a class='text-dark' href="">Deliver Now</a>
                        <a class='text-dark' href="">Express Service</a>
                        <a class='text-dark' href="">About Us</a>
                        <a class='text-dark' href="">Career</a>
                    </div>
                </div>
                <div class='col-md-3'>
                    <h5>Information</h5>
                    <div class='d-flex flex-column'>
                        <a class='text-dark' href="">FAQ</a>
                        <a class='text-dark' href="">Terms of Felivery Service</a>
                        <a class='text-dark' href="">Terms & Conditions</a>
                        <a class='text-dark' href="">Privacy Policy</a>
                    </div>
                </div>
                <div class='col-md-3'>
                    <h5>Get In Touch</h5>
                    <table>
                        <tr>
                            <td>Address:</td>
                            <td>Landmark Pluit<br></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>B1 Floor 8,9,10<br></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>Jl. Pluit Selatan Raya, Jakarta Utara, 14450<br></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>021-8066-1888<br></td>
                        </tr>
                        <tr>
                            <td>E-Mail:</td>
                            <td>-</td>
                        </tr>
                    </table>
                </div>
                <div class='col-md-3'>
                    <h5>Stay Connected</h5>
                    <div>
                        <a href="https://www.facebook.com/jntexpressindonesia/" target="_blank" class="link-facebook">
                            <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 36px;color: black"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCdL3-euNvJhMMBvEVVBg5pA" target="_blank"
                            class="link-youtube">
                            <i class="fa fa-youtube-square" aria-hidden="true" style="font-size: 36px;color: black"></i>
                        </a>
                        <a href="https://twitter.com/jntexpressid" target="_blank" class="link-twitter">
                            <i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 36px;color: black"></i>
                        </a>
                        <a href="https://www.instagram.com/jntexpressid/" target="_blank" class="link-instagram">
                            <i class="fa fa-instagram" aria-hidden="true" style="font-size: 36px;color: black"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="bottom bg-danger">
        <div class="container">
            <div class="row align-items-center">
                <div class="logo col-md-6 col-sm-6">
                    <img src="<?php echo base_url().'assets/img/logo-white.png'?>" alt="">
                </div>
                <div class="copyright col-md-6 col-sm-6 text-white" >
                    &copy; 2015-2018 PT. Global Jet Express All Rights Reserved
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>