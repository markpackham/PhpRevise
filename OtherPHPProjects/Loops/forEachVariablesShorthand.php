<h1>Shoe Shop</h1>
<?php
$footwear = [
    "sandals" => 4,
    "sneakers" => 7,
    "boots" => 3,
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
    // We have to use this to get the variable below  <?= for brands
    // followed by     ? >    (had to provide a space between the characters of the comment wouldn't work)
    ?>
					<p>We sell <?=$brands?> brands of <?=$type?></p>
					<?php
endforeach;
?>