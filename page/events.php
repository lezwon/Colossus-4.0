<?php include 'templates.php'; ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Colossus 3.0 :: Events</title>
        <?php echo $head; ?>


    </head>
    <body>
        <div id="wrapper">

            <!--            Navigation-->
            <?php echo $nav; ?>

            <!--            Header-->

            <div class="row" id="page-title">
                <div class="small-12 text-center">
                    <h1>Events</h1>

                    <h4>Colossus 3.0 introduces a number of events to test the skills of the participants.
                        Students will participate in the following events to match their wits and knowledge and
                        ultimately emerge as a new champion.
                    </h4>
                    <hr/>
                </div>
            </div>

            <div class="row">
                <div class="large-4 columns event-column" id="gaming-events-column">

                    <div class="details row text-left">
                        <h1>Gaming Events</h1>
                        <hr />
                        <ul class="no-bullet">
                            <li><a data-event="nfs"   href="event.php">Need for Speed : Most Wanted</a></li>
                            <li><a data-event="cs"    href="event.php">Counter Strike 1.6</a></li>
                            <li><a data-event="fifa"  href="event.php">FIFA 11</a></li>
                        </ul>
                    </div>
                </div>

                <div class="large-4 columns event-column" id="tech-events-column">
                    <div class="details row text-left">
                        <h1>Tech Events</h1>
                        <hr />
                        <ul class="no-bullet">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Big ipsum dolor</a></li>
                            <li><a href="#">Gaga Today</a></li>
                        </ul>
                    </div>
                </div>

                <div class="large-4 columns event-column" id="team-events-column">
                    <div class="details row text-left">
                        <h1>Team Events</h1>
                        <hr />
                        <ul class="no-bullet">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Big ipsum dolor</a></li>
                            <li><a href="#">Gaga Today</a></li>
                        </ul>
                    </div>
            </div>


            <?php echo $footer; ?>
        </div>
    <?php echo $scripts;?>
    </body>
</html>
