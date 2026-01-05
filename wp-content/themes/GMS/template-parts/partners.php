<?php
$current_object = get_queried_object();
$slug = '';

if (is_page()) {
    $slug = $current_object->post_name;
} elseif (is_single()) {
    $slug = $current_object->post_name;
}
?>

<div class="partners <?php echo $slug; ?>">
    <div class="partners-logo">
        <div class="partners-slider">
        </div>
    </div>
</div>
