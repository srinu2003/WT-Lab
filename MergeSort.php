<!DOCTYPE html>
<html lang="en">

<head>
    <title>217YT1A0C0-Web Technology Lab</title>
</head>

<body>
    Descending order.
    <?php
    echo "<br><br>";
    $a1 = array(3, 5, 13, 7, 6);
    $a2 = array(4, 3, 20, 1, 6);
    $num = array_merge($a1, $a2);
    array_multisort($num, SORT_DESC, SORT_NUMERIC);
    print_r($num);
    ?>
</body>
</html>