<html>
    <body>
    <?php
    $subject='Nama saya adalah Budi Agus Ramadhan ';
    $pattern = "/Budi/i";
    echo preg_replace($pattern, "Imam", $subject);
    ?>

    <body>
</html>