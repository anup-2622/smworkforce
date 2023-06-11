<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title -->
<title>SM Workforce</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.scss">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/carousel.rtl.css" />
<link rel="stylesheet" href="css/carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css" />

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Nunito:wght@500&display=swap" rel="stylesheet">


<style>
#carosuel,

.item {
    height: 75vh;

}

.pic1,
.pic2,
.pic3,
.pic4,
.pic5,
.pic6,
.pic7,
.pic8 {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.pic1 {
    background-image: url('images/background/Banner1.png');
}

.pic2 {
    background-image: url('images/background/Banner2.png');
}

.pic3 {
    background-image: url('images/background/Banner3.png');
}

.pic4 {
    background-image: url('images/background/Banner4.png');
}

.pic5 {
    background-image: url('images/background/Banner5.png');
}

.pic6 {
    background-image: url('images/background/Banner6.png');
}

.pic7 {
    background-image: url('images/background/Banner7.png');
}

.pic78 {
    background-image: url('images/background/Banner8.png');
}

.card-img-wrap {
    overflow: hidden;
    position: relative;
}

.card-img-wrap:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.3);
    opacity: 0;
    transition: opacity .25s;
}

.card-img-wrap img {
    transition: transform .25s;
    width: 100%;
}

.card-img-wrap:hover img {
    transform: scale(1.2);
}

.card-img-wrap:hover:after {
    opacity: 1;
}
</style>
<!-- home design css -->
<style>
.bd-placeholder-img {
    margin: 0;
    padding: 0;
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}

.bi {
    vertical-align: -.125em;
    fill: currentColor;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}


.container {
    overflow: hidden;

}

.slider {
    margin: 0;
    animation: slidein 30s linear infinite;
    white-space: nowrap;
}

.fab {
    width: calc(100% / 5);
    animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
}

.logos {
    width: 100%;
    display: inline-block;
    display: flex;
    flex-direction: row;
    justify-content: space-between;

}

.sec_logo a {
    width: 100%;
    overflow: hidden;
    display: block;
    display: flex;
    flex-direction: column;

    align-items: center;
    /* border: 1px solid red; */
}

.sec_logo span {
    color: black;
}

.sec_logo {

    height: 200px;
    width: 300px;
    /* padding: 10px; */
    overflow: hidden;
    margin: 10px;
    align-items: center;
    text-align: center;
    /* border: 1px solid #1b3061; */
}




.logos img {
    margin: 5px;
    /* border-radius: 10px; */
}



