<html>
<head>
    <title>NMI Gallery</title>
    <!-- Site-wide dependencies -->
    <?php include 'templates/dependencies.php' ?>
    <!-- Page specific dependencies -->
</head>
<body>
    <?php include 'templates/navBar.php' ?>

    <div class="container-fluid col-sm-offset-2">
        <h2 class="center uppercase">Art</h2>
        
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 mar-bot-md">
                <p>A various display of collection of works painted and curated by Nadine Ibay.
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#fourx4">4x4</a></li>
                    <li><a data-toggle="tab" href="#fourx6">4x6</a></li>
                    <li><a data-toggle="tab" href="#sixx4">6x4</a></li>
                </ul>
            </div>
            
            <div class="col-xs-12 col-md-10 col-md-offset-1 mar-bot-md">
                <div class="tab-content">
                    <div id="fourx4" class="tab-pane fade in active">
                        <h2>4x4</h2>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=1">
                                    <img class="img-responsive" src="images/art/4x4/Afternoon.png">
                                    <div class="caption">
                                        <p><strong>Afternoon</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=2">
                                    <img class="img-responsive" src="images/art/4x4/Almost Here.png">
                                    <div class="caption">
                                        <p><strong>Almost Here</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- This fixes the weird wrapping for smaller devices -->
                        <div class="clearfix visible-sm"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=3">
                                    <img class="img-responsive" src="images/art/4x4/Winter of Our Youth.png">
                                    <div class="caption">
                                        <p><strong>Winter of Our Youth</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=4">
                                    <img class="img-responsive" src="images/art/4x4/Moonrise Kingdom.png">
                                    <div class="caption">
                                        <p><strong>Moonrise Kingdom</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=5">
                                    <img class="img-responsive" src="images/art/4x4/Ready or Not.png">
                                    <div class="caption">
                                        <p><strong>Ready or Not</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=6">
                                    <img class="img-responsive" src="images/art/4x4/The Ballad of Me And My Brain.png">
                                    <div class="caption">
                                        <p><strong>The Ballad of Me And My Brain</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=7">
                                    <img class="img-responsive" src="images/art/4x4/Another Night in Mars.png">
                                    <div class="caption">
                                        <p><strong>Another Night in Mars</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=8">
                                    <img class="img-responsive" src="images/art/4x4/The Sound.png">
                                    <div class="caption">
                                        <p><strong>The Sound</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=9">
                                    <img class="img-responsive" src="images/art/4x4/You.png">
                                    <div class="caption">
                                        <p><strong>You</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> <!-- End of 4x4 tab -->

                    <div id="fourx6" class="tab-pane fade">
                        <h2>4x6</h2>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=12">
                                    <img class="img-responsive" src="images/art/4x6/We Looked Like Giants.png">
                                    <div class="caption">
                                        <p><strong>We Looked Like Giants</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="mural.php?id=10">
                                    <div id="car-gallery" class="carousel slide carousel-fade" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#car-gallery" data-slide-to="0" class="active"></li>
                                            <li data-target="#car-gallery" data-slide-to="1"></li>
                                            <li data-target="#car-gallery" data-slide-to="2"></li>
                                            <li data-target="#car-gallery" data-slide-to="3"></li>
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="images/art/mural1/1.png">
                                            </div>
                                            <div class="item">
                                                <img src="images/art/mural1/2.png">
                                            </div>
                                            <div class="item">
                                                <img src="images/art/mural1/3.png">
                                            </div>
                                            <div class="item">
                                                <img src="images/art/mural1/4.png">
                                            </div>
                                        </div>
                                    </div> <!-- End of "carousel" div -->
                                    <div class="caption">
                                        <p><strong>A Tribe Called Red</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=17">
                                    <img class="img-responsive" src="images/art/4x6/Untitled (1).png">
                                    <div class="caption">
                                        <p><strong>Untitled (1)</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=21">
                                    <img class="img-responsive" src="images/art/4x6/Untitled (5).png">
                                    <div class="caption">
                                        <p><strong>Untitled (5)</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=11">
                                    <img class="img-responsive" src="images/art/4x6/Candlxs.png">
                                    <div class="caption">
                                        <p><strong>Candlxs</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="art.php?id=18">
                                    <img class="img-responsive" src="images/art/4x6/Untitled (2).png">
                                    <div class="caption">
                                        <p><strong>Untitled (2)</strong>
                                    </div>
                                </a>
                            </div>
                        </div>                        
                    </div> <!-- End of 4x6 tab -->

                    <div id="sixx4" class="tab-pane fade">
                        <h2>6x4</h2>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <a href="art.php?id=16">
                                    <img class="img-responsive" src="images/art/6x4/Untitled.png">
                                    <div class="caption">
                                        <p><strong>Untitled</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <a href="art.php?id=19">
                                    <img class="img-responsive" src="images/art/6x4/Untitled (3).png">
                                    <div class="caption">
                                        <p><strong>Untitled (3)</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <a href="art.php?id=15">
                                    <img class="img-responsive" src="images/art/6x4/You Are A Tourist.png">
                                    <div class="caption">
                                        <p><strong>You Are A Tourist</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <a href="art.php?id=14">
                                    <img class="img-responsive" src="images/art/6x4/Back To The Woods.png">
                                    <div class="caption">
                                        <p><strong>Back to The Woods</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <a href="art.php?id=13">
                                    <img class="img-responsive" src="images/art/6x4/A World Alone.png">
                                    <div class="caption">
                                        <p><strong>A World Alone</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <a href="art.php?id=20">
                                    <img class="img-responsive" src="images/art/6x4/Untitled (4).png">
                                    <div class="caption">
                                        <p><strong>Untitled (4)</strong>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div> <!-- End of 6x4 tab -->
                </div> <!-- End of tab-content div -->
            </div> <!-- End of outer "col" div (containing the items) -->

            <a id="btn-top" href="#" class="visible-xs btn btn-dark btn-lg fixed-bot-right" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div> <!-- End of "row" div -->
    </div> <!-- End of "container" div -->
</body>
</html>