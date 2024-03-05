<!DOCTYPE html>
<html lang="en">
<head>
    <title>3. Write a PHP script to merge two arrays and sort them as numbers, in descending order.</title>
</head>
<body>
    <h1>Heading</h1>
<?php
    echo"<br><br>";
    $a1=array(1,3,15,7,5);
    $a2=array(4,3,20,1,6);
    $num=array_merge($a1,$a2);
    array_multisort($num,SORT_DESC,SORT_NUMERIC);
    print_r($num);
?>
</body>
</html> 