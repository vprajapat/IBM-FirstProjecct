@include('header')

 <!-- image section -->

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>

        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/jkit1.png" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/jkit2.png" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/jkit3.png" alt="New York" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/jkit4.png" alt="New York" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/jkit5.png" alt="New York" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- Carousel finished -->

    <!-- latest news and update -->
    <div class="container">
        <div class="row border mt-5 ml-2 text-center">
            <div class="col border ">
                <p class="text-danger pt-2">Latest News & Updates</p>
            </div>

            <div class="col-9 pt-2  border">
                <marquee>
                    <a class="text-decoration-none" href="#">ADMISSION OPEN NOW FOR 2021 HURRY UP!!!! LIMITED SEATS
                        ONLY</a>
                    <a class="text-decoration-none" href="#">ADMISSION OPEN NOW FOR 2021 HURRY UP!!!! LIMITED SEATS
                        ONLY</a>
                    <a class="text-decoration-none" href="#">ADMISSION OPEN NOW FOR 2021 HURRY UP!!!! LIMITED SEATS
                        ONLY</a>
                </marquee>
            </div>

        </div>
    </div>

@include('footer')