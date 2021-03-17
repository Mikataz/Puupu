<html>
    <body>
    <?php
    $subject='Institut Teknologi dan Bisnis Kalbis';
    $keywords = preg_split("/[\s,]+/", $subject); 
    $length = count($keywords);
    for ($x = 0; $x <= $length-1; $x++ )
    {
        echo $keywords[$x] . "</br>";
    }
    ?>

    <body>
</html>