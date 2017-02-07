<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rentables.php";

    $app = new Silex\Application();

    $app->get("/", function() {
            return "
            <!DOCTYPE html>
            <html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <title>Rent a Cat!</title>
            </head>
            <body>
                <div class='container'>
                    <h1>Rent a Cat</h1>
                    <p>Enter the max weight and age of the cat you want to rent</p>
                    <form action='/view_cats'>
                        <div class='form-group'>
                          <label for='age'>Enter the max age:</label>
                          <input id='age' name='age' class='form-control' type='number'>
                        </div>
                        <div class='form-group'>
                          <label for='weight'>Enter the max. weight (in pounds):</label>
                          <input id='weight' name='weight' class='form-control' type='number'>
                        </div>
                        <button type='submit' class='btn-success'>Submit</button>
                    </form>
                </div>
            </body>
            </html>
            ";
        });

    $app->get("/view_cats", function() {
      $skinny = new Cat("skinny", 8, 30.5, "white and grey", "female");
      $skinny->setWeight(30.5);
      $spongeBob = new Cat("Sponge Bob", 13, 35, "orange", "male");
      $meow = new Cat("Meow", 3, 43, "black", "male");

      $cats = array($skinny, $spongeBob, $meow);

      $cats_matching_search = array();
      foreach ($cats as $cat) {
        if ($cat->age < $_GET["age"] && $cat->weight < $_GET["weight"]) {
          array_push($cats_matching_search, $cat);
        }
      }

      $output = "";
      foreach ($cats_matching_search as $cat) {
                $output = $output . "
                <li> $cat->name </li>
                <ul>
                <li> age: $cat->age </li>
                <li> weight: $cat->weight lbs</li>
                <li> gender: $cat->gender </li>
                </ul>
                </body>
                </html>
                ";
            }
            return $output;
    });

    return $app;
?>
