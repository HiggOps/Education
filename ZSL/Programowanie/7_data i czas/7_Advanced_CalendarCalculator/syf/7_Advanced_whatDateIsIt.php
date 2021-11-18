<?php
//31: 1,3,5,7,8,10,12
//30: 4,6,9,11
//29: 2 w rok przestępny
//28: 2 nie w rok przestępny

//counting calendar - podaje ile lat, miesięcy, dni jest różnicy
//policzyć ile miesięcy 31 ile 30 ile 29 ile 28 dniowych minęło w tym przedziale czasowym

function whatDate($numberOfDays, $year, $month, $day) {

    $i = 1; //numer obecnego powtórzenia

    /*
    $year = $earlierYear; //current year
    $month = $earlierMonth; //current month
    $day = $earlierDay;
    */

    while ($i <= $numberOfDays) {
        $day++;
        $i++;
        switch($month) {
            case 1 || 3 || 5 || 7 || 8 || 10 || 12:
                //echo "<br> 31";
                if($day == 31) {
                    if($month == 12) {
                        $year++;
                        $month = 0;
                    }
                    $month++;
                    $day = 0;
                }
                break;
            case 4 || 6 || 9 || 11:
                //echo "<br> 30";
                if($day == 30) {
                    $month++;
                    $day = 0;
                }
                break;
            case 2:
                if(($year % 4) == 0) { //przestępny
                    //echo "<br> 29";
                    if($day == 29) {
                        $month++;
                        $day = 0;
                    }
                } elseif(($year % 4) != 0) { //normalny
                    //echo "<br> 28";
                    if($day == 28) {
                        $month++;
                        $day = 0;
                    }
                }
                break;
        }
    }

    echo "<br>";
    echo $year."-".$month."-".$day;
}
?>
