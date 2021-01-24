<?php

$myName = "Kyle";
$names = array('Kyle', 'Jib', 'Jab');
$count = 0;

?>

<p>Hi there, my name is <?php echo $names[1]; ?>.</p>

<?php while($count < count($names)) {
    echo "<li>Hi my name is $names[$count]</li>";
    $count++;
}
?>

<?php
    while(have_posts()) {
        the_post(); ?>
        <h2><?php the_title();?></h2>
        <?php the_content(); ?>
        <hr>
    <?php }
?>

