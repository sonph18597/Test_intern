<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ PUBLIC_URL }}/main.css">
</head>

<body>
    <section class="header-wrapper pb-3 ">
        <div class="container">
            <header>
                <div class="header-top d-flex justify-content-between py-4 border-bottom">
                    <div class="search">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="logo">
                        <a href=""><img src="{{ PUBLIC_URL }}/images/logo.png" width="20%"
                                alt=""></a>
                    </div>
                    <div class="account">

                        <a href="" class="header-top__link"><i
                                class="header-top__icon bi bi-person fs-5"></i>Signup</a>
                        <a href="" class="header-top__link"><i
                                class="header-top__icon bi bi-cart fs-5"></i>Signin</a>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg main-menu">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ BASE_URL }}">New Product</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ BASE_URL . '/admin' }}">Admin</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ BASE_URL . '/sendEmail' }}">Send Email</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <section class="banner  my-3 ">
                <div class="row align-items-center">
                    <div class="col-md-6 ">
                        <h1 class="display-5 benner_title">Collections</h1>
                        <p class="col-md-8 fs-4 banner_decoration">you can explore ans shop many differnt collection
                            from various barands here.</p>
                        <button class="btn  banner_btn fs-4 text py-2 px-3" type="button"> <i
                                class="bi bi-bag-check-fill"></i> shop now</button>
                    </div>
                    <div class="col-md-6">
                        <img srcset="{{ PUBLIC_URL }}/upload/1.png 2x" alt="">
                    </div>
                </div>
            </section>
        </div>
    </section>
    @yield('main-content')

    <section class="follow-instagam py-5">
        <div class="container insatagram">
            <header class="follow-instagram-title text-center mb-5 ">
                <h2>Follow products and discounts on Instagram</h2>
            </header>
            <div class=" follow-instagram-post d-flex justify-content-between ">
                <div class=" follow-instagram-image position-relative ">
                    <img srcset="{{ PUBLIC_URL }}/upload/insatagram/1.png 2x" class="img-fluid" alt="">
                    <div
                        class="follow-instagram-logo position-absolute d-flex justify-content-center align-items-center">
                        <i class="bi bi-instagram fs-1"></i>
                    </div>
                </div>
                <div class=" follow-instagram-image position-relative ">
                    <img srcset="{{ PUBLIC_URL }}/upload/insatagram/2.png 2x" class="img-fluid" alt="">
                    <div
                        class="follow-instagram-logo position-absolute d-flex justify-content-center align-items-center">
                        <i class="bi bi-instagram fs-1"></i>
                    </div>
                </div>
                <div class=" follow-instagram-image position-relative ">
                    <img srcset="{{ PUBLIC_URL }}/upload/insatagram/3.png 2x" class="img-fluid" alt="">
                    <div
                        class="follow-instagram-logo position-absolute d-flex justify-content-center align-items-center">
                        <i class="bi bi-instagram fs-1"></i>
                    </div>
                </div>
                <div class=" follow-instagram-image position-relative ">
                    <img srcset="{{ PUBLIC_URL }}/upload/insatagram/4.png 2x" class="img-fluid" alt="">
                    <div
                        class="follow-instagram-logo position-absolute d-flex justify-content-center align-items-center">
                        <i class="bi bi-instagram fs-1"></i>
                    </div>
                </div>
                <div class=" follow-instagram-image position-relative ">
                    <img srcset="{{ PUBLIC_URL }}/upload/insatagram/5.png 2x" class="img-fluid" alt="">
                    <div
                        class="follow-instagram-logo position-absolute d-flex justify-content-center align-items-center">
                        <i class="bi bi-instagram fs-1"></i>
                    </div>
                </div>
                <div class=" follow-instagram-image position-relative ">
                    <img srcset="{{ PUBLIC_URL }}/upload/insatagram/6.png 2x" class="img-fluid" alt="">
                    <div
                        class="follow-instagram-logo position-absolute d-flex justify-content-center align-items-center">
                        <i class="bi bi-instagram fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container email">
            <header class="follow-instagram-title text-center my-5">
                <h2>Or subscribe to the newsletter</h2>
            </header>
            <div class=" ">
                <input type="text" class="follow-instagram-form-email" placeholder="Email Address ....">
                <button class="follow-instagram-form-email">Submit</button>

            </div>
        </div>
    </section>
    <footer>
        <div class="footer-nav">
            <div class="container footer-nav-top d-flex justify-content-between flex-wrap  flex-grow-1">
                <div class="footer-nav-right  ">
                    <div class="footer-nav-right-logo mb-4">
                        <img srcset="./images/logo.png 2x" alt="">
                    </div>
                    <div class="footer-nav-right-des mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua
                    </div>
                    <div class="footer-nav-right-icon ">
                        <span><i class="bi bi-facebook"></i></span>
                        <span><i class="bi bi-twitter"></i></span>
                        <span><i class="bi bi-linkedin"></i></span>
                        <span><i class="bi bi-dribbble"></i></span>

                    </div>
                </div>
                <div class="footer-nav-menu">
                    <ul>
                        <li>CATALOG</li>
                        <li>Necklaces</li>
                        <li>hoodies</li>
                        <li>Jewelry Box</li>
                        <li>t-shirt</li>
                        <li>jacket</li>
                    </ul>
                </div>
                <div class="footer-nav-menu">
                    <ul>
                        <li>ABOUT US</li>
                        <li>Our Producers</li>
                        <li>Sitemap</li>
                        <li>FAQ</li>
                        <li>About Us</li>
                        <li>Terms & Conditions</li>
                    </ul>

                </div>
                <div class="footer-nav-menu">
                    <ul>

                        <li>CUSTOMER SERVICES</li>
                        <li>Contact Us</li>
                        <li>Track Your Order</li>
                        <li>Product Care & Repair</li>
                        <li>Book an Appointment</li>
                        <li>Shipping & Returns</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        © 2022 Coral , Inc.
                    </div>
                    <div>
                        <img srcset="./images/icons_payment.png 2x" alt="">
                    </div>
                    <div>
                        <span> Scroll to top</span> <i class="bi bi-arrow-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
