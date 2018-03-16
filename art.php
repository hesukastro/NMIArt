<?php include 'phpscripts/dbcon.php';
      $id = $_GET['id'];
      $artwork = getArtwork($id);
      $showcases = getShowcases($artwork['name']);
?>
<html>
<head>
    <base href="/" />
    <title>NMI Gallery</title>
    <!-- Site-wide dependencies -->
    <?php include 'templates/dependencies.php' ?>
    <!-- Page specific dependencies -->
</head>
<body>
    <?php include 'templates/navBar.php' ?>

    <div class="container-fluid col-sm-offset-2">
        <div class="row">
            <!-- Right side -->
            <!-- There is a bug for the affix plugin included in Bootstrap v3
                 this section is a workaround for that -->
            <div class="col-xs-10 col-xs-offset-1 visible-xs visible-sm">
                <h1 class="mar-bot-lg center"><?php echo $artwork['name']; ?></h1>
                <p><?php echo $artwork['caption']; ?>
            </div>

            <!-- Left side -->
            <div class="art-display col-xs-12 col-md-6 col-md-offset-1">
                <?php echo '<img class="img-rounded pad-left-xs pad-right-xs mar-top-sm col-sm-12 img-responsive" src="images/art/'.$artwork['size'].'/'.$artwork['name'].'.png">' ?>
                <?php
                    foreach ($showcases as $showcase) {
                        echo '<img class="' .$showcase['class']. '" src="images/art/showcases/' .$artwork['name']. '_' .$showcase['id']. '">';
                    }
                ?>
            </div>

            <!-- Right side -->
            <!-- There is a bug for the affix plugin included in Bootstrap v3
                 this section is a workaround for that -->
            <div class="col-xs-12 visible-xs">
                <p><a class="btn btn-dark btn-lg mar-top-md" href="artworks.php"><span class="glyphicon glyphicon-menu-left"></span>Back</a>
            </div>
            
            <!-- Right side -->
            <div class="col-md-4 visible-md visible-lg">
                <div class="col-md-3 fixed">
                    <h1 class="mar-bot-lg center"><?php echo $artwork['name']; ?></h1>
                    <p><?php echo $artwork['caption']; ?>
                </div>
            </div>

            <a id="btn-top" href="#" class="visible-xs btn btn-dark btn-lg fixed-bot-right" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div> <!-- End of "row" div -->
    </div> <!-- End of "container" div -->
</body>
</html>