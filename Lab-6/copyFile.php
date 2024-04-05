<!DOCTYPE html>
<html lang="en">
<head>
    <title>Write a PHP script that reads data from one file and write into another file.</title>
</head>
<body> 
    <?php
    $source = 'source.txt';
    $target = 'target.txt';
    $lines = file($source);
    $data = array();
    $i = 0;
    foreach ($lines as $line) {
        $data[] = $i++ . " " . trim($line);
    }
    file_put_contents($target, implode(PHP_EOL, $data));
    ?>
</body>
</html>