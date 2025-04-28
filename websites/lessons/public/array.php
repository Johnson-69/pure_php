<?php 

    $array1 = array("apple", "banana", "cherry");
    $array2 = ["apple", "banana", "cherry"];

    for ($i = 0; $i < count($array1); $i++) {
        echo "<br>";
        echo "$array1[$i]";
    }
    echo "<br>";
    foreach ($array2 as $fruit) {
        echo "<br>";
        echo "$fruit";
    }

    echo "<br><br>";
    echo "<a href='index.php'>Home</a>";
?>