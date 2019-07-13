<div class="container">
    <p>
        <a href="studentAdded.php">Add students</a>
    </p>

    <?php
    // Get a connection for the database
    require_once('connect/mysqli_connect.php');

    // Create a query for the database
    $query = "SELECT student_id, first_name, last_name, email, street, city, state, zip,
phone, lunch_cost, birth_date, sex FROM students";

    // Get a response from the database by sending the connection
    // and the query
    $response = @mysqli_query($dbc, $query);

    // If the query executed properly proceed
    if ($response) {

        echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr>
<td align="left"><b>Student Id</b></td>
<td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>Zip</b></td>
<td align="left"><b>Phone</b></td>
<td align="left"><b>Lunch Cost</b></td>
<td align="left"><b>Birth Day</b></td>
<td align="left"><b>Sex</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
        while ($row = mysqli_fetch_array($response)) {

            echo '<tr><td align="left">' .
                $row['student_id'] . '</td><td align="left">' .
                $row['first_name'] . '</td><td align="left">' .
                $row['last_name'] . '</td><td align="left">' .
                $row['email'] . '</td><td align="left">' .
                $row['street'] . '</td><td align="left">' .
                $row['city'] . '</td><td align="left">' .
                $row['state'] . '</td><td align="left">' .
                $row['zip'] . '</td><td align="left">' .
                $row['phone'] . '</td><td align="left">' .
                $row['lunch_cost'] . '</td><td align="left">' .
                $row['birth_date'] . '</td><td align="left">' .
                $row['sex'] . '</td><td align="left">';
            echo '</tr>';
        }
        echo '</table>';

    } else {

        echo "Couldn't issue database query<br />";

        echo mysqli_error($dbc);

    }

    // Close connection to the database
    mysqli_close($dbc);

    ?>
</div>
