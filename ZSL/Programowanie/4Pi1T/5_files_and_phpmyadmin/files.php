<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
    <style>
        table, th, td, tr{
            border: black solid 1px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php 
    /*
        Wyświetl na stronie zawartość folderu htdocs (dla chętnych także struktura podkatalogów), oddzielnie pliki i katalogi, 
        Wyświetl także datę ostatniej modyfikacji, rozmiar i uprawnienia do pliku
    */
    $dir = 'C:/xampp/htdocs';
    echo "<table><tr><th colspan=7>Foldery</th></tr><tr><th>file name</th><th>type</th><th>parent</th><th>last modification</th><th>size</th><th>permissions</th></tr>";
    function printFolderStructure($dir) { 
    
        // open the current directory 
        $dirlist = opendir($dir); 

        // loop through the directory 
        while ($file = readdir($dirlist)) { 
            if ($file != '.' && $file != '..') { 
                $newDir = $dir . '/' . $file; 
                if (is_dir($newDir)) { 
                    $modTime = date("m-d-Y H:i",filemtime($newDir));
                    $size = filesize($newDir)."bytes";
                    $perms = substr(sprintf('%o', fileperms($newDir)), -4);
                    $parent = $dir;
                    $type = filetype($newDir);
                    // print out the directory structure 
                    echo '<tr><td>' . $file .  '</td><td>' . $type . '</td><td>' . $parent . '</td><td>' . $modTime . '</td><td>'. $size .'</td><td>' . $perms . '</td></tr>'; 
    
                    // call the function again 
                    printFolderStructure($newDir); 
                } 
            } 
        }
    }
    

    printFolderStructure($dir);

    echo "</table><br><br><br>";

    echo "<table><tr><th colspan=7>Pliki</th></tr><tr><th>file name</th><th>type</th><th>parent</th><th>last modification</th><th>size</th><th>permissions</th></tr>";
    
    function printFileStructure($dir) { 
    
        // open the current directory 
        $dirlist = opendir($dir); 

        // loop through the directory 
        while ($file = readdir($dirlist)) { 
            if ($file != '.' && $file != '..') { 
                $newDir = $dir . '/' . $file; 
                if (is_dir($newDir)) { 
                    printFileStructure($newDir); 
                } else {
                    $modTime = date("m-d-Y H:i",filemtime($newDir));
                    $size = filesize($newDir)."bytes";
                    $perms = substr(sprintf('%o', fileperms($newDir)), -4);
                    $parent = $dir;
                    $type = filetype($newDir);

                    echo '<tr><td>' . $file .  '</td><td>' . $type . '</td><td>' . $parent . '</td><td>' . $modTime . '</td><td>'. $size .'</td><td>' . $perms . '</td></tr>'; 
                }
            } 
        }
    }
    
    printFileStructure($dir);

    echo "</table>";

    ?>
</body>
</html>
