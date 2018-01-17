<?php

$quotes = [
    [
        'author' => 'H. G. Wells',
        'text' => "Moral indignation is jealousy with a halo.",
    ],
    [
        'author' => 'Napoleon Bonaparte',
        'text' => "Glory is fleeting, but obscurity is forever.",
    ],
    [
        'author' => 'Saint Thomas More',
        'text' => "Sex and religion are closer to each other than either might prefer.",
    ],
    [
        'author' => 'Michelangelo di Lodovico Buonarroti Simoni',
        'text' => "The greater danger for most of us lies not in setting our aim too high and falling short, but in setting our aim too low, and achieving our mark.",
    ],
    [
        'author' => 'A. J. Liebling',
        'text' => "I can write better than anybody who can write faster, and I can write faster than anybody who can write better.",
    ],
    [
        'author' => 'Soren Aabye Kierkegaard',
        'text' => "People demand freedom of speech to make up for the freedom of thought which they avoid.",
    ],
    [
        'author' => 'Saint Augustine',
        'text' => "Give me chastity and continence, but not yet.",
    ],
    [
        'author' => 'Albert Einstein',
        'text' => "Not everything that can be counted counts, and not everything that counts can be counted.",
    ],
    [
        'author' => 'Albert Einstein',
        'text' => "Only two things are infinite, the universe and human stupidity, and I'm not sure about the former.",
    ],
    [
        'author' => 'Sir Winston Churchill',
        'text' => "A lie gets halfway around the world before the truth has a chance to get its pants on.",
    ],
    [
        'author' => 'Leon Trotsky',
        'text' => "You may not be interested in war, but war is interested in you.",
    ],
    [
        'author' => 'Galileo Galilei',
        'text' => "I do not feel obliged to believe that the same God who has endowed us with sense, reason, and intellect has intended us to forgo their use."
    ]
];

//Old way of doing things working with the arrays length
//$quote = $quotes[rand(0, count($quotes) - 1)];

//Using array_rand saves time
$quote = $quotes[array_rand($quotes)];

$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Quote Generator</title>
</head>
<body>
<blockquote>
    <h2>
        &ldquo;<?php echo $quoteText ?>&rdquo;
        <br>
        <strong>- <?php echo $quoteAuthor ?></strong>
    </h2>
</blockquote>
</body>
</html>
