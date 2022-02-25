<?php
function order_details_shortcode(){ 
    ob_start();

    $user_id = get_current_user_id();
    $order_id = get_field('order_id', 'user_'.$user_id);
    $date_of_formation = get_field('date_of_formation', 'user_'.$user_id);
    $ein_no = get_field('ein_no', 'user_'.$user_id);

    ?>
    <section class="order-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="order-info">
                        <div class="order-id items">
                            <div class="content">
                                <h5>Order ID</h5>
                                <span>#<?php echo $order_id; ?></span>
                            </div>
                            <div class="icon">
                                <i class="ri-information-fill"></i>
                            </div>
                        </div>
                        <div class="date-formation items">
                            <div class="content">
                                <h5>Date of Formation</h5>
                                <span><?php echo $date_of_formation; ?></span>
                            </div>
                            <div class="icon">
                            <i class="ri-calendar-check-line"></i>
                            </div>
                        </div>
                        <div class="ein-info items">
                            <div class="content">
                                <h5>EIN(Fedarel Tax ID)</h5>
                                <span><?php echo $ein_no; ?></span>
                            </div>
                            <div class="icon">
                            <i class="ri-shield-check-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php return ob_get_clean();
}