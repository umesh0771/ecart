<?php
// Sample data for jackets (in a real application, you would fetch this from a database)
$jackets = [
    [
        'name' => 'Fashionable Jacket 1',
        'price' => '50',
        'size' => 'M',
        'image' => '../swipe_images/Screenshot 2025-02-03 105514.png' // Path to jacket image
    ],
    [
        'name' => 'Stylish Jacket 2',
        'price' => '65',
        'size' => 'L',
        'image' => '../swipe_images/Screenshot 2025-02-03 105524.png'
    ],
    [
        'name' => 'Classic Jacket 3',
        'price' => '80',
        'size' => 'XL',
        'image' => '../swipe_images/Screenshot 2025-02-03 105541.png'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackets - Efashion</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- Main Container -->
    <div class="main-container">
        
        <!-- Top Bar Section -->
        <div id="topbar"></div>

        <!-- Jackets Section -->
        <div class="items-container">
            <div class="main-content">
                <?php foreach ($jackets as $jacket): ?>
                    <div class="item">
                        <img src="<?php echo $jacket['image']; ?>" alt="<?php echo $jacket['name']; ?>">
                        <h3><?php echo $jacket['name']; ?></h3>
                        <p>Price: $<?php echo $jacket['price']; ?></p>
                        <p>Size: <?php echo $jacket['size']; ?></p>
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
