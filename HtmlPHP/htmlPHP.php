<?php
$about_me = [
    "name" => "Aisle Nevertell",
    "birth_year" => 1902,
    "favorite_food" => "pizza",
];

function calculateAge($person_arr)
{
    $current_year = date("Y");
    $age = $current_year - $person_arr["birth_year"];
    return $age;
}
?>
<h1>Welcome!</h1>
<h2>About me:</h2>
<?php
echo "<h3>Hello! I'm {$about_me["name"]}!</h3>";
echo "<p> I'm " . calculateAge($about_me) . " years old! That's pretty cool, right?</p>";
echo "<div>What more is there to say? I love {$about_me["favorite_food"]}, and that's pretty much it!</div>";
?>

<h2>Now tell me a little about you.</h2>

<?php
/*
Outputs the following
------
Welcome!
About me:
Hello! I'm Aisle Nevertell!
I'm 117 years old! That's pretty cool, right?

What more is there to say? I love pizza, and that's pretty much it!
Now tell me a little about you.

 */

/*
The front-end of a website consists of JavaScript, CSS, HTML, images, and other static assets sent to the client.
When we navigate to a website the browser is the client, and it sends a request to the back-end for all the assets needed to view and interact with the website.
The back-end consists of a web server and all the logic and data needed to create and maintain a website or web application.
PHP is a back-end language.
PHP can be used to generate HTML files.
We embed PHP scripts within HTML by inserting PHP code between the opening (<?php) and closing (?>) tags.
 */