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
        // Average of two values

        $value1 = "69";
        $value2 = "150";

        //create a function that computes the average of two values

        function average($var1, $var2) {
            $sum = $var1 + $var2;
            $average = $sum / 2;
            echo "The average of two values between $var1 and $var2 is $average.";
        }

        // call the average function and provide two parameters for var1 and var2
        average($value1, $value2);
    ?>
</body>
</html>
