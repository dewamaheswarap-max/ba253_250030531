<!DOCTYPE html>
<html>
    <body>
        <?php
        function NilaiAkhir ($tugas, $uts, $uas){
            $nilaiakhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
            if($nilaiakhir >70){
                $status = "lulus";
            } else{
                $status = "tidak lulus";

            }
            echo "Output : <br>";
            echo "Nilai akhir : " . $nilaiakhir . "<br>";
            echo "Status :" . $status . "<br>";

        }
        NilaiAkhir (80, 75, 90);
        ?>
    </body>
</html>