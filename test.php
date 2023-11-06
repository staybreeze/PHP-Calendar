<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100;600;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Limelight&family=Yusei+Magic&family=Zen+Maru+Gothic:wght@300;400;700;900&display=swap');


        @import url('https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@900&family=Zen+Old+Mincho:wght@900&display=swap');


        * {
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        body {
            width: 1920px;
            height: 1080px;
            margin: auto;
            background-color: rgba(53, 78, 107);
        }

        .nav,
        .aside,
        .section1,
        .section2,
        .section3 {

            border: 10px solid rgba(125, 92, 223);
            border-style: double;

        }

        .section {
            display: flex;
            flex-wrap: wrap;
        }

        .nav {
            width: 100%;
            height: 13%;
            display: flex;
            border-left: none;
            border-top: none;
            padding-left: 5px;
            padding-top: 3px;
            border-bottom: none;
        }

        .nav-left,
        .nav-center-l,
        .nav-center-r,
        .nav-right {
            width: 100%;
            height: 100%;
            /* border: 5px solid rgba(125, 92, 223); */
        }

        /* .nav-right {
            font-family: 'Big Shoulders Inline Text', cursive;

            color: rgba(125, 92, 223);
            font-weight: bolder;

        } */


        /* .nav-right:hover {
            background-color: #ecd453;
            border-radius: 20px;


        } */

        .nav-center-r,
        .nav-center-l,
        .nav-right,
        .nav-left {
            border-bottom: none;
        }

        h3 {

            font-family: 'Big Shoulders Inline Text', cursive;
            font-size: 58px;
            color: gold;
            /* left:-30px; */
            /* background-color: rgba(125, 92, 223,0.5); */
            /* width: 469px;
height: 65px;
padding-top: 3px;
padding-left: 2px; */

        }

        .nav>div>div {
            display: flex;
            flex-wrap: wrap;
        }

        /* .nav>div>div {
            border: 3px solid black;
        } */

        .search
 {
            padding-left: 10px;
            font-family: 'Big Shoulders Inline Text', cursive;


            color: rgba(125, 92, 223);
            font-weight: bolder;
            font-size: 80px;
            height: 80%;

        }
        .back-now {

            font-family: 'Big Shoulders Inline Text', cursive;


            color: rgba(125, 92, 223);
            font-weight: bolder;
            font-size: 80px;
            height: 12%;
            width: 16.3%;

padding-left:3px;
        }

        .search:hover {
            background-color: #ecd453;
            border-radius: 20px;
        }

        .back-now:hover {
            background-color: #ecd453;
            border-radius: 20px;

        }


        .nav>div>div>a {
            margin: right;
        }



        .nav>div>div>p {
            padding-top: 17px;
            padding-left: 20px;
            color: rgba(125, 92, 223);
            font-size: 60px;
        }

        .input-y,
        .input-m {
            display: inline-block;


        }

        .input-y {
            padding-left: 20px;
            padding-top: 35px;
            width: 5.2vw;
            height: 9.2592vh;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            font-weight: bolder;
        }

        .input-m {

            padding-left: 20px;
            padding-top: 35px;
            width: 5.2vw;
            height: 9.2592vh;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            font-weight: bolder;


        }

        .input-m>input,
        .input-y>input {
            background-color: rgba(240, 156, 90);


        }

        input[type="number"] {
            color: rgba(26, 106, 64);
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bolder;
        }

        input[type="submit"] {
            position: fixed;
            margin-top: -90px;
            margin-left: -280px;
            width: 240px;
            height: 80px;
            opacity: 0;
        }

        .container {
            width: 100%;
            height: 87%;
            display: flex;
            flex-direction: row-reverse;
        }

        .aside {
            height: 100%;
            width: 40%;
            display: flex;
            border-right: none;
            border-left: none;
            border-bottom: none;


        }

        img:hover {
            border: 8px solid #ecd453;
            border-radius: 20px;
            border-style: double;
        }


        .box-title-bg {
            position: fixed;
            top: 100px;
            left: 440px;
            /* right: 40px; */
            background-color: rgba(125, 92, 223, 0.3);
            width: 90px;
            height: 475px;
            /* opacity: 0.8; */
            font-family: 'Zen Maru Gothic', serif;
            font-size: 35px;
            color: #ecd453;
            font-weight: bolder;
        }

        .box-title-w {
            position: fixed;
            top: 105px;
            left: 480px;

            width: 90px;
            height: 475px;

            font-family: 'Zen Maru Gothic', serif;
            font-size: 35px;
            color: #ecd453;
            font-weight: bolder;
        }


 


        .box-author-bg {
            position: fixed;
            bottom: 0px;
            left: 9px;
            /* right:185px; */
            background-color: rgba(164, 171, 214, 0.4);
            width: 451px;
            height: 50px;

        }

        .box-author-w {
            position: fixed;
            bottom: 0px;
            left: 5px;

            width: 435px;
            height: 50px;

            font-family: 'Zen Maru Gothic', serif;

            font-size: 35px;
            color: rgba(248, 113, 58);
            font-weight: bolder;

        }

        .box-author-bg:hover {
            border: 8px solid rgba(240, 156, 90);
            ;
            border-radius: 20px;
            border-style: double;

        }

        .box-author-bg-smaller {
            position: fixed;
            bottom: 0px;

            background-color: rgba(164, 171, 214, 0.4);
            width: 390px;
            height: 50px;

            font-family: 'Zen Maru Gothic', serif;



        }

        .box-author-bg-smaller:hover {
            border: 8px solid rgba(240, 156, 90);
            ;
            border-radius: 20px;
            border-style: double;

        }

 




        .main {
            height: 100%;
            width: 60%;
            border: none;

        }

        .main-top {
            border: 10px solid rgba(125, 92, 223);
            border-style: double;
            display: flex;
        }

        .main-center-center {
            padding-top: 35px;
            text-align: center;
        }

        .main-center-right {
            padding-top: 200px;
            padding-right: 33px;
            text-align: center;


        }

        .main-center-left {
            padding-top: 200px;
            text-align: center;
            padding-right: 33px;
        }

        .main-bottom {
            display: flex;
            color: gold;
            margin: auto;
            text-align: center;
            justify-content: center;

            align-items: center;
        }

        table {
            width: 100%;
            margin: auto;
        }

        .tr_special {

            height: 60px;
            text-align: center;
        }

        .tr_normal {

            height: 73px;
            text-align: center;
        }

        .week {
            width: 95px;
            height: 50px;
            text-align: center;
            font-size: larger;
            font-weight: bolder;

            font-family: 'Big Shoulders Inline Text', cursive;
            color: rgba(53, 78, 107);
            background-color: #ecd453;
        }

        td {
            width: 14%;
            font-size: larger;
        }

        .td_date,
        .td_weekend {
            font-family: 'Yusei Magic', sans-serif;

        }

        .td_date {
            color: gray;
        }


        .section1 {
            display: flex;
            border-top: none;
            background-color: rgba(125, 92, 223, 0.419);
            border: 10px solid rgba(125, 92, 223);
            border-style: double;
        }

        .section2 {
            display: flex;
            border-top: none;

        }

        .section3 {
            display: flex;
            border-top: none;
            border-bottom: none;
        }

        .year-month {
            width: 100%;
            height: 103%;
            border: none;
        }


        .right-number,
        .left-number {
            font-size: 60px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;

            text-align: center;
            padding-top:11px;
        }

        .left-year,
        .right-month {
            font-size: 70px;
            font-family: 'Big Shoulders Inline Text', cursive;
            font-weight: bolder;
            color: rgba(240, 156, 90);

            text-align: center;
            padding-bottom:50px;
        }

        .slash {
            border: none;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: rgba(125, 92, 223);
            font-size: 50px;
            position: fixed;
        }

        .a_right {

            font-size: 80px;
        }



        .a_left {

            font-size: 80px;
        }

        .w-10 {
            width: 10%;
        }
        
        .w-12 {
            width: 12%;
        }
        .w-13 {
            width: 13%;
        }

        .w-15 {
            width: 15%;
        }
        .w-17 {
            width: 17%;
        }
        .w-18 {
            width: 18%;
        }

        .w-20 {
            width: 20%;
        }

        .w-22 {
            width: 22%;
        }

        .w-23 {
            width: 23%;
        }

        .w-25 {
            width: 25%;
        }

        .w-30 {
            width: 30%;
        }

        .w-35 {
            width: 35%;
        }

        .w-38 {
            width: 38%;
        }

        .w-40 {
            width: 40%;
        }
        .w-42 {
            width: 42%;
        }
        .w-43 {
            width: 43%;
        }
        .w-45 {
            width: 45%;
        }
        .w-47 {
            width: 47%;
        }
        .w-48 {
            width: 48%;
        }

        .w-50 {
            width: 50%;
        }

        .w-55 {
            width: 55%;
        }

        .w-75 {
            width: 75%;
        }

        .w-77 {
            width: 77%;
        }

        .w-78 {
            width: 78%;
        }

        .w-80 {
            width: 80%;
        }


        .w-100 {
            width: 100%;
        }


        .h-5 {
            height: 5%;
        }

        .h-8 {
            height: 8%;
        }

        .h-10 {
            height: 10%;
        }

        .h-15 {
            height: 15%;
        }

        .h-20 {
            height: 20%;
        }

        .h-25 {
            height: 25%;
        }

        .h-30 {
            height: 30%;
        }

        .h-50 {
            height: 50%;
        }

        .h-65 {
            height: 65%;
        }

        .h-70 {
            height: 70%
        }


        .h-80 {
            height: 80%
        }

        .h-89 {
            height: 89%
        }
        .h-90 {
            height: 90%
        }

        .h-100 {
            height: 100%;
        }
        .nav>div>div{

            border: 2px solid black;
        }
    </style>
</head>

<body>
    <div class="nav">


        <?php
        if (isset($_GET['month']) && $_GET['month'] == 1) {
            echo "<div class='nav-left h-100 w-30' style='background-color:rgba(244, 71, 24,0.55)'>
<h3 class='h3'>
C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
</h3></div>";
        } elseif (isset($_GET['month']) && $_GET['month'] > 1 && $_GET['month'] < 13) {

            echo "<div class='nav-left h-100 w-30' style='background:rgba(125, 92, 223, 0.5)'>
    <h3 id='h3'>
    C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
    </h3>
    </div>";
        } else {
            echo
            "<div class='nav-left h-100 w-30' style='background:rgba(125, 92, 223, 0.5)'>
                <h3 id='h3'>
                C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
                </h3>
                </div>";
        }
        ?>

        <div class="nav-center-l h-100 w-10 "></div>
        <div class="nav-center-r h-100 w-43">
            <div class="w-50 h-10"></div>
            <div class="w-100 h-90">

                <h4 class="search">Search</h4>
                <p>◂</p>

                <form action="check.php" method="get">
                    <div class="input-container">
                        <div class="input-y">
                            <label for="year">Year</label>
                            <input type="number" name="year">
                        </div>
                        <div class="input-m">
                            <label for="month">Month</label>
                            <input type="number" name="month">
                        </div>
                    </div>
                    <div class="input-s">

                        <input type="submit" id="submit" value="submit">
                    </div>
                </form>
                <div class="search1"></div>



            </div>
        </div>
        <div class="nav-right h-100 w-17">
        <div class="w-50 h-10"></div>
            <div class="w-100 h-90">

                <a class="back-now" href='?year=<?= date('Y'); ?>&month=<?= date('m'); ?>'>Back Now</a>
            </div>


        </div>

    </div>
    <div class="container">

        <div class="main">
            <?php

            if (isset($_GET['month']) && (isset($_GET['year']))) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('m');
                $year = date('Y');
            }
            ?>
            <div class="section1 w-100 h-25">
                <table class="year-month">
                    <tr class=>
                        <td class="h-50 w-45 left-number">
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


                            ?>
                        </td>
                        <td class="h-50 w-10 slash" rowspan="2">
                            <img class="slash" src="./img/slash.png" alt="" width="50%" height="100%">
                        </td>
                        <td class="h-50 w-45 right-number">
                            <?php

                            echo "<h2 style='text-align:center'>";
                            echo date($month);
                            echo "</h2>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="h-50 w-45 left-year">Year</td>
                        <!-- <td class="h-50 w-10"></td> -->
                        <td class="h-50 w-45 right-month">Month</td>
                    </tr>
                </table>
            </div>
            <div class="section2 w-100 h-50">
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
                <div class="main-center-left h-100 w-10">
                    <a class="a_left" href='?year=<?= $prevYear; ?>&month=<?= $prev; ?>'>◂</a>

                </div>
                <div class="main-center-center h-100 w-80 ">
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
                            if ($weeks <= 5) {

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
                <div class="main-center-right h-100 w-10 ">
                    <a class="a_right" href='?year=<?= $nextYear; ?>&month=<?= $next; ?>'>▸</a>
                </div>
            </div>
            <div class="section3 w-100 h-25 main-bottom">

                <p><small>&copy;Copyright WSL Web All Rights Reserved./Images credit all for 鄉原古統.</small></p>

            </div>

        </div>
        <div class="aside">

            <div class="aside-left h-100 w-75">


            <?php
                if ($month == 1) {
                    $img = "A";
                }
                if ($month == 2) {
                    $img = "B";
                }
                if ($month == 3) {
                    $img = "C";
                }
                if ($month == 4) {
                    $img = "D";
                }
                if ($month == 5) {
                    $img = "E";
                }
                if ($month == 6) {
                    $img = "F";
                }
                if ($month == 7) {
                    $img = "G";
                }
                if ($month == 8) {
                    $img = "H";
                }
                if ($month == 9) {
                    $img = "I";
                }
                if ($month == 10) {
                    $img = "J";
                }
                if ($month == 11) {
                    $img = "K";
                }
                if ($month == 12) {
                    $img = "L";
                }
                switch ($img) {
                    case "A":
                        echo "<a href='https://www.tfam.museum/Collection/CollectionDetail.aspx?CID=3426&ddlLang=zh-tw' target='_blank'>
                        <img src='./img/A.jpg' alt='100%' height='674px'>
                        </a>";

                        break;
                    case "B":


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501875&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/B.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "C";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501870&IndexCode=Culture_Object' target='_blank'><img src='./img/C.jpg' alt='100%' height='674px'></a>";

                        break;
                    case "D";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501867&IndexCode=Culture_Object' target='_blank'><img src='./img/D.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "E";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501877&IndexCode=Culture_Object' target='_blank'><img src='./img/E.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "F";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501882&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/F.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "G";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501873&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/G.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "H";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501881&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/H.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "I";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501883&IndexCode=Culture_Object' target='_blank'><img src='./img/I.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    case "J";



                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501865&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/J.jpg' alt='100%' height='674px'</a>";

                        break;
                    case "K";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501879&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/K.jpg' alt='100%' height='674px'>
                </a>";

                        break;
                    default;


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501880&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/L.jpg' alt='100%' height='674px'></a>";

                        break;
                }
                ?>

            </div>

            <div class="aside-right h-100 w-25">
                <?php

                if ($month == 1) {

                    echo '<div class="box-title-bg" style=" background-color:rgba(244, 71, 24,0.55)"></div>';
                    echo " <div class='box-title-w' style='color:rgba(232, 176, 4)'>
臺<br>北<br>名<br>所<br>繪<br>畫<br>十<br>二<br>景<br></div>";;
                    echo '<a href="https://zh.wikipedia.org/zh-tw/%E9%84%89%E5%8E%9F%E5%8F%A4%E7%B5%B1" target="_blank">
<div class="box-author-bg-smaller">
<div class="box-author-w">
&nbsp; &nbsp;&nbsp;郷&nbsp; &nbsp;&nbsp;&nbsp; 原&nbsp;&nbsp; &nbsp; 古&nbsp;&nbsp;&nbsp; &nbsp; 統
</div>';
                } else {

                    echo '<div class="box-title-bg">
</div>';
                    echo " <div class='box-title-w'>
臺<br>北<br>名<br>所<br>繪<br>畫<br>十<br>二<br>景<br>
</div>";
                    echo '<a href="https://zh.wikipedia.org/zh-tw/%E9%84%89%E5%8E%9F%E5%8F%A4%E7%B5%B1" target="_blank">
<div class="box-author-bg">
</div>
</a>
</div>

<div class="box-author-w">
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;郷&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 原&nbsp;&nbsp; &nbsp;&nbsp; 古&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 統
</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>