<?php include 'templates.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colossus 3.0 :: About Us</title>
    <?php echo $head; ?>


</head>
<body>
<div id="wrapper">

    <!--            Navigation-->
    <?php echo $nav; ?>

    <!--            Header-->

    <div class="row" id="page-title">
        <div class="small-12 text-center">
            <h1>About Us</h1>
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci alias dignissimos dolorum
                eaque ipsum libero minus neque quasi, temporibus veritatis vero. A alias cumque officia unde?</h4>
            <hr/>
        </div>
    </div>

<!--    Our Colossus 3.0 Team -->

    <div class="row">
        <div class="columns small-12">
            <a href="">
                <img src="../img/group.jpg" alt=""/>

                <div id="team-wrapper">
                    <h1>The Colossus 3.0 Team</h1>

                    <hr/>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aliquam amet deserunt
                        dignissimos dolorum enim fuga illo magni natus perferendis perspiciatis qui quia quos repellendus
                        sed, similique velit veritatis.</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row" id="sub-items-row">
        <hr/>
        <div class="medium-4 columns">
            <img data-interchange="[http://placehold.it/625x250, (small)],[http://placehold.it/335x200, (medium)],[http://placehold.it/400x230, (large)]">
        </div>

        <div class="medium-4 columns">
            <img data-interchange="[http://placehold.it/625x250, (small)],[http://placehold.it/335x200, (medium)],[http://placehold.it/400x230, (large)]">
        </div>
        <div class="medium-4 columns">
            <img data-interchange="[http://placehold.it/625x250, (small)],[http://placehold.it/335x200, (medium)],[http://placehold.it/400x230, (large)]">
        </div>

    </div>

    <div class="row" id="fb-row">
        <div class="small-6 columns small-centered text-center">
            <a href="https://www.facebook.com/ColossusDB" target="_blank" title="Connect With Us">
                <span></span>
            </a>
        </div>
    </div>



    <?php echo $footer; ?>
</div>
<?php echo $scripts;?>
</body>
</html>
