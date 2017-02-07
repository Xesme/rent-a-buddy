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
        }

        $skinny = new Cat("skinny", 8, 30.52, "white and grey", "female");
        $spongeBob = new Cat("Sponge Bob", 13, 35.08, "orange", "male");
        $meow = new Cat("Meow", 3, 43.22, "black", "male");

        $cats = array($skinny, $spongeBob, $meow);

        $cats_matching_search = array();
        foreach ($cats as $cat) {
            if ($cat->age < $_GET["age"] && $cat->weight < $_GET["weight"]) {
              array_push($cats_matching_search, $cat);
            }
        }

    }





?>
