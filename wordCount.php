<?php
function get_num_of_words($string)
{
    $string = preg_replace('/\s+/', ' ', trim($string));
    $words = explode(" ", $string);
    return count($words);
}
$str = "Today is Saturday !";
echo $str . "<br>";

$len = get_num_of_words($str);
echo "The Number of Words in Given String is :" . $len;