@keyframes slidein {
    from {
        transform: translate3d(0, 0, 0);
    }

    to {
        transform: translate3d(-100%, 0, 0);
    }
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

a {
    text-decoration: none;
}
</style>




<?php include 'includes/header.php' ?>
<!-- home design -->
<div id="carousel-example-generic" class="carousel slide mt-3" id="carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="pic1">

            </div>
        </div>

        <div class="item">
            <div class="pic2">
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <div class="item">
            <div class="pic3">
                <div class="carousel-caption"></div>
            </div>
        </div>

        <div class="item">
            <div class="pic4">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <div class="item">
            <div class="pic5">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <div class="item">
            <div class="pic6">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <div class="item">
            <div class="pic7">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <div class="item">
            <div class="pic8">
                <div class="carousel-caption"></div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


<!-- Sectors -->
<div class="container">
    <div class="row align-items-center">
        <div class="container text-center rounded">
            <h2 class="text-center" style="       font-family: 'Noto Serif', sans-serif;">Our Sectors</h2>
            <hr class="mb-4 mt-0 align-items-center d-inline-block mx-auto"
                style="width: 160px; background-color: #1b3061; height: 5px" />
            <div class="slider d-flex">
                <div class="logos">
                    <div class="sec_logo" style="">
                        <a href="">
                            <img src="images/Sectors/Education.png" height="100px" width="100px" alt="">
                            <span class="t-black">Education</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="sectors.php">

                            <img src="images/Sectors/Consulting_services.png" height="100px" width="100px" alt="">

                            <span class="text-black">Consulting </span>
                        </a>
                    </div>

                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Corporate.png" height="100px" width="100px" alt="">

                            <span class="text-black">Corporate</span>
                        </a>
                    </div>

                    <div class="sec_logo">
                        <a href="">
                            <img src="images/Sectors/Hospitality_Industry.webp" height="100px" width="100px" alt="">

                            <span class="text-black">Hospitality </span>

                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Logistics.png" height="100px" width="100px" alt="">

                            <span class="text-black">Logistics</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Retail.png" height="100px" width="100px" alt="">

                            <span class="text-black">Retail</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Government.png" height="100px" width="100px" alt="">

                            <span class="text-black">Government</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Healthcare.png" height="100px" width="100px" alt="">

                            <span class="text-black">Healthcare</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Manufacturing.png" height="100px" width="100px" alt="">

                            <span class="text-black">Manufacturing</span>
                        </a>
                    </div>


                </div>
                <div class="logos ml-2">
                    <div class="sec_logo">
                        <a href="">
                            <img src="images/Sectors/Education.png" height="100px" width="100px" alt="">

                            <span class="text-black">Education</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Consulting_services.png" height="100px" width="100px" alt="">

                            <span class="text-black">Consulting </span>
                        </a>
                    </div>

                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Corporate.png" height="100px" width="100px" alt="">

                            <span class="text-black">Corporate</span>
                        </a>
                    </div>

                    <div class="sec_logo">
                        <a href="">
                            <img src="images/Sectors/Hospitality_Industry.webp" height="100px" width="100px" alt="">

                            <span class="text-black">Hospitality</span>

                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Logistics.png" height="100px" width="100px" alt="">

                            <span class="text-black">Logistics</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Retail.png" height="100px" width="100px" alt="">

                            <span class="text-black">Retail</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Government.png" height="100px" width="100px" alt="">

                            <span class="text-black">Government</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Healthcare.png" height="100px" width="100px" alt="">

                            <span class="text-black">Healthcare</span>
                        </a>
                    </div>
                    <div class="sec_logo">
                        <a href="">

                            <img src="images/Sectors/Manufacturing.png" height="100px" width="100px" alt="">

                            <span>Manufacturing</span>
                        </a>
                    </div>


                </div>



            </div>
        </div>
    </div>

</div>

<!-- our services -->
<div class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="pageTitle" style="       font-family: 'Noto Serif', sans-serif;">OUR SERVICES</h2>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 160px; background-color: #1b3061; height: 5px" />
            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item" style="min-height:275px; max-height:300px;">
                        <div class="blog-entry">
                            <a href="/business_support_staff.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/Business_support_auditing.png');">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="/business_support_staff.php">Business Support</a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="item" style="height:275px;">
                        <div class="blog-entry">
                            <a href="deepcleaning_disinfection.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/Deep_cleaning_disinfection.png') ">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="deepcleaning_disinfection.php">DeepCleaning , Disinfection and
                                        Sanitisation</a>
                                </h3>

                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:275px;">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/food_beverage.png') ">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="#">Food & Beverage Services</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:275px;">
                        <div class="blog-entry">
                            <a href="hospital_cleaning_management.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/housekeeping_cleaning_services.png') ">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="hospital_cleaning_management.php">Hospital Cleaning</a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="item" style="min-height:275px; height:300px;">
                        <div class="blog-entry">
                            <a href="Facade_cleaning.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/Facade_cleaning.png')">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="Facade_cleaning.php">Facade Cleaning </a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry">
                            <a href="gardening_landscape.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/Gardening_Landscape.png'); ">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="gardening_landscape.php" class="">Gradening and Landscaping</a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry">
                            <a href="guest_house_management.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/guest_house_management.png')">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="guest_house_management.php">Guest House Management</a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-start"
                                style="background-image: url('imgaes/services/Industrial_cleaning.png');">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="">Industrail Cleaning</a>
                                </h3>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/Patient_Management_Services.png');">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="hospital_cleaning_management.php">Patient Management</a>
                                </h3>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry">
                            <a href="security_management_services.php" class="block-20 d-flex align-items-start"
                                style="background-image: url('images/services/security.png');">

                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading">
                                    <a href="security_management_services.php">Security Management</a>
                                </h3>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- company Accreditation $ client Reviews -->
<section style="padding-top:0;">

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="pageTitle" style="font-family:'Noto Serif',sans-serif;">COMPANY ACCREDITATION &
                    CLIENT REVIEWS</h2>
                <hr class=" mt-0 d-inline-block mx-auto" style="width: 260px; background-color: #1b3061; height: 5px" />
            </div>
            <!-- <div class="col-lg-12"> -->


            <div class="col-lg-3">

                <div class="card-img-wrap"><img class="card-img-top" src="images/services/SM_ISO_Certificate.jpg"
                        alt="">
                </div>


            </div>
            <div class="col-lg-3">

                <div class="card-img-wrap"><img class="card-img-top" src="images/services/SM_WORKFORCE_PVT_LTD.jpg"
                        alt="">
                </div>

            </div>
            <div class="col-lg-3">

                <div class="card-img-wrap"><img class="card-img-top" src="images/services/SM_WORKFORCE_PVT.jpg" alt="">
                </div>

            </div>
            <div class="col-lg-3">

                <div class="card-img-wrap"><img class="card-img-top" src="images/services/SM WORKFORCE PVT_LTD.jpg "
                        alt="">
                </div>

            </div>


        </div>
    </div>
</section>

<!-- our Network -->

<section class="mapWrap">
    <div class="container">
        <div class="text-center">
            <h2 class="pageTitle" style="       font-family: 'Noto Serif', sans-serif;">Our Service Network</h2>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #1b3061; height: 5px" />
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-md-3 col-12">
                <div class="countlist">
                    <ul>
                        <li>
                            <h5>2000+</h5>
                            <span>Employees</span>
                        </li>
                        <li>
                            <h5>15+</h5>
                            <span>Services</span>
                        </li>
                        <li>
                            <h5>9+</h5>
                            <span>State & UTs</span>
                        </li>



                    </ul>
                </div>
            </div>
            <div class="col-md-9 align-items-center text-align-center col-12" ">
                           <svg width=" 900" height="900"">
                           <image href=" ./images/service/map.png" height="900" width="900" />

            </svg>



        </div>
    </div>
    </div>

</section>


<!-- SUBSCRIBE our channel -->

<section>

    <div class=" container" style=" height:300px; background-color: #1b3061; border-radius:15px;">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <h2 class="pageTitle text-center text-white pt-5">SUBSCRIBE OUR NEWSLETTER</h2>


                <p class="text-white page-Title text-center">We Promise not to spam you and will provide
                    important information to improve your
                    account.</p>
                <div class="frmwrap">
                    <form action="#" class="subscribe-form w-100">
                        <div class="form-group d-flex bg-white p-3 " style="margin:40px 200px; border-radius:20px;">
                            <input type="text" class="form-control rounded-left" style="border: none;"
                                placeholder="Enter email address">
                            <button type="submit" class="form-control submit "
                                style="max-width:250px; border:none; align-items:center;"><span class="btn text-white"
                                    style="margin: -0.97rem 0 -0.97rem 70px; padding:10px 50px; background-color:#95201d; border-radius:15px;">Subscribe</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>


<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/video-player.js"></script>
<script type="text/javascript" src="js/jquery.barfiller.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/tweetie.js"></script>
<!-- Custom script for all pages -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/video-player.js"></script>
<script type="text/javascript" src="js/jquery.barfiller.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/tweetie.js"></script>
<!-- Custom script for all pages -->

<script type="text/javascript" src="js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>