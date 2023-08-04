<!DOCTYPE html>
<html>
    <?php
    $X=1;
    $Y=2;
function myfun()
{

    $GLOBALS ['Y']=$GLOBALS ['X']+$GLOBALS ['Y'];
}
myfun();
echo $Y;
?>
</html>
