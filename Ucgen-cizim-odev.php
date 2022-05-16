<?php

function ucgen($miktar){

    for($satir=1 ; $satir <= $miktar ; $satir++){

        $sutun = 0;
        while($sutun < $satir){
            echo 0;
            $sutun++;
        }
        echo "<br>";
    }
}
ucgen(12);

?>