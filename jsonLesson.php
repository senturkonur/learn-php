<!-- Challenge #2 of 3 -->

<!-- The toy inventory lives in a toys.json file. Great!

Your Mission
Read the toys.json file and use json_decode to turn it into a big array.

Make sure the foreach is still correctly printing each toy's details.

Be careful to make sure the keys from toys.json match what you're printing out! -->

<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>


<!-- Challenge #3 of 3 -->

<!-- Your Mission
Use file_put_contents() to save the text Dogs rule! into a new file called doglife.txt.

Then read that file and print the string in the h2 tag. -->

<?php
file_put_contents('doglife.txt', 'Dogs rule!');
?>

<h2>
    <?php echo file_get_contents('doglife.txt'); ?>
</h2>
