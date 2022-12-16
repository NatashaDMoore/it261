<?php

// errors for foreach loops
// if there are more than 0 errors, we will echo a message

if(count($errors) > 0) :?>
    <div class="error">
        <?php foreach($errors as $error) :?>
            <p>
                <?= $error ?>
            </p>
        
        <?php endforeach ?>
    </div>
    <!-- end div error -->

<?php endif ;?>