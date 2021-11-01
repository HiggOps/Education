<?php
    //data()
    echo "dzien-miesiąc-rok ".date('d-m-Y')."<br>"; //dzien-miesiąc-rok 28-10-2021
    echo date('d-M-Y')."<br>";//28-Oct-2021
    echo date('d-F-Y')."<br>";//28-October-2021

    setlocale(LC_ALL, 'polish');
    echo strftime('%d %B %Y')."<br>";//28 pa�dziernik 2021
    
    //czas
    echo date('G:i:s')."<br>"; //17:19:53
    echo date('G:i:sa')."<br>"; //17:19:53pm
    echo date('H:i:s')."<br>"; //17:19:53
    echo date("L")."<br>"; //0 czy rok przestępny
?>

<script>
    setTimeout(function(){
        //window.location.reload();
    }, 1000);
</script>

<?php
//getdate()
$date=getdate();
//print_r($date);

echo $date['wday']."<br>"; //4 - dzien tygodnia
echo $date['yday']."<br>"; //301 - dzien roku
echo $date['0']."<br>"; //1635434755 - znacznik czasu od 1970.01.01

//mktime()
$today = mktime(0,0,0,10,28,2021);
echo $today,"<br>"; //1635372000
$today = mktime(date('G'),date('i'),date('s'),date('m'),date('d'),date('Y'));
echo $today,"<br>"; //1635435266
echo $date[0]."<br>"; //1635435266

//ile lat minęło od 1 stycznia 1970
$year = $today/(60*60*24*365);
echo (int)$year." lat<br>";//51 lat
//ile lat minęło od 1 stycznia 1970 roku do zeszłego roku
$previousYear = mktime(0,0,0,1,1,date('Y')-1)/(60*60*24*365);
echo (int)$previousYear." lat<br>";//50 lat

?>
