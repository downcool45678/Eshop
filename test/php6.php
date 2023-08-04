<!DOCCTYPE html>
<html>
    <body>
        <?php
        class Car{
            public  $model;
            public $color;
            public $type;
        function __construct($model,$color,$type)
        {
            $this->model=$model;
            $this->color=$color;
            $this->type=$type;


        }
        function printing()
        {
            echo $this->model;
            echo $this->color;
            echo $this->type;

        } }
        $obj = new Car("vinylc","black","ZERO");
        $obj->printing();
    
        ?>
        </body>
        </html>