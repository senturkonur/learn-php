<!-- Challenge #1 of 2 -->
<!-- Your Mission
Move the get_great_pet_toys() function out of index.php and into the new lib/functions.php file so we can re-use it later. -->

<?php
require __DIR__.'/lib/functions.php';

$toys = get_great_pet_toys();
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>