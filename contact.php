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
        <h2 class="center uppercase">Contact Us</h2>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="row">
                    <div class="col-xs-12 icon-group">
                        <span class="icon-text"><img class="icon" src="images/icons/instagram.svg"> @nadineibay</span>
                    </div>
                </div>
                <form id="message-form" method="POST" action="phpScripts/contact.php">
                <div class="row mar-remove">
                        <div class="form-group col-xs-12">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row mar-remove">
                        <div class="form-group col-xs-12 col-md-6">
                            <input type="text" class="form-control" placeholder="Name" value="ibaynadine@gmail.com" disabled>
                        </div>
                        <div class="form-group col-xs-12 col-md-6">
                            <input id="email" name="email" type="email" class="form-control col-md-6" placeholder="Email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row mar-remove">
                        <div class="form-group col-xs-12">
                            <textarea id="message" name="message" class="form-control" rows="10" style="height:50%;" placeholder="Message" required></textarea>
                            <button class="btn btn-dark btn-lg mar-top-md pull-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <div id="map-container" style="height: 85%;" class="map img-rounded"></div>
            </div>
        </div> <!-- End of "row" div -->
    </div> <!-- End of "container" div -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGrH76PnlDAUluvgRSPZwhUwKC-HESLls" type="text/javascript"></script>
    <script src="javascript\gMap.js"></script>
</body>
</html>