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
                <div class="carousel" id="carousel"></div>

                <!-- Carousel Navigation Buttons -->
                <button class="carousel-nav prev" onclick="prevImage()">&#10094;</button>
                <button class="carousel-nav next" onclick="nextImage()">&#10095;</button>
            </div>
        </div>

        <!-- Gap Between Sections -->
        <div class="gap"></div>

        <!-- Category Section -->
        <div class="category-section-container">
            <h2 class="category-title">SHOP BY BRAND</h2> <!-- Moved outside .categories -->
            <button class="category-nav category-prev">&#10094;</button>

            <div class="categories-wrapper">
                <div class="categories">
                    <a href="category/jacket.php">
                        <img src="Logo/hp.png" alt="Category 1" class="category-img">
                    </a>
                    <a href="category/shoes.php">
                        <img src="Logo/asus.png" alt="Category 2" class="category-img">
                    </a>
                    <a href="category/sunglasses.php">
                        <img src="Logo/lenevo.png" alt="Category 3" class="category-img">
                    </a>
                    <a href="category/sunglasses.php">
                        <img src="Logo/samsung.png" alt="Category 4" class="category-img">
                    </a>
                    <a href="category/sunglasses.php">
                        <img src="Logo/sony.png" alt="Category 5" class="category-img">
                    </a>
                    <a href="category/sunglasses.php">
                        <img src="Logo/acer.png" alt="Category 6" class="category-img">
                    </a>
                    <a href="category/sunglasses.php">
                        <img src="Logo/dell.png" alt="Category 7" class="category-img">
                    </a>
                </div>
            </div>

            <button class="category-nav category-next">&#10095;</button>
        </div>


        <!-- Gap Between Category and Items Section -->
        <div class="gap"></div>

        <div class="listby">
            <h2 class="items-title">
                HP
            </h2>
        </div>

        <!-- Item Section -->
        <div class="items-container">
            <div class="main-content" id="laptop-container">
                <!-- Laptops will be inserted here dynamically -->
            </div>
        </div>

        <!-- SHOP BY PROCESSOR Section -->
        <div class="processer">
            <h2 class="items-title">SHOP BY PROCESSOR</h2>
        </div>

        <div class="processor-container">
            <!-- Processor images will be inserted here dynamically -->
        </div>




        <!-- Add a section for ASUS and Lenovo laptops -->
        <div class="listby">
            <h2 class="items-title">
                ASUS
            </h2>
        </div>

        <div class="items-container">
            <div class="main-content" id="asus-container">
                <!-- ASUS laptops will be inserted here dynamically -->
            </div>
        </div>

        <div class="listby">
            <h2 class="items-title">
                LENOVO
            </h2>
        </div>

        <div class="items-container">
            <div class="main-content" id="lenovo-container">
                <!-- Lenovo laptops will be inserted here dynamically -->
            </div>
        </div>

        <!-- Gap Between Sections -->
        <div class="gap"></div>

        <div class="listby">
            <p>Whatsapp Us</p>
            <p>Talk To Us</p>
            <p>@einsta</p>
            <p>@fb</p>
            <p>@tweeter</p>
        </div>

        <div>
            <b>
                <h3>About Us</h3></br>
                Ecart is a trusted online store specializing in computers and accessories. With a mission to provide
                customers with high-quality products at competitive prices, Ecart has established itself as a go-to
                destination for tech enthusiasts, professionals, and casual users alike. Whether you're building a
                custom PC, upgrading your current setup, or simply looking for the latest computer gadgets, Ecart offers
                a comprehensive range of products designed to meet every need.</br>
                <h3>What We Offer</h3><br>

                Computers: Ecart offers a wide selection of desktops, laptops, and gaming computers from leading brands.
                Whether you're after a high-performance gaming machine, a sleek ultrabook for work, or a budget-friendly
                laptop, Ecart has something for everyone.

                Accessories: The store also carries a variety of computer accessories to complement your device. From
                ergonomic keyboards and high-precision mice to stylish laptop bags and docking stations, Ecart ensures
                that you have everything you need to enhance your computing experience.

                Networking Equipment: For those looking to set up reliable and fast networks, Ecart stocks routers,
                modems, network cables, and other essentials.

                PC Components: Ecart provides various PC components for those looking to build or upgrade their custom
                PCs. Whether it's a powerful graphics card, a speedy SSD, or a cooling solution, you'll find the perfect
                part for your build.

                Software & Peripherals: In addition to hardware, Ecart offers a range of software, including antivirus
                programs, operating systems, and productivity tools. It also carries peripherals like monitors,
                headsets, and printers to complete your setup.

                <br>
                <h3>>Why Choose Ecart?</h3>

                Variety: Ecart’s extensive catalog ensures that customers can find products from top tech brands in all
                categories, whether for personal, professional, or gaming use.

                Competitive Prices: With the best deals on computers and accessories, Ecart aims to provide high-quality
                products without breaking the bank.

                Reliable Service: Ecart prides itself on delivering excellent customer service. From helpful product
                descriptions and reviews to quick and secure shipping, the store ensures a smooth shopping experience.

                Tech Expertise: The Ecart team is passionate about technology and can assist customers with product
                recommendations, troubleshooting, and advice to ensure they choose the right products for their needs.

                Whether you're looking to buy your first computer, upgrade your current one, or accessorize your setup,
                Ecart is your trusted partner for all things tech. Visit the store today to explore the latest deals and
                find the perfect tech products for you!
                </p>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const hpContainer = document.getElementById("laptop-container");
                const asusContainer = document.getElementById("asus-container");
                const lenovoContainer = document.getElementById("lenovo-container");

                // Path to item_images folder
                const imageFolderPath = "item_images/";

                // Generate laptops for different brands dynamically
                let hpLaptops = [];
                let asusLaptops = [];
                let lenovoLaptops = [];

                for (let i = 1; i <= 9; i++) {
                    hpLaptops.push(`${imageFolderPath}HP%20(${i}).png`);
                    asusLaptops.push(`${imageFolderPath}ASUS%20(${i}).png`);
                    lenovoLaptops.push(`${imageFolderPath}LENEVO%20(${i}).png`);
                }

                // Function to load laptops dynamically into the container
                function loadLaptops(container, laptops) {
                    laptops.forEach((src, index) => {
                        const itemDiv = document.createElement("div");
                        itemDiv.classList.add("item");
                        itemDiv.innerHTML = `
                <img src="${src}" alt="Laptop ${index + 1}" onerror="this.onerror=null; this.src='item_images/default.png';">
                <h3>Laptop ${index + 1}</h3>
                <p>Price: $${(index + 1) * 100}</p>
                <div class="buttons">
                    <button class="button">Buy Now</button>
                    <button class="button">Add to Cart</button>
                </div>
            `;
                        container.appendChild(itemDiv);
                    });
                }

                // Scroll functionality for each category
                function setupScrollButtons(container, prevBtn, nextBtn) {
                    const itemsPerPage = 4; // Show only 4 items at a time
                    const totalItems = container.querySelectorAll(".item").length;
                    const itemWidth = container.querySelector(".item").offsetWidth + 20; // Item width + gap
                    let currentIndex = 0;

                    function updatePosition() {
                        const offset = -currentIndex * itemWidth;
                        container.style.transform = `translateX(${offset}px)`;
                    }

                    nextBtn.addEventListener("click", function () {
                        if (currentIndex + itemsPerPage < totalItems) {
                            currentIndex++;
                            updatePosition();
                        }
                    });

                    prevBtn.addEventListener("click", function () {
                        if (currentIndex > 0) {
                            currentIndex--;
                            updatePosition();
                        }
                    });
                }

                // Load all laptops
                loadLaptops(hpContainer, hpLaptops);
                loadLaptops(asusContainer, asusLaptops);
                loadLaptops(lenovoContainer, lenovoLaptops);

                // Setup scroll buttons for each brand
                setupScrollButtons(hpContainer, prevBtnHP, nextBtnHP);
                setupScrollButtons(asusContainer, prevBtnAsus, nextBtnAsus);
                setupScrollButtons(lenovoContainer, prevBtnLenovo, nextBtnLenovo);
            });

        </script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const processorContainer = document.querySelector(".processor-container");

                // Path to item_images folder
                const imageFolderPath = "item_images/";

                // Processor image sources (adjust the image paths as per your files)
                let processors = [];
                for (let i = 1; i <= 6; i++) {
                    processors.push(`${imageFolderPath}Processor(${i}).png`);
                }

                // Function to load processor images dynamically into the container
                function loadProcessors(container, processors) {
                    processors.forEach((src, index) => {
                        const itemDiv = document.createElement("div");
                        itemDiv.classList.add("processor-item");

                        // Create an anchor tag wrapping each image
                        const anchor = document.createElement("a");
                        anchor.href = `processor-page-${index + 1}.html`;  // Adjust the URL as needed
                        anchor.innerHTML = `
                <img src="${src}" alt="Processor ${index + 1}" onerror="this.onerror=null; this.src='item_images/default.png';">
            `;

                        // Append the anchor tag to the item container
                        itemDiv.appendChild(anchor);
                        container.appendChild(itemDiv);
                    });
                }

                // Load processors into the container
                loadProcessors(processorContainer, processors);
            });

        </script>
    </div>

    <script>
        // Load the top bar dynamically
        fetch('topbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('topbar').innerHTML = data;
            });

        let images = [];
        let currentIndex = 0;

        // Fetch images dynamically from the PHP script
        fetch('image.php')
            .then(response => response.json())
            .then(data => {
                images = data;
                loadCarousel();
            });

        function loadCarousel() {
            const carousel = document.getElementById('carousel');
            carousel.innerHTML = ""; // Clear previous images

            images.forEach((src, index) => {
                const img = document.createElement('img');
                img.src = src;
                img.classList.add('carousel-img');
                img.style.display = index === 0 ? 'block' : 'none'; // Show only the first image
                carousel.appendChild(img);
            });
        }

        function changeImage(next = true) {
            const imgs = document.querySelectorAll('.carousel-img');
            imgs[currentIndex].style.display = 'none'; // Hide current image
            currentIndex = next ? (currentIndex + 1) % images.length : (currentIndex - 1 + images.length) % images.length;
            imgs[currentIndex].style.display = 'block'; // Show next image
        }

        function prevImage() {
            changeImage(false);
        }

        function nextImage() {
            changeImage(true);
        }

        // Auto-change image every 3 seconds
        setInterval(nextImage, 3000);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const categories = document.querySelector(".categories");
            const prevButton = document.querySelector(".category-prev");
            const nextButton = document.querySelector(".category-next");

            let currentIndex = 0;
            const itemsPerPage = 4; // Show only 4 items at a time
            const totalItems = document.querySelectorAll(".categories a").length;
            const itemWidth = document.querySelector(".categories a").offsetWidth + 20; // Item width + gap

            function updateCategoryPosition() {
                const offset = -currentIndex * itemWidth;
                categories.style.transform = `translateX(${offset}px)`;
            }

            nextButton.addEventListener("click", function () {
                if (currentIndex + itemsPerPage < totalItems) {
                    currentIndex++;
                    updateCategoryPosition();
                }
            });

            prevButton.addEventListener("click", function () {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCategoryPosition();
                }
            });
        });

    </script>
</body>

</html>
