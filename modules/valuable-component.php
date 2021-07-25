<?php

// Case: valuable
if( get_row_layout() == 'valuable' ):

?>

<div class="valuablesection">
    <div class="row ">
        <div class="valuablephoto col-md-6"> </div>
        <div class="valuablecontent col-md-6"> 
            <div class=" valuablecontent ">
                <div class="valuabletitle d-flex justify-content-center align-items-center">
                    <h1 class="mt-lg-5 pt-lg-5 font-weight-bold">We help to raise valuable donations for thousands of charities and causes.</h1>
                </div>
<?php 
global $wpdb;
$causes = $wpdb->get_results("SELECT * FROM wp_postmeta where meta_key like '%_flexible_1_carousel%' and meta_key like '%card_title%' and post_id = 19;");
$causes_count = $wpdb->num_rows;
$volunteers = $wpdb->get_results("SELECT * FROM wp_postmeta where meta_key like 'flexible_6_volunteer_settings%' and meta_key like '%volunteer_name' and post_id = 19");
$volunteers_count = $wpdb->num_rows;
?>
                <div class="valuablecount row">
                <div class="tallDiv"></div>
                    <div class="valuablecauses counter-section col-6">
                        <h1><span class="spanblue c-section4"><?php echo $causes_count; ?></span><span>+</span></h1>
                        <h3>Charity Causes</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>

                    <div class="valuableactive counter-section col-6">
                    <h1><span class="spanblue c-section3"><?php echo $volunteers_count; ?></span><span>+</span></h1>
                        <h3>Active Volunteers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="tallDiv"></div>

            </div>  
        </div>

    </div>
</div>

<?php endif; ?>