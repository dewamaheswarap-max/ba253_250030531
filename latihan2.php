<!DOCTYPE html>
<html>
    <body>
        <?php
        $ganjil = " ";
        $genap = " ";

        for ($i = 1; $i <=18; $i++){
            if ($i % 2 == 0){
                $genap .= $i. " ";
            } else  {
                 $ganjil .= $i. " ";

            }
            
        }

        echo "Bilangan Genap : $genap <br>";
        echo "Bilangan Ganjil : $ganjil <br>";

        ?>
    </body>
</html>