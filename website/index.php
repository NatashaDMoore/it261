<?php
include('config.php');
include('./includes/header.php');

$photos[0] = 'llama1';
$photos[1] = 'llama2';
$photos[2] = 'llama3';
$photos[3] = 'llama4';
$photos[4] = 'llama5';
$photos[5] = 'llama6';

$i = rand(0,5);

$selected_image = ''.$photos[$i].'.png';

?>
        <div id="wrapper">
            <div id="hero">
                <!-- <img src="./images/llama1.jpg" alt=""> -->
                <a href="https://openai.com/dall-e-2/"><img src="./images/<?php echo $selected_image ;?>" alt="<?php echo $photos[$i] ;?>"></a>
            </div>
            <!-- end hero -->
            <main>
                <h1>Natasha Moore's<br>Website for IT261</h1>
                    <p><b>The Llama</b><br>
                        <span style="font-style: italic;">Ogden Nash</span>
                        <br><br>
                        The one-l lama,<br>
                        He's a priest.<br>
                        The two-l llama,<br>
                        He's a beast.<br>
                        And I will bet<br>
                        A silk pajama<br>
                        There isn't any<br>
                        Three-l lllama.</p>
            </main>
            <!-- <aside>
                <h3>This is my aside.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean velit libero, tempor nec orci nec, interdum pharetra orci. Aliquam eleifend leo id ultrices iaculis. Morbi at turpis mollis, lobortis quam sit amet, rhoncus purus. Integer enim nibh, mollis in accumsan a, tincidunt et enim.</p>

            </aside> -->
        </div>
        <!-- end wrapper -->
<?php
include('./includes/footer.php');
?>