<?php $pageName = "About"; ?>

<div class="wrapper">
    <div class="hero-box">
        <?php include_once('incs/header.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-12 col-sm-12">
                    <!-- Main content starts here -->
                    <div class="slider-box">
                        <!-- <h3 class="slider-title d-sm-block"></h3> -->
                        <button class="slider-button">Getting Started</button>
                        <p class="para-text d-xs-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quaerat quia et totam doloribus atque! Esse eligendi eos iure ipsum pariatur neque, laudantium placeat laboriosam totam voluptatibus sint, quaerat ab?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Slider -->
     <!-- Product Slider -->
     <div class="product-card-container bg-light p-4">
        <h3 class="product-card-title"><?=$pageName?> Us</h3> <hr>
        <div class="contact-inner-card js-contact-a">
            <!-- contact content here -->
             <!-- <div class="contact-content-l">
                <h3>Branch Offices</h3>
             </div>

             <div class="contact-content-r">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ex! Cupiditate reiciendis ipsum culpa itaque ratione. A veritatis id recusandae quasi, esse autem modi saepe necessitatibus tempora deserunt debitis praesentium.</p>
             </div> -->
        </div>
    </div>

    <div class="service-card-container js-service-card bg-warning p-4">
        <h3 class="service-card-title">Our Core-Value</h3>
        <div class="contact-inner-card js-contact-b">
            <!-- contact content here -->
            
        </div>
    </div>

    <!-- Include footer correctly inside wrapper -->
    <?php include_once('incs/footer.php'); ?>
</div>
