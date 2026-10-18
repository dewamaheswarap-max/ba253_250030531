<!DOCTYPE html>
<html>
    <body>
        <?php
        function hitungluaslingkaran ($jari){
            $luas = 3.14 * $jari * $jari ;
            return $luas;
        }
        $jari = 7;
        $luas = hitungluaslingkaran ($jari);

        echo "jari-jari lingkaran : " . $jari . "<br>";
        echo " Luas lingkaran :" . $luas;

        ?>
    </body>
</html>