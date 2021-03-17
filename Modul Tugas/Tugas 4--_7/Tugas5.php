<html>
    <body>
        <?php
        


        function writeFile($result, $symbol){
        $filename = "result.txt";
        $file = fopen( $filename, "w" );
        fwrite($file,  $_GET['num1'] . " $symbol " . $_GET['num2'] . " = " . $result);
        fclose($file);
        }

        function plus($num1, $num2){
            $hasil = $_GET['num1'] + $_GET['num2'];
            return $hasil;
        }

        function minus($num1, $num2){
            $hasil = $_GET['num1'] - $_GET['num2'];
            return $hasil;
        }
        
        function thingamabob(){
        if(isset($_GET['submit']))
        {   if(isset($_GET['taskOption']) == 'plus')
            {
                $hasil = plus($_GET['num1'], $_GET['num2'] );
                writeFile($hasil, "+");


            }elseif(isset($_GET['taskOption']) == 'minus')
            {
                $hasil = minus($_GET['num1'], $_GET['num2'] );
                writeFile($hasil, "-");

            }

        }
        }

        if(isset($_GET['submit']))
            {
                thingamabob();
            }
        ?>
        <form action=" " method="GET">
        <input type="text" name="num1">
        <select name="taskOption">
        <option value="plus">+</option>
        <option value="minus">-</option>
        </select>
        <input type="text" name="num2">
        <input type="submit" name="submit">
        </form>
    <body>
</html>