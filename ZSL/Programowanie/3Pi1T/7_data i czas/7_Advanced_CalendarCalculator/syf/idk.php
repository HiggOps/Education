<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    echo "dzień-miesiąc-rok<br>".date('d-m-Y')."<br>";
    echo "dzień-miesiąc-rok<br>".date('d-M-Y')."<br>";
    echo "dzień-miesiąc-rok<br>".date('d-F-Y')."<br>";

    setlocale(LC_ALL,'polish');
    echo strftime('%d %B %Y')."<br>";
    echo date('G:i:sa')."<br>";
    echo date('L')."<br>";//przestępny

?>
<script>
//setTimeout(function(){
//    window.location.reload();
//},1000);
</script>
<?php
    $date=getdate();
    echo $date['wday']." ";
    echo $date['yday']+1;
    echo " <br>".$date[0];

    //mktime()
    $today=mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('y'));
    echo "<br>". $today . "<br>";

    //ile lat mineło od 1970
    $year = $today/(60*60*24*365);
    $today2=mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('y')-1);
    $year2 = $today2/(60*60*24*365);
    echo "<br>". $year;
    echo "<br>". (int)$year;
    echo "<br>". $year2;
    echo "<br>". (int)$year2 ."<br><br>";


    /////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////

?>
<div>
    <form method="GET">
        Podaj dwie daty i sprawdź odstęp czasu pomiędzy nimi! <br>
        <input type="date" name="data1"><br>
        <input type="date" name="data2"><br>
        <input type="submit" value="sprawdź">
    </form>
</div>

<?php
    if(!empty($_GET['data1']) && !empty($_GET['data2'])){
        echo  "Wprowadzone daty:<br>".$_GET['data1'] ." -- ". $_GET['data2']. "<br>";
        

        $date11 = explode("-", $_GET['data1']);
        $date22 = explode("-", $_GET['data2']);

        echo "<br>";
        //print_r($date11);
        //print_r($date22);
        echo "<br>";

        if($date11[0]<$date22[0]){
            $date11 = explode("-", $_GET['data1']);
            $date22 = explode("-", $_GET['data2']);
        }  
        else if($date11[0]>$date22[0]){
            $date11 = explode("-", $_GET['data2']);
            $date22 = explode("-", $_GET['data1']);
        }
        else{
            if($date11[1]<$date22[1]){
                $date11 = explode("-", $_GET['data1']);
                $date22 = explode("-", $_GET['data2']);
            }
            else if($date11[1]>$date22[1]){
                $date11 = explode("-", $_GET['data2']);
                $date22 = explode("-", $_GET['data1']);
            }
            else{
                if($date11[2]>$date22[2]){
                    $date11 = explode("-", $_GET['data2']);
                    $date22 = explode("-", $_GET['data1']);
                }
            }
        }


        //print_r($date11);
        //print_r($date22);

        echo "<br>";

        //obliczanie lat
        $date33[0]=$date22[0]-$date11[0];

        //obliczanie miesięcy
        if($date22[1]-$date11[1]<0){
            $date33[1]=12-($date11[1]-$date22[1]);
            $date33[0]=$date33[0]-1;
        }
        else{
            $date33[1]=$date22[1]-$date11[1];
        }

        //obliczanie dni

$dni31={1,3,5,7,8,10,12};

        if($date22[2]-$date11[2]<0){
            $date33[1]=$date33[1]-1;
            if(in_array($date22[1]-1,$dni31){
                $date33[2]=31-($date11[2]-$date22[2]);
            }
            else if($date22[1]-1==2){
                if($date22[0]%4==0){
                    $date33[2]=29-($date11[2]-$date22[2]);
                }
                else{
                    $date33[2]=28-($date11[2]-$date22[2]);
                }

            }
            else {
                $date33[2]=30-($date11[2]-$date22[2]);
            }
        }
        else{
            $date33[2]=$date22[2]-$date11[2];
        }
        if($date33[1]<0){
            $date33[1]=12+$date33[1];
            $date33[0]=$date33[0]-1;
        }

        //print_r($date33);
        
        echo "<br>Odstęp czasu pomiędzy datami wynosi ";
        if($date33[0]!=0){echo $date33[0]." Lat ";}
        if($date33[1]!=0){echo $date33[1]." miesięcy ";}
        if($date33[2]!=0){echo $date33[2]." dni ";}


        
























/*
        function date_to_days($Date){
            //year to days
            $days=$Date[0]*365;
            $days+=floor($Date[0]/4);
            $days=floor($days);
            //month to days
            $days+=($Date[1]-1)*31;
            $days-=floor(($Date[1]-1)/2);
            if($Date[1]-1>=2){
                $days = $days-1;
                
            }
            $days += $Date[2];
            return $days;
        }
        function days_to_date($days, $startYear){
            $y=$startYear;
            $date[0]=0;
            $date[1]=0;
            $date[2]=0;
            while($days>365){
                if($y%4==0){
                    $days = $days-366;
                    $date[0]+=1;
                }
                else{
                    $days = $days - 365;
                    $date[0]+=1;
                }
                $y++;
            }
            $i=1;
            $currentMonthLength=31;
            while($days>$currentMonthLength){
                $days= $days - $currentMonthLength;
                $date[1]+=1;
                $i++;
                if($i%2==0){
                    $currentMonthLength = 30;
                    if($i==2){
                        if($y%4==0){
                            $currentMonthLength=29;
                        }
                        else{
                            $currentMonthLenght=28;
                        }
                        
                    }
                }
                else{
                    $currentMonthLength=31;
                }
            }
            $date[2]=$days;
            return $date;
        }
        
        $date33 = date_to_days($date22) - date_to_days($date11);
        $date333 = days_to_date($date33,date_to_days($date11));
        echo date_to_days($date11)."<br>";
        echo date_to_days($date11)."<br>";
        echo $date33 . "<br>";
        echo $date333[0] ." - ".$date333[1]." - ".$date333[2] ."<br>";
/*
        if($date11[0]<$date22[0]){
            $date33[0]=$date22[0]-$date11[0]; 
            if($date11[0]<$date22[0]){
                
            }
        }
        else{
            $date33[0]=$date11[0]-$date22[0];
        }        
        
        print_r($date33);
*/
    }
?>

</body>
</html>