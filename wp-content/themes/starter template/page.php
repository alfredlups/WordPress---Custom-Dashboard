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
	
<?php 
    $query = new WP_Query( array(
        'post_type' => 'invoice',
        'fields' => 'ids',
        'post_status' => 'publish',
        'posts_per_page' => -1
    ));
    while ($query->have_posts()) : $query->the_post();
?>
	<div>
		<h1><?= the_title(); ?></h1>
	</div>
<?php endwhile; wp_reset_postdata(); ?>

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
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="ongoing-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Yummy Lake Pagoda</td>
                            <td><span class="verified-color">Verified</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Asian Dragon Harbin Hui</td>
                            <td><span class="verified-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="pending-color">Pending</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="verified-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="verified-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="verified-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="ongoing-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="verified-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="pending-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td>#23122</td>
                            <td><span><img src="<?php echo get_template_directory_uri(); ?>/images/img-invoices-images.jpg"></span> Jade Phoenix Buffet</td>
                            <td><span class="verified-color">Ongoing</span></td>
                            <td>16/08/2018</td>
                            <td>16/08/2018</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>HK$2.99</td>
                            <td>20 <a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/images/img-download.png" alt="download"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- data tables ended !-->
        </div>
    </div>

<?php
get_footer();
