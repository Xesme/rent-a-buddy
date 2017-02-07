<?php
    class Cat
    {
        public $name;
        public $age;
        public $weight;
        public $color;
        public $gender;

        function __construct($name, $age, $weight, $color, $gender)
        {
            $this->name = $name;
            $this->age = $age;
            $this->weight = $weight;
            $this->color = $color;
            $this->gender = $gender;
            // $this->image = $image;
        }

        function setWeight($new_weight)
        {
            $float_weight = (float) $new_weight;
            if ($float_weight !=0) {
                $formatted_weight = number_format($float_weight, 0);
                $this->weight = $formatted_weight;
            }
        }
    }
?>
