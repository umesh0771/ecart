<?php
// Sample data for shoes (in a real application, you would fetch this from a database)
$shoes = [
    [
        'name' => 'Fashionable Shoes 1',
        'price' => '50',
        'size' => '9',
        'image' => '../swipe_images/Screenshot 2025-02-03 105426.png' // Path to shoe image
    ],
    [
        'name' => 'Stylish Shoes 2',
        'price' => '65',
        'size' => '10',
        'image' => '../swipe_images/Screenshot 2025-02-03 105438.png'
    ],
    [
        'name' => 'Classic Shoes 3',
        'price' => '80',
        'size' => '11',
        'image' => '../swipe_images/Screenshot 2025-02-03 105450.png'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes - Efashion</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- Main Container -->
    <div class="main-container">
        
        <!-- Top Bar Section -->
        <div id="topbar"></div>

        <!-- Shoes Section -->
        <div class="items-container">
            <div class="main-content">
                <?php foreach ($shoes as $shoe): ?>
                    <div class="item">
                        <img src="<?php echo $shoe['image']; ?>" alt="<?php echo $shoe['name']; ?>">
                        <h3><?php echo $shoe['name']; ?></h3>
                        <p>Price: $<?php echo $shoe['price']; ?></p>
                        <p>Size: <?php echo $shoe['size']; ?></p>
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
