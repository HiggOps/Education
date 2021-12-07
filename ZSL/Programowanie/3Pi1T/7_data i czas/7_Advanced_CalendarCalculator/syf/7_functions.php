<?php

function numberOfDays($laterDate, $earlierDate) {
    $numberOfDays = $laterDate - $earlierDate;
    echo "Różnica wynosi: ".$numberOfDays." days";
    if ($numberOfDays >= 7) {
        $numberOfWeeks = (int)($numberOfDays / 7);
        $numberOfDaysFW = $numberOfDays % 7;
        echo " or ".$numberOfWeeks." weeks and ".$numberOfDaysFW." days";
    }   elseif ($numberOfDays >= 30) {
        $numberOfMonths = (int)($numberOfDays / 30);
        $numberOfDaysFM = $numberOfDays % 30;
        echo " or ".$numberOfMonths." months and".$numberOfDaysFM." days";
    }   elseif ($numberOfDays >= 365) {
        $numberOfYears = (int)($numberOfDays / 365);
        $numberOfDaysFM = $numberOfDays % 365;
        echo " or ".$numberOfYears." years and ".$numberOfDaysFM." days";
    }
}
?>