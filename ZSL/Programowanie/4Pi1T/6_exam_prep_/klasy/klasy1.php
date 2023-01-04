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
        class Calculator {
            public $num1, $num2;

            public function __construct($num1, $num2) {
                $this->num1 = $num1;
                $this->num2 = $num2;                
            }

            public function add() {
                $add = $this->num1 + $this->num2;
                return $add;
            }
            public function sub() {
                $sub = $this->num1 - $this->num2;
                return $sub;
            }
            public function mul() {
                $mul = $this->num1 * $this->num2;
                return $mul;
            }
            public function div() {
                if ($this->num2 == 0) {
                    return "Can't divide by 0";
                } else {
                    $div = $this->num1 / $this->num2;
                    return $div;
                }
            }
        }
        $test = new Calculator(8,0);

        echo $test->add()."<br>";
        echo $test->sub()."<br>";
        echo $test->mul()."<br>";
        echo $test->div()."<br>";


    
    ?>
</body>
</html>