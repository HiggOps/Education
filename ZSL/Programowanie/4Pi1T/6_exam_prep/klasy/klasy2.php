<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
</head>
<body>
    <?php
        class Numeric_Array {
            public $array;
            
            public function __construct($array) {
                if (array_filter($array, 'is_int')) {
                    $this->array = $array;
                }
            }

            public function up() {
                asort($this->array);
                return $this->array;
            }

            public function down() {
                arsort($this->array);
                return $this->array;
            }
        }

        $array = [4,5,3,2,5,7,3,2];
        //print_r($test);

        $tab = new Numeric_Array($array);

        print_r($tab->up());
        echo "<br>";

        print_r($tab->down());
    ?>
</body>
</html>