<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";


$years = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($years);

echo '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>';


// date split up
$date1 = substr($date, 0, 4);
$date2 = substr($date, 5, 2);
$date3 = substr($date, 8, 2);
//tar split up
//$tar1 = substr($date, 0, 4);
//$tar2 = substr($date, 5, 2);
//$tar3 = substr($date, 8, 2);

$dateFormat = $date1 . '/' . $date2 . '/' . $date3;

//$tarFormat = $tar1 . '{}' . $tar2 . '{}' . $tar3;


//print out formats
echo "2:) " . "$dateFormat" . '<br>';


if($date < $tar){
    echo "3)" . "The Past";
}elseif($date > $tar){
    echo "3)" . " Its the future";
}else
    echo "3)" . " Opps";

echo '<br>';


//4 position of all the '/' in php


$num4 = strpos($date, '-');

$nextNum = strpos($date, '-', $num4);

$previous_offset = $num4 + $nextNum;

echo "4:) " . $num4 . " " . $previous_offset;

echo '<br>';



// 5 count the number of words in date

$num5 = str_word_count($date);

// your date has a third / that is why you are recieving a 3
// in your results. i also think in your program you re-valued
// the date but i just made a new variable for mine and am
// using the original one that you gave us

echo "5:) " . $num5;
echo '<br>';

// 6 length of date
echo "6:) " . strlen($date);

// 7 ascii value of a random string first letter


$string = "this is my string";

echo '<br>' . "7:) this is the ASCII for t :" . ord($string);

// number 8 last two values of date

echo '<br>' . "8:) last two values of date " . substr($date, -2);

//number 9 explode the date using the delimter and then print the array $pieces[]

$pieces = explode("-", $date);
echo '<br>' . "9:) Printed ";
print_r($pieces);

echo '<br>';
echo '<br>';
echo '<br>';

// your absurd foreach loop

foreach ($years as $year) {
    if($year % 4 == 0)
    {
        if($year % 100 == 0)
        {
            if($year % 400 == 0)
            {
                echo $year . ", is a leap year. <br>";
            }
            else
            {
                echo $year . ", is not a leap year. <br>";
            }
        }
        else
        {
            echo $year . ", is a leap year. <br>";
        }
    }
    else
    {
        echo $year . ", is not a leap year <br>";
    }
}

?>