<!DOCTYPE html>
<html lang="en">

<head>
    <title> J&amp;T Express </title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url().'assets/img/carousel2.jpg'?>" class="d-block w-100" alt="carou2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url().'assets/img/carousel1.jpg'?>" class="d-block w-100" alt="carou1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url().'assets/img/carousel3.jpg'?>" class="d-block w-100" alt="carou3">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url().'assets/img/carousel4.jpg'?>" class="d-block w-100" alt="carou4">
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

    <div class='container'>
        <div class='row flex tools col-md-10'>
            <div class='inner-container col-md-6 d-flex flex-column justify-content-center align-items-center p-5'>
                <h4 class='text-danger'>Tariff Check</h4>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">From</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Select Province</option>
                            <option>Bandung</option>
                            <option>Jakarta</option>
                            <option>Yogyakarta</option>
                            <option>Surabaya</option>
                            <option>Bogor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">To</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Select Province</option>
                            <option>Bandung</option>
                            <option>Jakarta</option>
                            <option>Yogyakarta</option>
                            <option>Surabaya</option>
                            <option>Bogor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Weight</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kg">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Dimension</label>
                        <div class='row'>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kg">
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kg">
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kg">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger">Check</button>
                </form>
            </div>

            <div class='col-md-6 d-flex flex-column justify-content-center align-items-center inner-container'>
                <h4 class='text-danger'>Trace & Track</h4>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" style="width: 25em; height: 10em;"
                            id="exampleFormControlTextarea1" rows="3" placeholder="E.g: 123456789,987654321"></textarea>
                    </div>
                    <button type="button" class="btn btn-danger">Track</button>
                </form>
            </div>
        </div>
    </div>

    <div class='row bg-light'>
        <div class='col-md-5 d-flex justify-content-end align-items-center'>
            <!-- <img class='w-25 h-25' src="img/line-logo.png" alt=""> -->
            <h5>Find local Drop Point in your area</h3>
        </div>
        <div class='col-md-7 d-flex justify-content-start align-items-center'>
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected>Select City</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Yogyakarta</option>
                        <option>Surabaya</option>
                        <option>Bogor</option>
                    </select>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"></label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Select Area">
                </div>
                <button type="submit" class="btn btn-danger mb-2">Go</button>
            </form>
        </div>
    </div>
    </div>

    <div class='container mt-3'>
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

    <div class="bottom bg-danger">
        <div class="container">
            <div class="row align-items-center">
                <div class="logo col-md-6 col-sm-6">
                    <img src="<?php echo base_url().'assets/img/logo-white.png'?>" alt="">
                </div>
                <div class="copyright text-white col-md-6 col-sm-6">
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