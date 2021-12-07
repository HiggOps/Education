<?php
//31: 1,3,5,7,8,10,12
//30: 4,6,9,11
//29: 2 w rok przestępny
//28: 2 nie w rok przestępny

//counting calendar - podaje ile lat, miesięcy, dni jest różnicy
//policzyć ile miesięcy 31 ile 30 ile 29 ile 28 dniowych minęło w tym przedziale czasowym

function daysDifference($numberOfDays, $earlierYear, $earlierMonth) {

    $i = 1; //numer obecnego powtórzenia

    $year = $earlierYear; //current year
    $month = $earlierMonth; //current month
    $day = 0;
    $passedMonths = 0;
    $passedYears = 0; 

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
                    $passedMonths++;
                    $month++;
                    $day = 0;
                }
                break;
            case 4 || 6 || 9 || 11:
                //echo "<br> 30";
                if($day == 30) {
                    $passedMonths++;
                    $month++;
                    $day = 0;
                }
                break;
            case 2:
                if(($year % 4) == 0) { //przestępny
                    //echo "<br> 29";
                    if($day == 29) {
                        $passedMonths++;
                        $month++;
                        $day = 0;
                    }
                } elseif(($year % 4) != 0) { //normalny
                    //echo "<br> 28";
                    if($day == 28) {
                        $passedMonths++;
                        $month++;
                        $day = 0;
                    }
                }
                break;
        }
        
        if ($passedMonths == 12) {
            $passedYears++;
            $passedMonths = 0;
        }
        
        
    }

    echo "<br>";
    //year/years
    if ($passedYears == 1) {
        echo $passedYears." year";
        if ($passedMonths > 0 || $day > 0) {
            echo ", ";
        }
    } elseif ($passedYears > 0) {
        echo $passedYears." years";
        if ($passedMonths > 0 || $day > 0) {
            echo ", ";
        }
    }
    //month/months
    if ($passedMonths == 1) {
        echo $passedMonths." month";
        if ($day > 0) {
            echo ", ";
        }
    } elseif ($passedMonths > 1) {
        echo $passedMonths." months";
        if ($day > 0) {
            echo ", ";
        }
    }
    //day/days
    if ($day == 1) {
        echo $day." day";
    } elseif ($day > 1) {
        echo $day." days";
    } elseif ($passedYears == 0 && $passedMonths == 0 && $day == 0) {
        echo "It's the same day.";
    }

    if ($i > 1) {
        echo $i." days";
    }   
}
?>
