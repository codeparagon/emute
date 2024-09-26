<?php
include './header.php';
?>

<main class="main">
    <div class="d-flex" style="padding-top:1rem;">
        <div class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        <h1 style="flex:1;text-align:center;">Order</h1>
    </div>
    <div class="order-page">
        <!-- Order items list -->
        <div class="order-items">
            <div class="order-item">
                <div class="order-details">
                    <img src="https://via.placeholder.com/80" alt="Item Image" class="order-image">
                    <div class="order-description">
                        <p class="item-name">Icone for Mac Duggal</p>
                        <p class="item-description">Bubble Cocktail Minidress<br>Size: 2</p>
                    </div>
                </div>
                <div class="order-status">
                    <p class="price">$65.00</p>
                    <select class="status-select">
                        <option>IN TRANSIT</option>
                        <option>WAIT</option>
                    </select>
                </div>
            </div>

            <div class="order-item">
                <div class="order-details">
                    <img src="https://via.placeholder.com/80" alt="Item Image" class="order-image">
                    <div class="order-description">
                        <p class="item-name">Icone for Mac Duggal</p>
                        <p class="item-description">Bubble Cocktail Minidress<br>Size: 0</p>
                    </div>
                </div>
                <div class="order-status">
                    <p class="price">FREE</p>
                    <select class="status-select">
                        <option>WAIT</option>
                        <option>IN TRANSIT</option>
                    </select>
                </div>
            </div>

            <div class="order-item">
                <div class="order-details">
                    <img src="https://via.placeholder.com/80" alt="Item Image" class="order-image">
                    <div class="order-description">
                        <p class="item-name">Icone for Mac Duggal</p>
                        <p class="item-description">Bubble Cocktail Minidress<br>Size: 2</p>
                    </div>
                </div>
                <div class="order-status">
                    <p class="price">$65.00</p>
                    <select class="status-select">
                        <option>IN TRANSIT</option>
                        <option>WAIT</option>
                    </select>
                </div>
            </div>

            <div class="order-item">
                <div class="order-details">
                    <img src="https://via.placeholder.com/80" alt="Item Image" class="order-image">
                    <div class="order-description">
                        <p class="item-name">Icone for Mac Duggal</p>
                        <p class="item-description">Bubble Cocktail Minidress<br>Size: 0</p>
                    </div>
                </div>
                <div class="order-status">
                    <p class="price">FREE</p>
                    <select class="status-select">
                        <option>WAIT</option>
                        <option>IN TRANSIT</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


</main>

<?php
include './footer.php';
?>