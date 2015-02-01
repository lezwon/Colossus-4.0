<?php include 'templates.php'; ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Colossus 3.0 :: Gallery</title>
        <?php echo $head; ?>

        <link href="../nanoGALLERY-master/css/nanogallery.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div id="wrapper">

            <!--            Navigation-->
            <?php echo $nav; ?>

            <!--            Header-->

            <div class="row" id="page-title">
                <div class="small-12 text-center">
                    <h1>Gallery</h1>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae deleniti, dolor,
                        doloribus error eum inventore ipsum iusto nulla numquam, quam quidem quis temporibus vitae.</h4>
                    <hr/>
                </div>
            </div>

<!--            Gallery Pictures-->

            <div class="row" id="gallery-row">
                <div class="large-12 columns">
                    <div id="gallery"></div>
                </div>
            </div>



            <?php echo $footer; ?>
        </div>
    <?php echo $scripts;?>
        <script type="text/javascript" src="../nanoGALLERY-master/third.party/hammer.js/hammer.min.js"></script>
        <script type="text/javascript" src="../nanoGALLERY-master/jquery.nanogallery.js"></script>
    </body>
</html>
