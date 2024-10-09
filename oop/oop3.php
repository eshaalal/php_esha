<?php
class Car {
    public $make;
    public $model;
    public $year;

    // Setter method for car make
    function set_make($make) {
        $this->make = $make;
    }

    // Getter method for car make
    function get_make() {
        return $this->make;
    }

    // Setter method for car model
    function set_model($model) {
        $this->model = $model;
    }

    // Getter method for car model
    function get_model() {
        return $this->model;
    }

    // Setter method for car year
    function set_year($year) {
        $this->year = $year;
    }

    // Getter method for car year
    function get_year() {
        return $this->year;
    }
}

$car1 = new Car();
$car1->set_make('Toyota');
$car1->set_model('Corolla');
$car1->set_year(2020);

echo "Car Make: " . $car1->get_make();
echo "<br>";
echo "Car Model: " . $car1->get_model();
echo "<br>";
echo "Car Year: " . $car1->get_year();
echo "<br>";
?>