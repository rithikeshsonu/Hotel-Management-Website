<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - About</title>
    <?php require('include/links.php') ?>
    <!-- swiper js -- carousels -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <style>
        .box:hover{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Including header source file  -->
    <?php require('include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center"> About us </h2>
        <div class="h-line bg-dark">
        </div>
        <p class = "text-center mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque totam modi <br> facilis et inventore ipsam nulla blanditiis reprehenderit harum iusto!</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <!-- order will order elements according to the position we are giving -->
            <!-- Example: order-lg-1 will places thr element in first place for large devices -->
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class = "mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, hic cupiditate et aliquid deserunt ad incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur molestias, ex velit ullam recusandae id.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4  order-lg-2 order-md-2 order-1">
                <!-- w-100 means the element will occupy 100% space allocated to it. -->
                <img src="images/About/image3.jpg" class = "w-100" alt="">

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/About/image5.svg" alt="hotel" width = "70px">
                    <h4 class = "mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/About/image4.svg" alt="hotel" width = "70px">
                    <h4 class = "mt-3">200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/About/image6.svg" alt="hotel" width = "70px">
                    <h4 class = "mt-3">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/About/image7.svg" alt="hotel" width = "70px">
                    <h4 class = "mt-3">200+ staff</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">Management team</h3>

    <div class="container px-4">
            <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/About/Image2.jpg" class="w-100" alt="team">
            <h5 class= "mt-2">Random name</h5>
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
    <!-- <br><br><br><br><br><br><br> -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            // slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
            el: ".swiper-pagination",
            },
            breakpoints:{
            //screen size In pixels 
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
        });
    </script>

    <!-- Including footer source file  -->
    <?php require('include/footer.php') ?>

</body>
</html>