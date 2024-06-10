<?php
$title = get_field('title') ?: 'Default title';
$description = get_field('description') ?: 'Default description';

ob_start(); // Start output buffering
?>
<div class="my-block">
    <h2><?php echo esc_html($title); ?></h2>
    <p><?php echo esc_html($description); ?></p>
</div>
<?php
return ob_get_clean(); // End output buffering and return the result