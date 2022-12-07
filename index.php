<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="calc">
    <h1><a href="index.php">Natasha's Portal Page</a></h1>
    <!-- <h2 class="subheader">The Below Navigation Includes My BIG Assignments</h2> -->
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="">Switch</a></li>
                <li><a href="troubleshoot.php">Troubleshoot</a></li>
                <li><a href="calculator.php">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
        <main>
            <h2>About Natasha</h2>
            <img class="headshot" src="images/nmoore.jpg" alt="picture of Natasha">
                <p class="right">I am one of those mythical "locals" who did not transplant to Seattle. I grew up in Kent, WA but have lived in the city for 8 wonderful years. Before seeking a career in tech I worked in management, insurance, and the service industry. Learning to code is very different than anything I've tried before and I'm really enjoying the challenge.</p><p>When I'm not in front of a computer, I enjoy hiking and camping like any good PNWer. Now that venues are opening up, I'm also looking forward to more live music! Another thing I'm passionate about is coed flag football. I've been on at least one team for almost 5 years. It's a great way to stay active if, like me, you don't make time for the gym.</p>
            <img class="mamp" src="images/nmoore_mamp.png" alt="proof of mamp download">
            <img class="mamp" src="images/nmoore_error.png" alt="proof of error reporting">
        </main>
        <aside>
        <h2>Weekly Assignments</h2>
            <h3>Quick Links</h3>
                <ol>
                    <li style="list-style-type: circle;"><a href="website/index.php">Website</a></li>
                    <li style="list-style-type: circle;"><a href="adminer-4.8.1.php">Adminer</a></li>
                </ol>
            <h3>Week Two</h3>
                <ol>
                    <li><a href="weeks/week2/var.php">var.php</a></li>
                    <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
                    <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                    <li><a href="weeks/week2/currency.php">currency.php</a></li>
                    <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
                </ol>
            <h3>Week Three</h3>
                <ol>
                    <li><a href="weeks/week3/if.php">if.php</a></li>
                    <li><a href="weeks/week3/date.php">date.php</a></li>
                    <li><a href="weeks/week3/for-loop.php">forloop.php</a></li>
                    <li><a href="weeks/week3/for-each.php">foreach.php</a></li>
                    <li><a href="weeks/week3/switch.php">switch.php</a></li>
                </ol>
            <h3>Week Four</h3>
                <ol>
                    <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                    <li><a href="weeks/week4/form1.php">form1.php</a></li>
                    <li><a href="weeks/week4/form2.php">form2.php</a></li>
                    <li><a href="weeks/week4/form3.php">form3.php</a></li>
                    <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                    <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
                </ol>
            <h3>Week Five</h3>
                <ol>
                    <li><a href="weeks/week5/currency.php">currency.php</a></li>
                    <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                    <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
                    <li><a href="weeks/week5/null.php">null.php</a></li>
                </ol>
            <h3>Week Six</h3>
                <ol>
                    <li><a href="weeks/week6/form.php">form.php</a></li>
                    <li><a href="weeks/week6/form2.php">form2.php</a></li>
                    <li><a href="weeks/week6/functions.php">functions.php</a></li>
                </ol>
                <h3>Week Seven</h3>
                <ol>
                    <li><a href="weeks/week7/form3.php">form3.php</a></li>
                    <li><a href="weeks/week7/strings.php">strings.php</a></li>
                    <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
                    <li><a href="weeks/week7/rand.php">rand.php</a></li>
                </ol>
                <h3>Week Eight</h3>
                <ol>
                    <li><a href="weeks/week8/people.php">people.php</a></li>
                </ol>
        </aside>
        <footer>
            <ul>
                <li>Copyright &copy; 2022</li>
                <li>All Rights Reserved</li>
                <li><a href="index.php">Web Design by Natasha Moore</a></li>
                <li><a id="html-checker" href="#">HTML Validation</a></li>
                <li><a id="css-checker" href="#">CSS Validation</a></li>
                </ul>
                
                <script>
                        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
                </script>

     </footer>
    </div>
    <!-- end wrapper -->
</body>
</html>