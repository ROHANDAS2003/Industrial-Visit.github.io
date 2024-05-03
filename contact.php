<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Axtra HTML5 Template">

    <title>Contact - Axtra</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon11.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/progressbar.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>


    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>



    <!-- Switcher Area -->
    <?php include './component/switcher.html'; ?>


    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>


    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


    <!-- header  -->
    <?php include './component/header.html'; ?>



    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- Contact area start -->
                <section class="contact__area-6">
                    <div class="container g-0 line pt-120 pb-110">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="contact__text">
                                    <p>Great! We're excited to hear from you and let's start something special togerter.
                                        call us for any inquery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row contact__btm">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="contact__info">
                                    <h3 class="sub-title-anim-top animation__word_come">We are happy ! <br>to help you
                                    </h3>
                                    <ul>
                                        <li><a style="color: #000;" href="tel:917877568379">+(91) 7877568379</a></li>
                                        <li><a style="color: #000;" href="tel:919828250462">+(91) 9828250462</a></li>
                                        <li><a style="color: #000;"
                                                href="mailto:kunal.qurikvoy@gmail.com">kunal.qurikvoy@gamil.com</a></li>
                                        <li><a style="color: #000;"
                                                href="mailto:rohan.qurikvoy@gmail.com">rohan.qurikvoy@gamil.com</a></li>
                                        <li style="color: #000;">230 Norman Street New York, QC (USA) H8R 1A1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                <div class="contact__form">
                                    <form action="assets/mail.php" method="POST">
                                        <div class="row g-3">
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="text" name="name" placeholder="Name *">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="email" name="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="tel" name="phone" placeholder="Phone">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="text" name="subject" placeholder="Subject *">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <textarea name="message" placeholder="Messages *"></textarea>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="btn_wrapper">
                                                    <button class="wc-btn-primary btn-hover btn-item" style="color: #1e74b7; border-color: #1e74b7;"><span></span> Send
                                                        <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact area end -->

            </main>


            <!-- footer -->
            <?php include './component/footer.html'; ?>

        </div>
    </div>



    <!-- All JS files -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/chroma.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/vanilla-tilt.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>