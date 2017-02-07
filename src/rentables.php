<?php
    class Cat
    {
        public $name;
        public $age;
        public $weight;
        public $color;
        public $gender;

        function __construct($name, $age, $weight, $color, $gender, $image)
        {
            $this->name = $name;
            $this->age = $age;
            $this->weight = $weight;
            $this->color = $color;
            $this->gender = $gender;
            $this->image = $image;
        }

        function setWeight =($new_weight);
        {
            $float_weight = (float) $new_weight;
            if ($float_weight !=0) {
                $formatted_weight = number_format($float_weight, 0);
                $this->weight = $formmated_weight;
            }
        }
    }

    $skinny = new Cat("skinny", 8, 30.52, "white and grey", "female", "img/skinny.jpg");
    $spongeBob = new Cat("Sponge Bob", 13, 35.08, "orange", "male", "img/sponge-bob.jpg");
    $meow = new Cat("Meow", 3, 43.22, "black", "male", "img/meow.jpg");

    $cats = array($skinny, $spongeBob, $meow);

    $cats_matching_search = array();
    foreach ($cats as $cat) {
        if ($cat->age < $_GET["age"] && $cat->weight < $_GET["weight"]) {
            array_push($cats_matching_search, $cat);
        }
    }
?>
