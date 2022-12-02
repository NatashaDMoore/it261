<?php

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
// $variable['key'] = 'value';
// $name is key and $image is value (Assigned using the foreach loop below)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictures</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
        td {
            padding:5px;
        }
    
    </style>

</head>
<body>
    <!-- Need a foreach loop in order to display the array -->
    <!-- NOTE
    => is the separator for associative arrays. 
    In the context of this foreach loop, it assigns the key of the array to $name and the value to $image. -->
    <table>
        <?php foreach($people as $name => $image)    :?> <!-- COLON not SEMICOLON - foreach loop is place before the tr and td because we want them to loop -->
        <tr>
            <td><img src="images/<?php echo substr($image,0,5) ;?>.jpg" alt="<?php echo str_replace('_',' ',$name) ?>"></td> <!-- string=$image, start at 0, count 5 (trump, biden, harri, etc) -->
            <td><?php echo str_replace('_',' ',$name) ?></td>
            <td><?php echo substr($image,6) ;?></td>
        </tr>
        <?php endforeach ;?> <!-- end foreach loop after the tr -->
    </table>

    <footer>
            <ul>
                <li>Copyright &copy; 2022</li>
                <li>All Rights Reserved</li>
                <li><a href="https://natashadmoore.com/it261/index.php">Web Design by Natasha Moore</a></li>
                <li><a id="html-checker" href="#">HTML Validation</a></li>
                <li><a id="css-checker" href="#">CSS Validation</a></li>
                </ul>
                
                <script>
                        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
                </script>

     </footer>

</body>
</html>