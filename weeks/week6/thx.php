<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<h2 style="margin-top:30px;">Thank you for your submission!</h2>

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