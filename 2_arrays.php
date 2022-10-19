<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $greeting = "Hello world";

        echo "This is my greeting: $greeting <br>";

        //Indexed Array
        $fruit = array("apples", "pears", "oranges");
        //                 0        1         2
        //echo $fruit[0];

        echo "My favorite fruit is: $fruit[0] <br>";

        //Associative Array

        $fruit = array(
            "first" => "apples",
            "second" => "pears",
            "third" => "oranges",
            'mango'
        );

        echo $fruit[0];
        echo "<br>";

        echo "<pre>";
        print_r($fruit);
        echo "</pre>";

        echo "<pre>";
        var_dump($fruit);
        echo "</pre>";

        //first variant of foreach
        foreach($fruit as $prutas) {
            echo "The fruit is $prutas <br>";
        }

        foreach ($fruit as $key => $value) {
            echo "Key is: $key - Value is: $value <br>";
        }

        // Number of values inside of an array.
        echo "The number of values in fruit array are " . count($fruit);

        array_sum($temperature)/count($temperature);
    ?>
</body>
</html>
