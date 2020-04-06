<!-- Challenge #1 of 3 -->
<!-- Your Mission
Access the bio on Pancake and print it inside the <h1> tag. -->

<?php
$pets = [
    ['name' => 'Pico de Gato', 'bio' => 'Spicy kitty'],
];
$pets[] = ['name' => 'Waggy Pig', 'bio' => 'Little white dog'];
$pets[] = ['name' => 'Pancake', 'bio' => 'Breakfast is my favorite!'];
?>

<h1>
    <?php echo $pets[2]['bio']; ?>
</h1>

<!-- Challenge #2 of 3 -->
<!-- Your Mission
Using the $toys array below, create a foreach statement and print each toy's name inside an h3 tag and its color inside an h4 tag.

Avoid needing to echo the HTML tags by closing PHP at the end of the foreach line. -->

<?php
$toys = [];
$toys[] = ['name' => 'Bacon Bone', 'color' => 'Bacon-colored'];
$toys[] = ['name' => 'Tennis Ball', 'color' => 'Yellow'];
$toys[] = ['name' => 'Frisbee', 'color' => 'Red'];
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>

<!-- Challenge #3 of 3 -->
<!-- Your Mission
Using the count() function, print the total number of pet toys that we're selling in the <h4> tag.

Hint: Be sure the $toys variable is defined before trying to count it!-->

<?php
$toys = [];
$toys[] = ['name' => 'Bacon Bone', 'color' => 'Bacon-colored'];
$toys[] = ['name' => 'Tennis Ball', 'color' => 'Yellow'];
$toys[] = ['name' => 'Frisbee', 'color' => 'Red'];
?>

<h4>
    <!-- replace the XXXX with the real number of toys using count -->
    Selling <?php echo count($toys); ?> Toys
</h4>
