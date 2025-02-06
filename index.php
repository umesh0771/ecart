<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to eComputers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Top Bar Section -->
    <div id="topbar"></div>

    <!-- Main Container -->
    <div class="main-container">

        <!-- Image Carousel Section -->
        <div class="carousel-section">
            <div class="image-carousel-container">
                <div class="carousel" id="carousel">
                    <!-- Images will be dynamically loaded here -->
                </div>
                <!-- Carousel Navigation Buttons -->
                <button class="carousel-nav prev" onclick="prevImage()">&#10094;</button>
                <button class="carousel-nav next" onclick="nextImage()">&#10095;</button>
            </div>
        </div>


        <!-- Gap Between Sections -->
        <div class="gap"></div>

        <!-- Category Section with Swipeable Logos -->
        <div class="category-section-container">
            <h2 class="category-title">SHOP BY BRAND</h2>
            <button class="category-nav category-prev" onclick="prevImage()">&#10094;</button>

            <div class="categories-wrapper">
                <div class="categories" id="logo-carousel">
                    <!-- Logos will be dynamically loaded here -->
                </div>
            </div>

            <button class="category-nav category-next" onclick="nextImage()">&#10095;</button>
        </div>


        <!-- Product Listing Sections (e.g., HP, ASUS, Lenovo) -->
        <div class="listby">
            <h2 class="items-title">HP</h2>
        </div>

        <div class="items-container">
            <div class="main-content" id="HP-container">
                <!-- Laptops will be inserted here dynamically -->
            </div>
        </div>

        <div class="listby">
            <h2 class="items-title">DELL</h2>
        </div>

        <div class="items-container">
            <div class="main-content" id="DELL-container">
                <!-- Laptops will be inserted here dynamically -->
            </div>
        </div>

        <!-- More sections for ASUS and Lenovo... -->

        <!-- Footer Section with Contact Info -->
        <div class="">
            <p>Whatsapp Us</p>
            <p>Talk To Us</p>
            <p>@einsta</p>
            <p>@fb</p>
            <p>@tweeter</p>
        </div>

        <div>
            <h3>About Us</h3>
            <p>Ecart is a trusted online store specializing in computers and accessories...</p>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch('swipe_image/retriveimg.php') // Fetch images from the PHP file
                .then(response => response.text()) // Get raw response text first
                .then(text => {
                    console.log('Raw response:', text); // Log the raw response to debug
                    try {
                        const images = JSON.parse(text); // Try to parse the JSON
                        loadCarousel(images);
                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                    }
                })
                .catch(error => console.error('Error loading images:', error));

            function loadCarousel(images) {
                const carousel = document.getElementById('carousel');
                if (!carousel) {
                    console.error("Carousel container not found.");
                    return; // Exit if the carousel element is not found
                }

                carousel.innerHTML = ""; // Clear previous images

                const visibleImagesCount = 1; // Show 1 images at a time
                let currentIndex = 0;

                // Add images to the carousel container
                images.forEach((src, index) => {
                    const img = document.createElement('img');
                    img.src = encodeURI("ecart/" + src); // Prepend the 'ecart/' folder to the path
                    img.classList.add('carousel-img');
                    img.style.display = 'none'; // Initially hide all images
                    carousel.appendChild(img);
                });

                // Function to show the images
                function showImages() {
                    const imgs = document.querySelectorAll('.carousel-img');
                    const totalImages = imgs.length;

                    // Hide all images first
                    imgs.forEach(img => img.style.display = 'none');

                    // Show the next set of images (2 images)
                    for (let i = currentIndex; i < currentIndex + visibleImagesCount && i < totalImages; i++) {
                        imgs[i].style.display = 'inline-block'; // Display images in a row
                    }

                    // Update the currentIndex to show the next set of images
                    currentIndex = (currentIndex + visibleImagesCount) % totalImages;
                }

                // Function to go to the next image set
                function nextImage() {
                    showImages();
                }

                // Function to go to the previous image set
                function prevImage() {
                    const imgs = document.querySelectorAll('.carousel-img');
                    const totalImages = imgs.length;

                    // If we're at the first set, show the last set of images
                    currentIndex = (currentIndex - visibleImagesCount + totalImages) % totalImages;
                    showImages();
                }

                // Ensure the navigation buttons are available
                const nextBtn = document.querySelector('.carousel-nav.next');
                const prevBtn = document.querySelector('.carousel-nav.prev');

                if (nextBtn && prevBtn) {
                    nextBtn.addEventListener('click', nextImage);
                    prevBtn.addEventListener('click', prevImage);
                } else {
                    console.error("Carousel navigation buttons not found.");
                }

                // Auto slide every 1 second
                setInterval(nextImage, 1000);

                // Initially show images
                showImages();
            }
        });
    </script>

    <script>
        // Load the top bar dynamically
        fetch('topbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('topbar').innerHTML = data;
            });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch('logo/show_logo.php') // Fetch logos from the PHP file (your show_logo.php)
                .then(response => response.text())
                .then(text => {
                    // Log the response for debugging
                    console.log('Logos Response:', text);

                    // Dynamically load the logos into the container
                    const logos = JSON.parse(text); // Assuming the response is JSON
                    loadLogos(logos);
                })
                .catch(error => console.error('Error loading logos:', error));

            function loadLogos(logos) {
                const logoContainer = document.getElementById('logo-carousel');
                logoContainer.innerHTML = ""; // Clear any existing logos

                const visibleLogosCount = 5; // Show 5 logos at a time
                let currentIndex = 0;

                // Add logos to the container
                logos.forEach((logo, index) => {
                    const fixedPath = logo.replace(/\\+/g, '/');  // Replace backslashes with forward slashes
                    const cleanedPath = fixedPath.replace(/^..\/logo\//, "logo/"); // Correct the path prefix

                    const imgElement = document.createElement('img');
                    imgElement.src = encodeURI(cleanedPath.trim()); // Ensure the path is encoded and cleaned
                    imgElement.classList.add('category-img');
                    imgElement.style.display = 'none'; // Initially hide all images
                    logoContainer.appendChild(imgElement);
                });

                // Function to show the logos
                function showImages() {
                    const imgs = document.querySelectorAll('.category-img');
                    const totalImages = imgs.length;

                    // Hide all images first
                    imgs.forEach(img => img.style.display = 'none');

                    // Show 5 images at a time
                    for (let i = currentIndex; i < currentIndex + visibleLogosCount && i < totalImages; i++) {
                        imgs[i].style.display = 'inline-block'; // Display images
                    }
                }

                // Function to go to the next set of logos
                function nextImage() {
                    currentIndex = (currentIndex + 1) % (logos.length - visibleLogosCount + 1);
                    showImages();
                }

                // Function to go to the previous set of logos
                function prevImage() {
                    currentIndex = (currentIndex - 1 + logos.length) % (logos.length - visibleLogosCount + 1);
                    showImages();
                }

                // Attach event listeners to the navigation buttons
                document.querySelector('.category-nav.category-next').addEventListener('click', nextImage);
                document.querySelector('.category-nav.category-prev').addEventListener('click', prevImage);

                // Initially show images
                showImages();
            }
        });

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Fetch HP products
            fetch('brand/hp.php') // Your PHP file that fetches HP products
                .then(response => {
                    return response.text(); // Get the raw response as text first for debugging
                })
                .then(text => {
                    console.log('Raw response:', text); // Log the raw response for debugging

                    try {
                        const products = JSON.parse(text); // Parse the JSON response
                        const container = document.getElementById('HP-container');
                        container.innerHTML = ""; // Clear any existing content

                        // Check if products were found
                        if (products.length > 0) {
                            products.forEach(product => {
                                // Create a new div element for each product
                                const productDiv = document.createElement('div');
                                productDiv.classList.add('item'); // Add a class for styling

                                // Create the HTML content for the product
                                productDiv.innerHTML = `
                            <img src="${product.image_url}" alt="${product.name}">
                            <h3>${product.name}</h3>
                            <p>${product.description}</p>
                            <p>Price: $${product.price}</p>
                            <p>Stock: ${product.stock}</p>
                        `;

                                // Append the product to the container
                                container.appendChild(productDiv);
                            });
                        } else {
                            // If no products were found, show a message
                            container.innerHTML = "<p>No products found for HP.</p>";
                        }
                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                    }
                })
                .catch(error => console.error('Error fetching products:', error));
        });

    </script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Fetch HP products
            fetch('brand/DELL.php') // Your PHP file that fetches HP products
                .then(response => {
                    return response.text(); // Get the raw response as text first for debugging
                })
                .then(text => {
                    console.log('Raw response:', text); // Log the raw response for debugging

                    try {
                        const products = JSON.parse(text); // Parse the JSON response
                        const container = document.getElementById('DELL-container');
                        container.innerHTML = ""; // Clear any existing content

                        // Check if products were found
                        if (products.length > 0) {
                            products.forEach(product => {
                                // Create a new div element for each product
                                const productDiv = document.createElement('div');
                                productDiv.classList.add('item'); // Add a class for styling

                                // Create the HTML content for the product
                                productDiv.innerHTML = `
                            <img src="${product.image_url}" alt="${product.name}">
                            <h3>${product.name}</h3>
                            <p>${product.description}</p>
                            <p>Price: $${product.price}</p>
                            <p>Stock: ${product.stock}</p>
                        `;

                                // Append the product to the container
                                container.appendChild(productDiv);
                            });
                        } else {
                            // If no products were found, show a message
                            container.innerHTML = "<p>No products found for HP.</p>";
                        }
                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                    }
                })
                .catch(error => console.error('Error fetching products:', error));
        });

    </script>




</body>

</html>