<!--Challenge #1 of 3 -->
<!--Our favorite pet - Waggy Pig - is a cute white silly dog.

Your Mission
Update the code below to use an associative array: set they keys of the array to name, weight, age and bio.

Then, update the code below so Waggy Pig's bio still prints out! -->

<?php
$waggyPig = [
    'name' => 'Waggy Pig',
    'weight' => 10,
    'age' => 7,
    'bio' => 'Sleepy white fluffy dog',
];
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div class="age"><?php echo $waggyPig['age']; ?></div>
<div class="weight"><?php echo $waggyPig['weight']; ?></div>
<p><?php echo $waggyPig['bio']; ?></p>

<!--Challenge #1 of 3 -->
<!--We went to ancestry.com and have discovered Waggy Pig's breed: bichon.

Your Mission
Add a new breed key set to bichon on a new line after the $waggyPig array has already been created.

Print this new info below! -->
$waggyPig = [
'name' => 'Waggy Pig',
'weight' => 10,
'age' => 7,
'bio' => 'Sleepy white fluffy dog',
];
$waggyPig['breed'] = 'bichon';
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div class="age"><?php echo $waggyPig['age']; ?></div>
<div class="weight"><?php echo $waggyPig['weight']; ?></div>
<div class="breed">
    <?php echo $waggyPig['breed']; ?>
</div>
<p><?php echo $waggyPig['bio']; ?></p>