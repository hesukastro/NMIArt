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
        <h2 class="center uppercase">Studio</h2>
        
        <div class="row">
            <!-- Fullscreen Bootstrap Carousel from https://codepen.io/chopfitzroy/pen/JoKMgG -->
            <div id="car-gallery" class="carousel slide carousel-fade col-xs-12 col-md-10 col-md-offset-1" data-ride="carousel">
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
                    <div class="item active">
                        <img class="img-long" src="images/studio/1.jpg">
                        <div class="carousel-caption">
                            <h3>Title</h3>
                            <p>Caption
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-long" src="images/studio/2.jpg">
                        <div class="carousel-caption">
                            <h3>Title</h3>
                            <p>Caption
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-long" src="images/studio/3.jpg">
                        <div class="carousel-caption">
                            <h3>Title</h3>
                            <p>Caption
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-long" src="images/studio/4.jpg">
                        <div class="carousel-caption">
                            <h3>Title</h3>
                            <p>Caption
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-long" src="images/studio/5.jpg">
                        <div class="carousel-caption">
                            <h3>Title</h3>
                            <p>Caption
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-long" src="images/studio/6_6.png">
                        <div class="carousel-caption">
                            <h3>Title</h3>
                            <p>Caption
                        </div>
                    </div>
                </div>
            </div> <!-- End of "carousel" div -->

            <div class="col-xs-12 col-md-10 col-md-offset-1 mar-top-lg">
                <p>Closer look into the sacred space where the mixology of Art and Passion meets. Committed to creating authentic art work fueling from expressionism, passion and positive energy. This is where hours have spent mixing, making and moving with colour. Her works mostly consist of mixed media ranging from acrylic, spray paint, pigment, gold leafs and textured canvas. 
            </div>
        </div> <!-- End of "row" div -->
    </div> <!-- End of "container" div -->
</body>
</html>