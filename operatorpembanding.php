<!DOCTYPE html>
<html>
    <body>

       <?php
        $x = 10;
        $y = "10";
        
        echo "x = $x, y =$y <br><br>";

        echo "TAMPILKAN HASIL :" . "<br>";
        
        echo "Nilai Sama :";
        var_dump($x == $y);
        echo "<br>";

        echo "Nilai Identik :";
        var_dump($x === $y);
        echo "<br>";

        echo "Lebih Besar :";
        var_dump($x > $y);
        echo "<br>";

        echo "Lebih Kecil :";
        var_dump($x < $y);
        echo "<br>";

        
        echo "<br>Operator<=>menghasilkan: " . ($x <=> $y);


        ?>
    </body>
</html>