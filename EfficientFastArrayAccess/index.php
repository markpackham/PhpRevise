<?php

function getUser()
{
    return [
        'Mark',
        'mark@somewhere.com',
        new DateTime('2nd June 2013')
    ];
}

//This is what you have to do if you don't use list()
//echo getUser()[1];

/* You can assign this list to any array */
list($username, $email, $dob) = getUser();

echo $email . "<br>" . $username;