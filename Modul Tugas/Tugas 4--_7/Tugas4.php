<html>
    <body>
        <?php
        
        function readingFile(){
        $filename = "mahasiswa.txt";
        $file = fopen($filename,"r");

        if($file == false)
        {
            echo"error no file detected!!!";
            exit();
        }

        $filesize = filesize( $filename );
        $filetext = fread( $file, $filesize );
        fclose( $file ); 
        
        echo ( "<pre>$filetext</pre>" );
        }

        function appendingFile(){
        $filename = "mahasiswa.txt";
        $file = fopen( $filename, "a" );
        fwrite($file, "\nNRP: ". $_GET['NRP']);
        fclose($file);
        }

        ?>

        <?php
            
            if(isset($_GET['submit']))
            {
                appendingFile();
                readingFile();
            }
        ?>
        <form action=" " method="GET">
        <input type="text" name="NRP">
        <input type="submit" name="submit">
        </form>
    <body>
</html>