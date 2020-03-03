<?php
interface FigureInterface
{


public function Squre($parameters,$a= 1);
}
 
interface PrimitiveInterface
{


    public function indexPrimitive();
} 
//             ------------------------END interface---------------------



class Triangle implements FigureInterface
{
    public function Squre($parameters, $a = 1){
        

        $result =($a * $parameters)/2 ;
        return  $result;

    }

}

class Circle  implements FigureInterface
{
    public $pi= 3.14;
    public function Squre($parameters, $a= 1)
    {
      $result =$a* $this->pi * ($parameters * $parameters) ;
         return  $result;
    }
}
 
class Box implements FigureInterface
{

    public function Squre($parameters, $a= 1)
    {
    $result =  $a* $parameters*$parameters;
    return $result;
    }
}
//             ------------------------END Figure---------------------

class Line implements PrimitiveInterface
{
    public function indexPrimitive()
    {
        # code...
    }
}

class Point implements PrimitiveInterface
{
    public function indexPrimitive()
    {
        # code...
    }
}

$data = [
    new Line(),
    new Box(),
    new Circle(),
    new Point(),
    new Line(),
    new Triangle(),
    new Point(),
    new Circle()
];

foreach ($data as $key => $value) {
    if($value instanceof FigureInterface){
        $figures[] = $value;
    }
    else{
        $primitives[] = $value;
    }
}



?> 