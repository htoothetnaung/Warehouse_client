<?php
use App\Models\Product;
$categories = Product::select('category')->distinct()->get();
$products = Product::all();
?>


<x-dashboard>
    <div class="w-full lg:ps-64">
        <div class="p-6 space-y-6">
            <div class="bg-white">
                <header class="relative bg-white dark:bg-neutral-800 border-b border-gray-200 dark:border-neutral-700">
                    <nav aria-label="Top" class="mx-auto max-w-7xl px-8">
                        <div class="flex items-center">
                            <div class="hidden lg:block lg:self-stretch w-full">
                                <nav class="flex items-center w-full">
                                    <!-- Category Buttons Container -->
                                    <div class="flex gap-x-2 flex-grow">
                                        <!-- View All Products Button -->
                                        <button
                                            class="category-btn -mb-px py-3 px-4 inline-flex items-center gap-2 bg-white text-sm font-medium text-blue-600 border border-b-transparent rounded-t-lg focus:outline-none dark:bg-neutral-800 dark:border-neutral-700 dark:border-b-gray-800"
                                            data-category="all">
                                            View All
                                        </button>

                                        <!-- Dynamic Category Buttons -->
                                        <?php foreach ($categories as $category): ?>
                                        <button
                                            class="category-btn -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-gray-500 border rounded-t-lg hover:text-gray-700 focus:outline-none focus:text-blue-700 dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                                            data-category="<?= htmlspecialchars($category->category) ?>">
                                                <?= htmlspecialchars($category->category) ?>
                                        </button>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Add to Cart Button (Aligned to the Right) -->
                                    <div class="ml-auto">
                                        <button type="button" class="m-1 ms-0 relative inline-flex justify-center items-center size-[46px] text-sm font-semibold rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m5 11 4-7"></path>
                                                <path d="m19 11-4-7"></path>
                                                <path d="M2 11h20"></path>
                                                <path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8c.9 0 1.8-.7 2-1.6l1.7-7.4"></path>
                                                <path d="m9 11 1 9"></path>
                                                <path d="M4.5 15.5h15"></path>
                                                <path d="m15 11-1 9"></path>
                                            </svg>
                                            <span class="flex absolute top-0 end-0 size-3 -mt-1.5 -me-1.5">
                            <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 opacity-75 dark:bg-red-600"></span>
                            <span class="relative inline-flex rounded-full size-3 bg-red-500"></span>
                        </span>
                                        </button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </nav>

                </header>

                <div class="bg-white">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Products</h2>

                        <div id="product-grid" class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            <?php foreach ($products as $product): ?>
                            <div class="group block transform transition duration-300 hover:scale-105">
                                <img src="<?= htmlspecialchars($product->getImageUrlAttribute()) ?>" alt="<?= htmlspecialchars($product->item_name) ?>" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                                <h3 class="mt-4 text-sm text-gray-700"><?= htmlspecialchars($product->item_name) ?></h3>
                                <p class="text-sm text-gray-500"><?= htmlspecialchars($product->brand) ?></p>
                                <p class="mt-1 text-lg font-medium text-gray-900"><?= number_format($product->unit_price_mmk) ?> MMK</p>
                                <!-- View Details Button -->
                                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm view-details-btn"
                                        data-id="<?= $product->id ?>">
                                    View Details
                                </button>
                            </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Modal -->
    <div id="product-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50 transition-opacity">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-3xl relative transform transition-all">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <span class="sr-only">Close</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Product Image -->
                <div>
                    <img id="modal-product-image" class="w-full rounded-lg object-cover shadow-md">
                </div>

                <!-- Product Details -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h3 id="modal-product-name" class="text-2xl font-bold text-gray-900"></h3>
                        <p id="modal-product-description" class="mt-2 text-sm text-gray-600"></p>

                        <div class="mt-3 space-y-2 text-gray-700 text-sm">
                            <p><strong>Brand:</strong> <span id="modal-product-brand"></span></p>
                            <p><strong>Category:</strong> <span id="modal-product-category"></span></p>
                            <p><strong>Serial Number:</strong> <span id="modal-product-serial"></span></p>
                            <p><strong>Stock:</strong> <span id="modal-product-stock"></span></p>
                        </div>
                    </div>

                    <!-- Quantity Selector -->
                    <div class="mt-5 flex items-center space-x-3">
                        <span class="text-sm font-medium text-gray-700">Quantity:</span>
                        <button id="decrease-qty" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg shadow">
                            −
                        </button>
                        <input type="number" id="product-qty" value="1" min="1" class="w-12 text-center border border-gray-300 rounded-lg shadow">
                        <button id="increase-qty" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg shadow">
                            +
                        </button>
                    </div>

                    <!-- Action Buttons -->
                    <button id="add-to-cart" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg text-sm shadow-lg transition">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const categoryButtons = document.querySelectorAll(".category-btn");
            const productGrid = document.querySelector("#product-grid");

            // Handle category filtering
            categoryButtons.forEach(button => {
                button.addEventListener("click", function () {
                    let selectedCategory = this.getAttribute("data-category");

                    fetch(`/products/filter?category=${encodeURIComponent(selectedCategory)}`)
                        .then(response => response.json())
                        .then(data => {
                            productGrid.innerHTML = "";
                            data.products.forEach(product => {
                                let productHTML = `
                                <div class="group block transform transition duration-300 hover:scale-105">
                                    <img src="${product.product_image_url}" alt="${product.item_name}" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                                    <h3 class="mt-4 text-sm text-gray-700">${product.item_name}</h3>
                                    <p class="text-sm text-gray-500">${product.brand}</p>
                                    <p class="mt-1 text-lg font-medium text-gray-900">${new Intl.NumberFormat().format(product.unit_price_mmk)} MMK</p>
                                    <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm view-details-btn" data-id="${product.id}">
                                        View Details
                                    </button>
                                </div>`;
                                productGrid.innerHTML += productHTML;
                            });

                            // Re-attach event listeners to the new "View Details" buttons
                            attachViewDetailsEventListeners();
                        });
                });
            });

            function attachViewDetailsEventListeners() {
                const modal = document.getElementById("product-modal");
                const closeModal = document.getElementById("close-modal");
                let addToCartBtn = document.getElementById("add-to-cart");
                let increaseQtyBtn = document.getElementById("increase-qty");
                let decreaseQtyBtn = document.getElementById("decrease-qty");
                let qtyInput = document.getElementById("product-qty");

                let currentProductId = null;
                let maxStock = 1;

                // Remove existing event listeners before adding new ones
                increaseQtyBtn.replaceWith(increaseQtyBtn.cloneNode(true));
                decreaseQtyBtn.replaceWith(decreaseQtyBtn.cloneNode(true));
                addToCartBtn.replaceWith(addToCartBtn.cloneNode(true));

                increaseQtyBtn = document.getElementById("increase-qty");
                decreaseQtyBtn = document.getElementById("decrease-qty");
                addToCartBtn = document.getElementById("add-to-cart");

                document.querySelectorAll(".view-details-btn").forEach(button => {
                    button.replaceWith(button.cloneNode(true));
                });

                document.querySelectorAll(".view-details-btn").forEach(button => {
                    button.addEventListener("click", function () {
                        let productId = this.getAttribute("data-id");

                        fetch(`/products/details/${productId}`)
                            .then(response => response.json())
                            .then(data => {
                                if (data.error) {
                                    alert("Product not found!");
                                    return;
                                }

                                // Set modal content
                                document.getElementById("modal-product-image").src = data.product.product_image_url;
                                document.getElementById("modal-product-name").textContent = data.product.item_name;
                                document.getElementById("modal-product-description").textContent = data.product.product_segment;
                                document.getElementById("modal-product-brand").textContent = data.product.brand;
                                document.getElementById("modal-product-category").textContent = data.product.category;
                                document.getElementById("modal-product-serial").textContent = data.product.product_serial_number;

                                // Set max stock and reset quantity
                                maxStock = data.latest_closing_balance !== "N/A" ? parseInt(data.latest_closing_balance) : 1;
                                document.getElementById("modal-product-stock").textContent = maxStock;
                                qtyInput.value = 1;
                                qtyInput.setAttribute("max", maxStock);

                                // Store product ID
                                currentProductId = data.product.id;

                                // Show modal
                                modal.classList.remove("hidden");
                            })
                            .catch(error => console.error("Error fetching product details:", error));
                    });
                });

                // Close modal
                closeModal.addEventListener("click", function () {
                    modal.classList.add("hidden");
                });

                // Close modal when clicking outside of it
                modal.addEventListener("click", function (event) {
                    if (event.target === modal) {
                        modal.classList.add("hidden");
                    }
                });

                // Quantity increase
                increaseQtyBtn.addEventListener("click", function () {
                    let currentValue = parseInt(qtyInput.value);
                    if (currentValue < maxStock) {
                        qtyInput.value = currentValue + 1;
                    } else {
                        alert(`You cannot order more than ${maxStock} items.`);
                    }
                });

                // Quantity decrease
                decreaseQtyBtn.addEventListener("click", function () {
                    let currentValue = parseInt(qtyInput.value);
                    if (currentValue > 1) {
                        qtyInput.value = currentValue - 1;
                    }
                });

                // Prevent manual input beyond limits
                qtyInput.addEventListener("input", function () {
                    let value = parseInt(this.value);
                    if (isNaN(value) || value < 1) {
                        this.value = 1;
                    } else if (value > maxStock) {
                        this.value = maxStock;
                        alert(`You cannot order more than ${maxStock} items.`);
                    }
                });

                // Add to cart
                addToCartBtn.addEventListener("click", function () {
                    let quantity = parseInt(qtyInput.value);

                    if (!currentProductId) {
                        alert("No product selected!");
                        return;
                    }

                    if (quantity > maxStock) {
                        alert(`You cannot order more than ${maxStock} items.`);
                        return;
                    }

                    console.log("Adding to cart:", {
                        product_id: currentProductId,
                        quantity: quantity
                    });

                    alert("Product added to cart!");
                    modal.classList.add("hidden");
                });
            }

            // Initial attachment of event listeners
            attachViewDetailsEventListeners();

            // Handle category button active state
            categoryButtons.forEach(button => {
                button.addEventListener("click", function () {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => {
                        btn.classList.remove("bg-white", "text-blue-600", "border-b-transparent");
                        btn.classList.add("bg-gray-50", "text-gray-500", "hover:text-gray-700");
                    });

                    // Add active class to the clicked button
                    this.classList.add("bg-white", "text-blue-600", "border-b-transparent");
                    this.classList.remove("bg-gray-50", "text-gray-500", "hover:text-gray-700");
                });
            });
        });
    </script>
</x-dashboard>
