<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100;600;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Limelight&family=Yusei+Magic&family=Zen+Maru+Gothic:wght@300;400;700;900&display=swap');

        h3 {
            font-family: 'Big Shoulders Inline Text', cursive;
            font-size: 58px;
            color: gold;
        }


        * {
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        body {
            width: 100vw;
            margin: auto;
            background-color: rgba(53, 78, 107);
        }



        .nav {
            width: 100vw;
            height: 12vh;
            border: 5px solid rgba(125, 92, 223);
            border-style: double;
            border-left: none;
            border-top: none;
            padding-left: 5px;
            padding-top: 3px;

        }

        .container {
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            /* background-color:beige;   */
            justify-content: center;
        }

        .aside-1 {
            width: 600px;
            height: 100%;



        }



        .main {
            width: calc(100% - 600px);
            height: 100%;
            border-left: 5px solid rgba(125, 92, 223);
            border-right: 5px solid rgba(125, 92, 223);
            border-top: 0;
            /* border-right: 0; */
            border-style: double;
            padding-top: 180px;


        }

        .section2 {
            margin-top: 10px;
            width: 100%;
            height: 5vh;
            border-top: 5px solid rgba(125, 92, 223);
            border-style: double;
            border-left: 0.5px solid rgba(125, 92, 223);
            border-right: 0;

            text-align: center;
            font-size: 12px;
            padding-top: 4px;
            color: #ecd453;
        }

        .box-img {
            width: 600px;
            height: 100%;
            position: fixed;
            top: 75px;

        }

        .img {
            position: fixed;
            top: 70px;
            left: 425px;
            /* top: 100px;
            right: 5px; */


        }

        .box-1 {
            position: fixed;
            top: 100px;
            left: 436px;
            /* right: 40px; */
            background-color: rgba(125, 92, 223, 0.419);
            width: 90px;
            height: 465px;
            opacity: 0.8;
        }

        .img2 {
            position: fixed;
            bottom: 0px;
            left: 20px;

            /* right:175px; */

        }

        .box-2 {
            position: fixed;
            bottom: 0px;
            left: 5px;
            /* right:185px; */
            background-color: rgba(211, 204, 214, 0.859);
            width: 435px;
            height: 50px;
            opacity: 0.5;

        }

        table {
            width: 600px;
            margin: auto;
        }

        .tr_special  {
            width: 95px;
            height: 41.3px;
            text-align: center;
        }

        .tr_normal{
            /* width: 95px; */
            height: 50px;
            text-align: center;
        }

        .week {
            width: 95px;
            height: 50px; 
            text-align: center;
            font-size: large;
            font-weight: bolder;
            background-color: beige;
            /* font-family: 'Yusei Magic', sans-serif; */
            font-family: 'Big Shoulders Inline Text', cursive;
            color: rgba(53, 78, 107);
            background-color: #ecd453;
        }

        .td_date,
        .td_weekend {
            font-family: 'Yusei Magic', sans-serif;
            /* font-family: 'Big Shoulders Inline Text', cursive; */
        }

        .td_date {
            color: gray;
        }

        .year-number {
            /* background-color: #ecd453; */
            width: 337.5px;
            height: 15%;
            display: inline-block;
            position: fixed;
            top: 75px;
            padding-top: 8px;
            font-size: 45px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            background-color: rgba(125, 92, 223, 0.419);
        }

        .year {
            /* background-color: pink; */
            width: 337.5px;
            height: 12%;
            display: inline-block;
            position: fixed;
            top: 169px;
            /* padding-top:5px; */
            font-size: 56px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            text-align: center;
            font-weight: bolder;
            background-color: rgba(125, 92, 223, 0.419);
            border-bottom: 2px solid rgba(125, 92, 223);

        }

        .month-number {
            /* background-color: pink; */
            width: 337.5px;
            height: 15%;
            display: inline-block;
            position: fixed;
            top: 75px;
            right: 0px;
            /* padding-top:5px; */
            font-size: 45px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            background-color: rgba(125, 92, 223, 0.419);
            padding-top: 8px;


        }

        .month {

            /* background-color:#ecd453; */
            width: 337.5px;
            height: 12%;
            display: inline-block;
            position: fixed;
            top: 169px;
            right: 0;
            padding-top: 5px;
            font-size: 56px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            text-align: center;
            font-weight: bolder;
            background-color: rgba(125, 92, 223, 0.419);
            border-bottom: 2px solid rgba(125, 92, 223);


        }

        a {
            text-decoration: none;
            color: rgba(125, 92, 223);
            font-size: 50px;
            position: fixed;
        }

        .a_right {
            top: 400px;
            right: 0px;
        }

        .a_left {
            top: 400px;

        }

        footer {
            width: 100%;
            height: 100%
        }
    </style>
</head>

<body>
    <nav class="nav">
        <h3>
            C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
        </h3>
    </nav>
    <div class="container">

        <aside class="aside-1">
            <div class="box-1"></div>
            <?php

            if (isset($_GET['month']) && (isset($_GET['year']))) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('m');
                $year = date('Y');
            }
            ?>

            <!-- <img class="img" src="./img/未命名-8.png" alt="" width="130px"> -->

        </aside>
        <main class="main">
            <div class="section1">
                <div class="year-number">
                    <?php
                    $thisMonth = date("Y");
                    $thisFirstDay = date("{$year}-{$month}-1");
                    $thisFirstDate = date('w', strtotime($thisFirstDay));
                    $thisMonthDays = date("t");
                    $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
                    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
                    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));





                    echo "<h2 style='text-align:center'>";
                    echo date($year);
                    echo "</h2>";

                    // echo "<h2 style='text-align:center'>";
                    // echo date($month );
                    // echo "</h2>";


                    ?>
                </div>
                <div class="month-number">
                    <?php

                    echo "<h2 style='text-align:center'>";
                    echo date($month);
                    echo "</h2>";
                    ?>
                </div>
                <div class="year">YEAR</div>
                <div class="month">MONTH</div>
                <div style='display:flex;margin:auto;justify-content:space-between'>

                    <?php

                    $nextYear = $year;
                    $prevYear = $year;

                    if (($month + 1) > 12) {

                        $next = 1;
                        $nextYear = $nextYear + 1;
                    } else {

                        $next = $month + 1;
                    }

                    if (($month - 1) < 1) {

                        $prev = 12;
                        $prevYear = $year - 1;
                    } else {
                        $prev = $month - 1;
                    }

                    ?>






                    <a class="a_left" href='?year=<?= $prevYear; ?>&month=<?= $prev; ?>'>﹤</a>
                    <a class="a_right" href='?year=<?= $nextYear; ?>&month=<?= $next; ?>'>﹥</a>
                </div>

                <br>
                <table>
                    <tr class="week">
                        <td>Sun
                        </td>
                        <td>Mon</td>
                        <td>Tue</td>
                        <td>Wed</td>
                        <td>Thr</td>
                        <td>Fri</td>
                        <td>Sat</td>
                    </tr>
                    <?php
                    for ($i = 0; $i < $weeks; $i++) {
                        if ($weeks <=5) {

                            echo "<tr class='tr_normal'>";
                        } else {
                            echo "<tr class='tr_special'>";
                        }


                        for ($j = 0; $j < 7; $j++) {
                            $addDays = 7 * $i + $j;
                            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                            if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                                echo "<td style='background:rgba(125, 92, 223,0.5);color:orange' class='td_weekend'>";
                            } else {
                                echo "<td  style='background:rgba(211, 204, 214);color:gray' class='td_date'>";
                            }
                            if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                                echo date("j", $thisCellDate);
                            }

                            echo "</td>";
                        }
                        echo "</tr>";
                    }

                    echo "</table>";
                    ?>
            </div>
            <div class="section2">
                <p><small>Copyright WSL Web All Rights Reserved./Images credit all for 鄉原古統.</small></p>

            </div>
        </main>
        <aside class="aside-1">



    </div>
    <div class="box-img">
        <?php
        if ($month == 11) {
            $img = "A";
        }
        if ($month == 12) {
            $img = "B";
        }
        if ($month == 1) {
            $img = "C";
        }
        if ($month == 2) {
            $img = "D";
        }
        if ($month == 3) {
            $img = "E";
        }
        if ($month == 4) {
            $img = "F";
        }
        if ($month == 5) {
            $img = "G";
        }
        if ($month == 6) {
            $img = "G";
        }
        if ($month == 7) {
            $img = "G";
        }
        if ($month == 8) {
            $img = "G";
        }
        if ($month == 9) {
            $img = "G";
        }
        if ($month == 10) {
            $img = "G";
        }
        switch ($img) {

            case "A":
                echo "<img src='./img/B.jpg' alt='100%' height='550px'>";
                break;
            case "B":
                echo "<img src='./img/C.jpg' alt='100%' height='550px'>";
                break;
            case "C";

                echo "<img src='./img/D.jpg' alt='100%' height='550px'>";
                break;
            case "D";


                echo "<img src='./img/E.jpg' alt='100%' height='550px'>";

                break;
            case "E";


                echo "<img src='./img/F.jpg' alt='100%' height='550px'>";

                break;
            case "F";


                echo "<img src='./img/G.jpg' alt='100%' height='550px'>";

                break;
            default;
                echo "<img src='./img/A.jpg' alt='100%' height='550px'>";
                break;
        }



        ?>
        <div class="box-2"></div>
        <!-- <img class="img2" src="./img/未命名10.png" alt="" width="400px"> -->
    </div>
</body>

</html>