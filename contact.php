<?php $pageName = "Contact"; ?>

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
    <div class="product-card-container bg-light p-4">

        <div class="contact-inner-card">
            <!-- contact content here -->
            <!-- <h3>Contact Form</h3> -->
            <div class="contact-box">
                <div class="contact-image-box">
                    <img src="assets/images/whatsapp.png" class="contact-image" alt="">

                </div>

                <div class="contact-form">
                    <form action="" class="contact-form p-4" method="post">
                        <h3 class="product-card-title"><?=$pageName?> Us</h3>
                        <div class="form-group">
                            <label for="conta-name">
                                Name <br>
                                <input type="text" class="conta-name form-control-lg input-elem" name="conta-name"
                                    placeholder="Enter Name">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="conta-name">
                                Email-ID <br>
                                <input type="text" class="conta-email form-control-lg input-elem" name="conta-email"
                                    placeholder="Enter Email-ID">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="conta-msg">
                                Message <br>
                                <textarea class="conta-msg form-control-lg" name="conta-msg"
                                    placeholder="Enter Message"></textarea>
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-lg btn-dark my-3 contact-button button-elem w-25">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="service-card-container js-service-card bg-warning p-4">
        <h3 class="service-card-title">Contact Offices</h3>
        <div class="contact-inner-card js-contact-b">
            <!-- contact content here -->

        </div>
    </div>

    <!-- Include footer correctly inside wrapper -->
    <?php include_once('incs/footer.php'); ?>
</div>