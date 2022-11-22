<head>
    <link rel="stylesheet" href="styles/style-review.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"> -->
</head>



<section id="testimonial_area" class="section_padding">
    <div class="container review-container set-width py-5">
        <!-- heading -->
        <div class="text-center">
            <p class="heading my-3 my-md-5 text-capitalize">
                Words About Us
            </p>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="testmonial_slider_area text-center owl-carousel">
                    <div class="box-area">
                        <i class="fa fa-duotone fa-quote-right quote-icon d-none d-xl-block"></i>
                        <div class="img-area">
                            <img src="assets/img-1.jpg" alt="">
                        </div>
                        <h5>Sreeramachandran</h5>
                        <span>Founder, <b>Umbrella Corporation</b></span>
                        <p class="content ">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since lore
                        </p>
                    </div>

                    <div class="box-area">
                        <i class="fa fa-duotone fa-quote-right quote-icon d-none d-xl-block"></i>
                        <div class="img-area">
                            <img src="assets/img-2.jpg" alt="">
                        </div>
                        <h5>Alex</h5>
                        <span>Co-Founder, <b>Umbrella Corporation</b></span>
                        <p class="content ">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since
                        </p>
                    </div>

                    <div class="box-area">
                        <i class="fa fa-duotone fa-quote-right quote-icon d-none d-xl-block"></i>
                        <div class="img-area">
                            <img src="assets/img-3.jpg" alt="">
                        </div>
                        <h5>John</h5>
                        <span>Operations Department</span>
                        <p class="content">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script> -->
<script>
    $(".testmonial_slider_area").owlCarousel({
        autoplay: true,
        slideSpeed: 1000,
        items: 3,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
        margin: 30,
        dots: true,
        responsive: {
            320: {
                items: 1
            },
            767: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }

    });
</script>