<!DOCTYPE html>
<html>
    <body>
        <?php
        function func()
        {
            Static $x=10;
            $x++;
            echo $x;
        }
    func();
    echo "\n";
    func();
    echo "\n";
    func();
    echo "\n";
    ?>
    </body>
    </hmtl>
    