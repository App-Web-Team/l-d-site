<head>
    <link rel="stylesheet" href="styles/style-workshop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
</head>



<section id="workshop-section" class="section_padding">
    <div class="container review-container py-5">
        <!-- head content -->
        <div class="row justify-content-start ps-5 pe-4 pe-md-0 ">
            <div class="col-lg-6">
                <p class="heading text-capitalize">
                    Highly Demanded
                    Workshop
                </p>
                <p class="content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
        <div class="row mt-5 mx-4">
            <div class="col-md-12">
                <div class="testmonial_slider_area owl-carousel d-flex">
                    <div class="card">
                        <img class="card-img-top" src="assets/social-media.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text workshop-heading">
                                Facebook & Instagram Ads
                            </p>
                            <p class="workshop-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="star-rating">
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <p class="rating d-inline ms-2">5.0</p>
                            </div>
                        </div>
                        <a href=""><button type="button" class="btn btn-danger text-uppercase">register</button></a>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/social-media.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text workshop-heading">
                                Facebook & Instagram Ads
                            </p>
                            <p class="workshop-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="star-rating">
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <p class="rating d-inline ms-2">5.0</p>
                            </div>
                        </div>
                        <a href=""><button type="button" class="btn btn-danger text-uppercase">register</button></a>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/social-media.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text workshop-heading">
                                Facebook & Instagram Ads
                            </p>
                            <p class="workshop-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="star-rating">
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <p class="rating d-inline ms-2">5.0</p>
                            </div>
                        </div>
                        <a href=""><button type="button" class="btn btn-danger text-uppercase">register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
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