<!DOCTYPE html>
<html>
    <body>
        <?php
        $angka = range (1,20);
        echo " Angka 20 yang habis di bagi 3 : <br>";
        for ($i = 0; $i < count($angka); $i++){
            if ($angka [$i] % 3 == 0){
                echo " Habis di Bagi 3 : " .  $angka [$i] . "<br>";
            }
        }

        ?>
    </body>
</html