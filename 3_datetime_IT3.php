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

        //get the current timezone
        echo date_default_timezone_get(); echo "<br>";

        date_default_timezone_set("Asia/Manila");

        //hatag lage ug time() - meresi
        echo time();


        // display the current date and time
        // Friday, October 21, 2022 08:13:00 AM

        $currentdatetime = getdate();

        echo "<pre>";
            print_r($currentdatetime);
        echo "</pre>";

        echo "Today is: " . $currentdatetime["weekday"] . ", " . $currentdatetime['month'] . " " . $currentdatetime['mday'] . ", " . $currentdatetime["year"] . " " . $currentdatetime["hours"] . ":" . $currentdatetime['minutes'] . ":" . $currentdatetime['seconds'];

        echo "<hr>";
        
        // Options to be used in date() - 
        /*
            Friday, October 21, 2022 08:13:00 AM

            l - A full textual representation of a day
            F - A full textual representation of a month (January through December)
            d - The day of the month (from 01 to 31)
            Y - A four digit representation of a year

            h - 12-hour format of an hour (01 to 12)
            i - Minutes with leading zeros (00 to 59)
            s - Seconds, with leading zeros (00 to 59)
            A - Uppercase AM or PM
        */
        echo "Today is " . date("l, F d, Y h:i:s A");

        /*
            MySQL database format
            2022-10-21 09:00:00

            Y - A four digit representation of a year
            m - A numeric representation of a month (from 01 to 12)
            d - The day of the month (from 01 to 31)

            H - 24-hour format of an hour (00 to 23)
            i - Minutes with leading zeros (00 to 59)
            s - Seconds, with leading zeros (00 to 59)
        */

        echo "<hr>";

        $databaseTime = date("Y-m-d H:i:s");

        echo "MySQL database date format is: " . $databaseTime . "<br>";
        echo "Converted time into proper formatting ".date("l, F d, Y h:i:s A", strtotime($databaseTime));

        // YEAR() MONTH() DAY() HOURS() MINUTES() 
    ?>
</body>
</html>
