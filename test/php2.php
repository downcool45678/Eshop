<!DOCTYPE html>
<html>
    <body>
        <?php
        $x=10;
        $y=15;
        function myfunction(){
             global $x,$y;
            $y=$x+$y;
        }

         myfunction();
         echo $y;
        ?>
        </body>
        </html>
