<?php
/*
//Check for posted data
if (filter_has_var(INPUT_POST, 'data')) {
    echo 'Post Data Found' . '<br>';
} else {
    echo 'No Post Data' . '<br>';
}
*/

if (filter_has_var(INPUT_POST, 'data')) {

    $email = $_POST['data'];
    //Remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email . '<br>';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email is valid <br>';
    } else {
        echo 'Email is not valid <br>';
    }

    /*
     * With FILTER_VALIDATE_
     * we can do
     * BOOLEAN, EMAIL, FLOAT, INT, IP, REGEXP, URL
     */

    /*
     * With FILTER_SANITIZE_ we have
     * EMAIL, ENCODED, NUMBER_FLOAT, SPECIAL_CHARS, STRING, URL
     */
}

/*
$var = 23;

if (filter_var($var, FILTER_VALIDATE_INT)) {
    echo $var . ' is a number <br>';
}
else{
    echo $var . ' is not a number <br>';
}
*/


/*
$number = '333fsdfds223';
//strip out all the letters so we just have numebrs
var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
*/

/*
$var = '<script>alert(1)</script>';
echo $var;
//conver special characters into harmless characters
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
*/

/*
$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
);
//won't print data if first isn't an email and 2nd isn't a number from 1-100
print_r(filter_input_array(INPUT_POST, $filters));
*/

$array = array(
    "name" => "mark packham",
    "age" => "9999",
    "email" => "mark@email.com"
);

$filters = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        //ucwords — Uppercase the first character of each word in a string
        "options" => "ucwords"
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 200
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);

//age data won't show since it is out of range
print_r(filter_var_array($array, $filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Email Check Submit</button>
</form>
<br>
