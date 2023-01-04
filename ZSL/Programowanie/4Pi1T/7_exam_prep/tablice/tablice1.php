<?php

$tab1 = array(7,3,1,6,9,5,4,10,2,2);
echo "\$tab1 ";
print_r($tab1);

echo "<br>\$tab1[5] = $tab1[5]";
echo "<br>\$tab1[7] = ".$tab1[7] = 12;

$tab2 = $tab1;
echo "<br>\$tab2 ";
print_r($tab2);

echo "<br>\$tab3 ";
$tab3 = $tab1;
foreach ($tab3 as $key => $value) {
    $tab3[$key] = $tab1[$key] + $tab2[$key];
}
print_r($tab3);
echo "<br>\$tab2 ";
$tab2 = array_reverse($tab1);
print_r($tab2);