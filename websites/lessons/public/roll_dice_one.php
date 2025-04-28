<?php 
    $english = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
    ];

    $roll = rand(1, 6);

    echo '<p>You rolled a ' . $english[$roll] . '!</p>';

    if ($roll == 6) {
        echo '<p>Congratulations! You rolled a six!</p>';
    } else {
        echo '<p>Better luck next time!</p>';
    }

    echo "<br><br>";
    echo "<a href='index.php'>Home</a>";
?>