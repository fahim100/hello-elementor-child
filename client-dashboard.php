<?php
function client_dashboard_shortcode(){
    ob_start(); ?>
        
        <?php

        $user_id = get_current_user_id();
        $order_id = get_field('order_id', 'user_'.$user_id);
        $business_name = get_field('business_name', 'user_'.$user_id);
        $service_ordered = get_field('service_ordered', 'user_'.$user_id);
        $current_status = get_field('current_status', 'user_'.$user_id);

        $current_user = wp_get_current_user();
        $user_registered = $current_user->user_registered;
        $user_registered = date( 'j/n/Y', strtotime($user_registered) );

        ?>

        <section class="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-heading">
                            <h4>My Order( Order #<?php echo $order_id; ?> )</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order-table">
                            <div class="order-table-heading">
                                <div class="order-history">
                                    <i class="ri-shopping-cart-2-line"></i>
                                    <p>My Order History</p>
                                </div>
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">Business Name</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Service Ordered</th>
                                    <th scope="col">Current Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $business_name; ?></th>
                                        <td><?php echo $order_id; ?></td>
                                        <td><?php echo $user_registered; ?></td>
                                        <td><?php echo $service_ordered; ?></td>
                                        <td><?php echo $current_status; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php return ob_get_clean();
}