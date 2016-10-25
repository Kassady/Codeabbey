<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$string = fgets($buffer);
$length = count($string);
function check_braces($string) {
    for($i = 0; $i < count($string); $i++)
    {
        $open = array("{", "[", "(");
        $close = array("}", "]", ")");
        $key = array("{" => "}", "[" => "]", "(" => ")");
        echo $string."<br>";

        //First item should open a brace, else fail
        if((in_array($string[0], $close)) && (strlen($string) % 2)) {
            echo 0;
            echo '<br>';
        }
        else {
            $bank_o = array();
            $bank_c = array();
            $element = array();

            for($y = 0; $y < strlen($string); $y++) {
                $element = $string[$y];

                if(in_array($element, $open)) {
                    array_push($bank_o, $element);
                }
                else {
                    array_push($bank_c, $element);
                }

                $arraycounter = array_merge($bank_o, $bank_c);

                $y++;

                if(!empty($bank_c) && !empty($bank_o))
                {
                    $num = count($bank_o);
                    if($bank_c[0] == $key[$bank_o[$num - 1]])
                    {
                        array_shift($bank_c);
                        array_pop($bank_o);
                    }
                }
                elseif (empty($bank_c) && empty($bank_o)) {
                    echo 1 . "<br>";
                }
                else
                {

                }

            }
        }
    }
}
check_braces($string);