<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>studentAdded</title>
    <meta name="author" content="Mark Packham">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<header></header>
<div class="container">
    <p>
        <a href="getStudentInfo.php">All entered students</a>
    </p>

    <?php

    if (isset($_POST['submit'])) {

        $data_missing = array();

        if (empty($_POST['first_name'])) {

            // Adds name to array so we can loop through the array later on and yell at the user what is missing
            $data_missing[] = 'First Name';

        } else {

            // Trim white space from the name and store the name
            $f_name = trim($_POST['first_name']);

        }

        if (empty($_POST['last_name'])) {

            // Adds name to array
            $data_missing[] = 'Last Name';

        } else {

            // Trim white space from the name and store the name
            $l_name = trim($_POST['last_name']);

        }

        if (empty($_POST['email'])) {

            // Adds name to array
            $data_missing[] = 'Email';

        } else {

            // Trim white space from the name and store the name
            $email = trim($_POST['email']);

        }

        if (empty($_POST['street'])) {

            // Adds name to array
            $data_missing[] = 'Street';

        } else {

            // Trim white space from the name and store the name
            $street = trim($_POST['street']);

        }

        if (empty($_POST['city'])) {

            // Adds name to array
            $data_missing[] = 'City';

        } else {

            // Trim white space from the name and store the name
            $city = trim($_POST['city']);

        }

        if (empty($_POST['state'])) {

            // Adds name to array
            $data_missing[] = 'State';

        } else {

            // Trim white space from the name and store the name
            $state = trim($_POST['state']);

        }

        if (empty($_POST['zip'])) {

            // Adds name to array
            $data_missing[] = 'Zip Code';

        } else {

            // Trim white space from the name and store the name
            $zip = trim($_POST['zip']);

        }

        if (empty($_POST['phone'])) {

            // Adds name to array
            $data_missing[] = 'Phone Number';

        } else {

            // Trim white space from the name and store the name
            $phone = trim($_POST['phone']);

        }

        if (empty($_POST['birth_date'])) {

            // Adds name to array
            $data_missing[] = 'Birth Date';

        } else {

            // Trim white space from the name and store the name
            $b_date = trim($_POST['birth_date']);

        }

        if (empty($_POST['sex'])) {

            // Adds name to array
            $data_missing[] = 'Sex';

        } else {

            // Trim white space from the name and store the name
            $sex = trim($_POST['sex']);

        }

        if (empty($_POST['lunch'])) {

            // Adds name to array
            $data_missing[] = 'Lunch Cost';

        } else {

            // Trim white space from the name and store the name
            $lunch = trim($_POST['lunch']);

        }

        if (empty($data_missing)) {

            require_once('connect/mysqli_connect.php');

            $query = "INSERT INTO students (first_name, last_name, email,
        street, city, state, zip, phone, birth_date, sex, date_entered,
        lunch_cost, student_id) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL)";

            //stmt is shorthand for statement, here we prepare an SQL statement for execution
            $stmt = mysqli_prepare($dbc, $query);

            //Binds variables to a prepared statement as parameters, this is the procedural style, the OO style sysntax is different
            //http://php.net/manual/en/mysqli-stmt.bind-param.php

            //s means String, i means integer and d means double when it comes to types. The only one we don't have is a b for blob (a binary large object that can hold a variable amount of data)
            mysqli_stmt_bind_param($stmt, "ssssssisssd", $f_name,
                $l_name, $email, $street, $city,
                $state, $zip, $phone, $b_date,
                $sex, $lunch);

            mysqli_stmt_execute($stmt);

            //mysqli_stmt_affected_rows Returns the total number of rows changed, deleted, or inserted by the last executed statement
            $affected_rows = mysqli_stmt_affected_rows($stmt);

            if ($affected_rows == 1) {

                echo 'Student Entered';

                mysqli_stmt_close($stmt);

                mysqli_close($dbc);

            } else {

                echo 'Error Occurred<br />';

                echo mysqli_error();

                mysqli_stmt_close($stmt);

                mysqli_close($dbc);

            }

        } else {

            echo 'You need to enter the following data<br/>';

            foreach ($data_missing as $missing) {

                echo "$missing<br/>";

            }

        }

    }

    ?>

    <form action="http://localhost/PHPMysql/studentAdded.php" method="post">

        <b>Add a New Student</b>

        <p>First Name:
            <input type="text" name="first_name" size="30" value=""/>
        </p>

        <p>Last Name:
            <input type="text" name="last_name" size="30" value=""/>
        </p>

        <p>Email:
            <input type="text" name="email" size="30" value=""/>
        </p>

        <p>Street:
            <input type="text" name="street" size="30" value=""/>
        </p>

        <p>City:
            <input type="text" name="city" size="30" value=""/>
        </p>

        <p>State (2 Characters):
            <input type="text" name="state" size="30" maxlength="2" value=""/>
        </p>

        <p>Zip Code:
            <input type="text" name="zip" size="30" maxlength="5" value=""/>
        </p>

        <p>Phone Number:
            <input type="text" name="phone" size="30" value=""/>
        </p>

        <p>Birth Date (YYYY-MM-DD):
            <input type="text" name="birth_date" size="30" value=""/>
        </p>

        <p>Sex (M or F):
            <input type="text" name="sex" size="30" maxlength="1" value=""/>
        </p>

        <p>Lunch Cost:
            <input type="text" name="lunch" size="30" value=""/>
        </p>

        <p>
            <input type="submit" name="submit" value="Send"/>
        </p>

    </form>

</div>
<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script></script>
</body>
</html>