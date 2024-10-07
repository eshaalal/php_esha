<?php
class Fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}
$apple=new fruit();
$apple->set_name('apple');
$apple->set_color('red');
echo "name: ".$apple->get_name();
echo "<br>";
echo "color: ".$apple->get_color();
?>