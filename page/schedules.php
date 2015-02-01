<?php include 'templates.php'; ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colossus 3.0 :: Schedule</title>
    <?php echo $head; ?>

</head>
<body>
    <div id="wrapper">
        <?php echo $nav; ?>

        <div class="row" id="page-title">
            <div class="small-12 text-center">
                <h1>Schedule</h1>
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid cumque cupiditate
                    distinctio earum eius ex illum, iure magnam natus placeat possimus praesentium quam, saepe sed,
                    tenetur vero. Consequatur, quam.</h4>
                <hr/>
            </div>
        </div>

        <div class="row" id="days-row">
            <a class="small-4 medium-3 columns small-push-1 medium-push-2 button  round" data-orbit-link="headline-1">Day 1</a>
            <a class="small-4 medium-3 columns small-pull-1 medium-pull-2 button  round" data-orbit-link="headline-2">Day 2</a>
        </div>


        <div class="row" id="schedule-table-row">
            <div class="small-12 columns">

                <ul  data-orbit class="no-bullet">
                    <li data-orbit-slide="headline-1">
                        <table>
                            <thead>
                            <tr>
                                <th>Timings</th>
                                <th>Event</th>
                                <th>Arena</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>9am to 9.30am</td>
                                <td>Registration</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9.30am to 10.15am</td>
                                <td>Inaugration</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>10.15am to 10.30am</td>
                                <td>TEA BREAK</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>10.30am to 11.30am</td>
                                <td>Showdown</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>11.30am to 12.15pm</td>
                                <td>Code Warz </td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            <tr>
                                <td>12.15pm to 1.00pm</td>
                                <td>Dr. Fix IT</td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            <tr>
                                <td>12.30 pm to 1.15pm</td>
                                <td>XQuizIT - Preliminary Round</td>
                                <td>Room No. 8</td>
                            </tr>
                            <tr>
                                <td>1.15pm to 2.30pm</td>
                                <td>LUNCH BREAK</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2.30pm to 3.15pm</td>
                                <td>Anim8</td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            <tr>
                                <td>2.30pm to 3.30pm</td>
                                <td>Mystery Maze</td>
                                <td>Campus</td>
                            </tr>
                            <tr>
                                <td>3.15pm to 4.00pm</td>
                                <td>Club House</td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li data-orbit-slide="headline-2">
                        <table >
                            <thead>
                            <tr>
                                <th>Timings</th>
                                <th>Event</th>
                                <th>Arena</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>9.30am to 9.45am</td>
                                <td>TEA BREAK</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10.00am to 10.45am</td>
                                <td>Salesman</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>10.00pm to 11.00am</td>
                                <td>Webster</td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            <tr>
                                <td>11.00pm to 11.45pm</td>
                                <td>Just Do IT</td>
                                <td>Room No 8</td>
                            </tr>
                            <tr>
                                <td>11.15am to 11.45pm</td>
                                <td>MouseKiller</td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            <tr>
                                <td>12.00pm to 1.00pm</td>
                                <td>MasterPiece</td>
                                <td>BCA Lab - II (1st Floor)</td>
                            </tr>
                            <tr>
                                <td>1.00pm to 2.00pm</td>
                                <td>LUNCH BREAK</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2.15pm to 3.15pm</td>
                                <td>XQuizIT Finals</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>2.15pm to 3.15pm</td>
                                <td>E Waste</td>
                                <td>Room No 8</td>
                            </tr>
                            <tr>
                                <td>3.30pm to 4.00pm</td>
                                <td>Reel IT, Spread IT Out, SnapShot</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>4.00pm to 4.30pm</td>
                                <td>RoboTrix</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>4.30pm to 4.45pm</td>
                                <td>TEA BREAK</td>
                                <td>AV Hall</td>
                            </tr>
                            <tr>
                                <td>4.45pm to 5.15pm</td>
                                <td>VALEDICTORY </td>
                                <td>AV Hall</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>

            </div>


        </div>

        <?php echo $footer; ?>
    </div>



    <?php echo $scripts;?>

</body>
</html>