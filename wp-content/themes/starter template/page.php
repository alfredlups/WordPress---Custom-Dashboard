<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SplashomnimediaTheme
 */

get_header();
?>

	<div class="invoices-container">
        <div class="container">
            <!-- data tables started !-->
            <h1>Invoices</h1>
            <div class="wrap-tables">
                <div class="table-tophead">
                    <div class="tabbed-box">
                        <ul>
                            <li><a href="javascript:;" class="selected">All</a></li>
                            <li><a href="javascript:;">Ongoing</a></li>
                            <li><a href="javascript:;">Verified</a></li>
                            <li><a href="javascript:;">Pending</a></li>
                        </ul>
                    </div>

                   <div class="btn-paid">
                        <a href="javascript:;">Mark as Paid</a>
                    </div>
                </div>

                <table id="" class="display" style="width:100%">
                    <thead>
                        <tr>
                        	<th> 
                        		<div class="checkbox-all">
						        	<input type="checkbox"/>
						      	</div>
						  	</th>
                            <th>Id</th>
                            <th>Restaurant</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total</th>
                            <th>Fees</th>
                            <th>Transfer</th>
                            <th>Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = new WP_Query( array(
                                'post_type' => 'invoices',
                                'fields' => 'ids',
                                'post_status' => 'publish',
                                'posts_per_page' => -1
                            ));
                            while ($query->have_posts()) : $query->the_post(); 
                                $featured_post = get_field('inv_restaurant');
                                $restaurant_image = get_field('restaurant_image', $featured_post->ID)['url'];
                                $status = get_field('inv_status');
                                if( $status == 'On Going' ):
                                    $status_class = "ongoing-color";
                                elseif( $status == 'Verified' ):
                                    $status_class = "verified-color";
                                elseif( $status == 'Pending' ):
                                    $status_class = "pending-color";
                                else:
                                    $status_class = "paid-color";
                                endif;

                        ?>
                                <tr>
                                	<td></td>
                                    <td><?php the_ID(); ?></td>
                                    <td><span><img src="<?php echo $restaurant_image; ?>"></span> <?php echo $featured_post->post_title; ?></td>
                                    <td><span class="<?php echo $status_class; ?>"><?php echo $status; ?></span></td>
                                    <td><?php echo get_field('inv_start_date'); ?></td>
                                    <td><?php echo get_field('inv_end_date'); ?></td>
                                    <td><?= the_field('inv_total'); ?></td>
                                    <td><?= the_field('inv_fees'); ?></td>
                                    <td><?= the_field('inv_transfer'); ?></td>
                                    <td><?= the_field('inv_orders'); ?><a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                                </tr>
                            <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- data tables ended !-->
        </div>
    </div>

<?php
get_footer();
