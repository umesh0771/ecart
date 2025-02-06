<?php
$dir = 'swipe_images/';  // Your images folder
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Get all image files

$imageUrls = array_map(function ($image) {
    return $image;
}, $images);

echo json_encode($imageUrls);
?>
