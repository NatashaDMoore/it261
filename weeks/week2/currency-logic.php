<?php
// Currency -- US Dollars

// Ruble = 0.017
// Pound = 1.15
// CAN   = 0.76
// Euro  = 1.00
// Yen   = 0.0074


// Currency Amount -- Value in US Dollars

// 10007 Rubles         = $170.12
// 500 Pounds           = $575.00
// 5000 CAN Dollars     = $3800.00
// 1200 Euros           = $1200.00
// 2000 Yen             = $14.80

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency Logic Exercise</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #wrapper {
        width: 500px;
        margin: 30px auto;
    }

    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
    }

    h1, h2, h3 {
        text-align: center;
    }

</style>

</head>
<body>
<div id= wrapper>
    <h1>After our world-wind travels, we have returned home with the following currencies</h1>

    <ul>
        <li>Rubles</li>
        <li>Pounds</li>
        <li>Canadian Dollar</li>
        <li>Euros</li>
        <li>Yen</li>
    </ul>

    <h2>What ever shall we do?</h2>

    <table>
     <tr>
        <th colspan= "2">Currency</th>
        <th>US Dollars</th>
     </tr>
     <tr>
        <th>Rubles</th>
        <td>10007</td>
        <td>$170.12</td>
     </tr>
     <tr>
        <th>Pounds</th>
        <td>500</td>
        <td>$575.00</td>
     </tr>
     <tr>
        <th>Canadian</th>
        <td>5000</td>
        <td>$3800.00</td>
     </tr>
     <tr>
        <th>Euros</th>
        <td>1200</td>
        <td>$1200.00</td>
     </tr>
     <tr>
        <th>Yen</th>
        <td>2000</td>
        <td>$14.80</td>
     </tr>
     <tr>
        <th>Total</th>
        <td></td>
        <td>$5759.92</td>
     </tr>
    </table>

</div>
    <!-- end wrapper -->
    
</body>
</html>
