<html>
<head>
    <title>NMI Gallery</title>
    <!-- Site-wide dependencies -->
    <?php include 'templates/dependencies.php' ?>
    <!-- Page specific dependencies -->
    <link rel="stylesheet" href="css/carouselFade.css">
</head>
<body>
    <?php include 'templates/navBar.php' ?>

    <div class="container-fluid col-sm-offset-2">
        <h2 class="center uppercase">Gallery</h2>
        
        <div class="row">
            <div id="car-gallery" class="carousel slide carousel-fade col-xs-12 col-md-4 col-md-offset-1" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#car-gallery" data-slide-to="0" class="active"></li>
                    <li data-target="#car-gallery" data-slide-to="1"></li>
                    <li data-target="#car-gallery" data-slide-to="2"></li>
                    <li data-target="#car-gallery" data-slide-to="3"></li>
                    <li data-target="#car-gallery" data-slide-to="4"></li>
                    <li data-target="#car-gallery" data-slide-to="5"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- Outside front -->
                    <div class="item active">
                        <img src="images/gallery/1.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/4.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/6.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/7.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/8.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/11_c.jpg">
                    </div>
                </div>
            </div> <!-- End of "carousel" div -->

            <!-- Spacers -->
            <div class="visible-xs visible-sm hidden-md hidden-lg mar-top-xl">
                &nbsp;
            </div>

            <div class="visible-lg hidden-xs hidden-sm hidden-md mar-top-lg">
                &nbsp;
            </div>
            <!-- End of Spacers -->

            <div class="col-xs-12 col-md-6">
                <p>NMI Art Gallery houses contemporary modern art works, freshly establish in 2018 and run by the artist herself. Nadine Ibay has broken the odds of putting up her own gallery, with her paintings on white walls surrounded her art genuinely lives and glistens in their own little space here. 
            </div>

            <div id="car-gallery2" class="carousel slide carousel-fade col-xs-12 col-md-6 mar-top-lg" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#car-gallery2" data-slide-to="0" class="active"></li>
                    <li data-target="#car-gallery2" data-slide-to="1"></li>
                    <li data-target="#car-gallery2" data-slide-to="2"></li>
                    <li data-target="#car-gallery2" data-slide-to="3"></li>
                    <li data-target="#car-gallery2" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="max-height: 300px;" role="listbox">
                    <div class="item active">
                        <img src="images/gallery/bg_c.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/2_c.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/3_c.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/5_c.jpg">
                    </div>
                    <div class="item">
                        <img src="images/gallery/9_c.jpg">
                    </div>
                </div>
            </div> <!-- End of "carousel" div -->
        </div> <!-- End of "row" div -->
    </div> <!-- End of "container" div -->
</body>
</html>