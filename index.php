<?php $pageName = "Home"; ?>

<div class="wrapper">
    <div class="hero-box">
        <?php include_once('incs/header.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-12 col-sm-6">
                    <!-- Main content starts here -->
                    <div class="slider-box">
                        <!-- <h3 class="slider-title d-sm-block"></h3> -->
                        <button class="slider-button d-sm-block col-sm-3">Getting Started</button>
                        <p class="para-text d-sm-block col-sm-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quaerat quia et totam
                            doloribus atque! Esse eligendi eos iure ipsum pariatur neque, laudantium placeat laboriosam
                            totam voluptatibus sint, quaerat ab?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Slider -->
    <div class="product-card-container js-product-card bg-light p-4 m-4">
        <h3 class="product-card-title">Our Products</h3>
        <div class="product-card">
            <!-- Product content here -->
        </div>
    </div>

    <div class="service-card-container js-service-card bg-warning p-4">
        <h3 class="service-card-title">Our Services</h3>
        <div class="service-card">
            <!-- Service content here -->
        </div>
    </div>

    <!-- Include footer correctly inside wrapper -->
    <?php include_once('incs/footer.php'); ?>
</div>