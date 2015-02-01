<?php

include 'templates.php';
include 'e-details.php'

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colossus 3.0 :: Events</title>
    <?php echo $head; ?>
    <link rel="stylesheet" href="../css/foundation.css"/>
</head>
<body>
<div class="off-canvas-wrap">
    <div class="inner-wrap">
        <div id="wrapper">

            <!--            Navigation-->
            <?php echo $nav; ?>

            <!--            Header-->

            <div class="row" id="page-title">
                <div class="small-12 text-center">
                    <h1>Events</h1>
                    <hr/>
                </div>
            </div>


            <!--            Off Canvas-->

            <nav class="tab-bar show-for-medium-down">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
                </section>

                <section class="right tab-bar-section">
                    <h1 class="title">Events Navigation</h1>
                </section>
            </nav>


            <!--Off canvas menu List-->
            <aside class="left-off-canvas-menu">
                <ul class="off-canvas-list">
                    <li><label>Gaming Events</label></li>
                    <li><a href="#" data-event="nfs">Need for Speed : Most Wanted</a></li>
                    <li><a href="#" data-event="cs">Counter Strike 1.6</a></li>
                    <li><a href="#" data-event="fifa">FIFA 11</a></li>

                    <li><label>Tech Events</label></li>
                    <li><a href="">Lorem ipsum dolor.</a></li>
                    <li><a href="">Ex, quaerat, quidem.</a></li>
                    <li><a href="">Autem, blanditiis, voluptatum?</a></li>
                    <li><a href="">Deleniti, odio, perspiciatis?</a></li>

                    <li><label>Team Events</label></li>
                    <li><a href="">Lorem ipsum dolor.</a></li>
                    <li><a href="">Ex, quaerat, quidem.</a></li>
                    <li><a href="">Autem, blanditiis, voluptatum?</a></li>
                    <li><a href="">Deleniti, odio, perspiciatis?</a></li>

                </ul>
            </aside>


            <!--Main Content-->

            <div class="row">
                <div class="small-12 columns text-center">
                    <ul class="breadcrumbs">
                        <li>Events</li>
                        <li>Gaming Events</li>
                        <li>Need for Speed: Most Wanted</li>
                    </ul>
                </div>
            </div>


            <div class="row" id="event-content-wrapper">
                <!--                    Side Nav-->

                <div class="large-3 columns hide-for-medium-down">
                    <ul class="side-nav radius">
                        <li class="header">Gaming Events</li>
                        <li><a href="#" data-event="nfs">Need for Speed : Most Wanted</a></li>
                        <li><a href="#" data-event="cs">Counter Strike 1.6</a></li>
                        <li><a href="#" data-event="fifa">FIFA 11</a></li>

                        <li class="divider"></li>

                        <li class="header">Tech Events</li>
                        <li><a href="">Lorem ipsum dolor.</a></li>
                        <li><a href="">Ex, quaerat, quidem.</a></li>
                        <li><a href="">Autem, blanditiis, voluptatum?</a></li>
                        <li><a href="">Deleniti, odio, perspiciatis?</a></li>

                        <li class="divider"></li>

                        <li class="header">Team Events</li>
                        <li><a href="">Lorem ipsum dolor.</a></li>
                        <li><a href="">Ex, quaerat, quidem.</a></li>
                        <li><a href="">Autem, blanditiis, voluptatum?</a></li>
                        <li><a href="">Deleniti, odio, perspiciatis?</a></li>

                    </ul>
                </div>



                <!--                Event Content-->
                <div class="large-9 columns " id="event-content">
                    <img src="<?php echo $events_container[$event]["img"]?>" alt=""/>

                    <div class="row event-details">
                        <div class="small-12 columns small-centered">
                            <h1><b><?php echo $events_container[$event]["title"] ?></b></h1>
                            <hr/>
                            <p><?php echo $events_container[$event]["content"] ?> </p>

                            <p><?php echo $events_container[$event]["participants"] ?></p>
                        </div>
                    </div>
                </div>


            </div>

            <?php echo $footer; ?>
        </div>

    </div>
</div>
<?php echo $scripts; ?>
</body>
</html>