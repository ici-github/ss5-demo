<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" required placeholder='Please enter your username' style="width:100%"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required placeholder='Please enter your password' style="width:100%"></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td>
                    <input type="radio" name="sex" value="Male">Male<br>
                    <input type="radio" name="sex" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="Eating"> Eating <br>
                    <input type="checkbox" name="hobby[]" value="Reading"> Reading <br>
                    <input type="checkbox" name="hobby[]" value="Gaming"> Gaming <br>
                    <input type="checkbox" name="hobby[]" value="Netflix and chill"> Netflix and chill <br>
                    <input type="checkbox" name="hobby[]" value="Cleaning household chores">Cleaning household chores<br> 
                    <input type="checkbox" name="hobby[]" value="Drawing digital art"> Drawing digital art <br>
                    <input type="checkbox" name="hobby[]" value="Procrastination"> Procrastination <br>
                </td>
            </tr>
            <tr>
                <td>
                    Image upload
                </td>
                <td>
                    <input type="file" name="upload">
                </td>
            </tr>
            <tr>
                <td>Course</td>
                <td>
                    <select name="course" id="">
                        <option value=""> -- SELECT COURSE BELOW -- </option>
                        <option value="IT"> Information Technology</option>
                        <option value="CA"> Culinary Arts</option>
                        <option value="CE"> Computer Engineering</option>
                        <option value="EIM">Electrical Installation and Maintenance</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pick favorite color</td>
                <td><input type="color" name="color" id=""></td>
            </tr>
            <tr>
                <td>Birthdate</td>
                <td><input type="date" name="birthdate" id=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit_registration" style="width:100%; height: 25px">Submit registration</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
       if(isset($_POST['submit_registration'])) {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sex = $_POST['sex'];
            $course = $_POST['course'];
            $color = $_POST['color'];
            $birthdate = date("l, F d, Y", strtotime($_POST['birthdate']));

            echo "<table>";
            echo "<tr>";
            echo "<td>Username</td>";
            echo "<td>$username</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Password</td>";
            echo "<td>$password</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Sex</td>";
            echo "<td>$sex</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Hobby</td>";
            echo "<td>";
                foreach($_POST['hobby'] as $selected_hobby) {
                    echo $selected_hobby . "<br>";
                }
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Course</td>";
            echo "<td>$course</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Color</td>";
            echo "<td style='background-color: $color'></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Birthdate</td>";
            echo "<td>$birthdate</td>";
            echo "</tr>";

            echo "</table>";
       }
    ?>
</body>
</html>