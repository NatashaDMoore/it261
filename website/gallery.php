<?php
include('config.php');
include('./includes/header.php');
?>
    <!-- Need a foreach loop in order to display the array -->
    <!-- NOTE
    => is the separator for associative arrays. 
    In the context of this foreach loop, it assigns the key of the array to $name and the value to $image. -->
    <h2>Galerie D'Art</h2>
    <table>
        <?php foreach($people as $name => $image)    :?> <!-- COLON not SEMICOLON - foreach loop is place before the tr and td because we want them to loop -->
        <tr>
            <td><?php echo str_replace('_',' ',$name) ?></td>
            <td><img src="images/<?php echo substr($image,0,5) ;?>.jpg" alt="<?php echo str_replace('_',' ',$name) ?>"></td>
            <td><img src="images/<?php echo substr($image,6,5) ;?>.jpg" alt="<?php echo substr($image,12) ?>"></td>
            <td><?php echo substr($image,12) ;?></td>

        </tr>
        <?php endforeach ;?> <!-- end foreach loop after the tr -->
    </table>

<?php
include('./includes/footer.php');
?>