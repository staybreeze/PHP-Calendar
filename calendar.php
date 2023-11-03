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
            border-bottom: 5px solid rgba(125, 92, 223);
            border-style: double;

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
            height: 520px;

            border-right: 1px solid rgba(125, 92, 223);
            /* border-style: double; */
            /* background-color: cadetblue ; */
            /* border-left:none; */

        }



        .main {
            width: calc(100% - 600px);
            height: 520px;
            border-left: 1px solid rgba(125, 92, 223);

            padding-top: 180px;


        }

        .footer {
            width: 100%;
            height: 5vh;
            border-top: 5px solid rgba(125, 92, 223);
            border-style: double;

        }

        .img {
            position: fixed;
            top: 60px;
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
            bottom: 10px;
            left: 5px;
            /* right:185px; */
            background-color: rgba(211, 204, 214, 0.859);
            width: 435px;
            height: 50px;
            opacity: 0.5;

        }

        table,
        th,
        tr,
        td {
            width: 600px;
            margin: auto;
        }

        td {
            width: 95px;
            height: 50px;
            text-align: center;
        }

        .week {
            font-size: large;
            font-weight: bolder;
            background-color: beige;
            font-family: 'Yusei Magic', sans-serif;
            color: rgba(53, 78, 107);
            background-color: #ecd453;
        }

        .td_date,
        .td_weekend {
            font-family: 'Yusei Magic', sans-serif;
        }

        .td_date {
            color: gray;
        }

        .year-number {
            /* background-color: #ecd453; */
            width: 339.5px;
            height: 15%;
            display: inline-block;
            position: fixed;
            top: 75px;
            padding-top: 5px;
            font-size: 45px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            background-color: rgba(125, 92, 223, 0.419);
        }

        .year {
            /* background-color: pink; */
            width: 339.5px;
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
            width: 339.5px;
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

        }

        .month {

            /* background-color:#ecd453; */
            width: 339.5px;
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
        a{
         text-decoration: none;
         color:rgba(125, 92, 223) ;
         font-size: 50px;
         position: fixed;
        }
        .a_right{
            top:400px;
            right:0px;
        }

        .a_left{
            top:400px;

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
            <img src="./img/629F72D2930AA801F548F23C5F94A5DE.jpg" alt="100%" width="450px">
            <img class="img" src="./img/未命名-8.png" alt="" width="130px">
        </aside>
        <main class="main">
            <?php


            if (isset($_GET['month']) && (isset($_GET['year']))) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('m');
                $year = date('Y');
            }

            ?>
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
                    <td>日</td>
                    <td>一</td>
                    <td>二</td>
                    <td>三</td>
                    <td>四</td>
                    <td>五</td>
                    <td>六</td>
                </tr>
                <?php
                for ($i = 0; $i < $weeks; $i++) {
                    echo "<tr>";
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
        </main>


    </div>
    <footer class="footer">

        <div class="box-2"></div>
        <img class="img2" src="./img/未命名10.png" alt="" width="400px">
    </footer>
</body>

</html>