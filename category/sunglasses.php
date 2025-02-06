<?php
// Sample data for sunglasses (in a real application, you would fetch this from a database)
$sunglasses = [
    [
        'name' => 'Stylish Sunglasses 1',
        'price' => '50',
        'size' => 'Medium',
        'image' => '../swipe_images/Screenshot 2025-02-03 105604.png' // Path to sunglasses image
    ],
    [
        'name' => 'Fashionable Sunglasses 2',
        'price' => '65',
        'size' => 'Large',
        'image' => '../swipe_images/Screenshot 2025-02-03 105613.png'
    ],
    [
        'name' => 'Classic Sunglasses 3',
        'price' => '80',
        'size' => 'Small',
        'image' => '../swipe_images/Screenshot 2025-02-03 105623.png'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunglasses - Efashion</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- Main Container -->
    <div class="main-container">
        
        <!-- Top Bar Section -->
        <div id="topbar"></div>

        <!-- Sunglasses Section -->
        <div class="items-container">
            <div class="main-content">
                <?php foreach ($sunglasses as $sunglass): ?>
                    <div class="item">
                        <img src="<?php echo $sunglass['image']; ?>" alt="<?php echo $sunglass['name']; ?>">
                        <h3><?php echo $sunglass['name']; ?></h3>
                        <p>Price: $<?php echo $sunglass['price']; ?></p>
                        <p>Size: <?php echo $sunglass['size']; ?></p>
                        <div class="buttons">
                            <button class="button">Buy Now</button>
                            <button class="button">Add to Cart</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <div class="gap"></div>

    <script>
        // Load the top bar dynamically
        fetch('../topbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('topbar').innerHTML = data;
            });
    </script>

</body>

</html>
