<?php

// for Loops - loops through a code a specified number of times

// for (init counter; test counter; increment counter) {
//      echo 'code to be executed for each iteration';
// }

// $far = ($cel * 9/5) + 32

// not echoing any information above the doc tag
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Table</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
table {
    width: 500px;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid darkblue;
}

h1 {
    text-align: center;
    margin: 10px auto;
    color: black;
}

h2 {
    text-align: center;
    margin-top: 40px;
    margin-bottom: 20px;
    color: darkblue;
}

td, th {
    border-collapse: collapse;
    border: 1px solid darkblue;
    padding: 5px;
    width: 250px;
}
    </style>

</head>
<body>
    <h1>My Week Three Tables</h1>
    <h2>Celcius/Fahrenheit</h2>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <tr>
            <?php
            for($cel = 0; $cel <=100; $cel += 2) {
                $far = ($cel * 9/5) + 32;
                echo '<tr>';
                    echo '<td> '.$cel.' degrees </td>';
                    echo '<td> '.number_format($far, 0).' degrees </td>';
                echo '</tr>';
            }
            ?>
        </tr>
    </table>

    <h2>Kilometers/Miles</h2>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <tr>
            <?php
            for($km = 0; $km <=100; $km += 5) {
                $mi = $km * 0.62137;
                echo '<tr>';
                    echo '<td> '.$km.' km </td>';
                    echo '<td> '.number_format($mi, 0).' mi </td>';
                echo '</tr>';
            }
            ?>
        </tr>
    </table>
</body>
</html>