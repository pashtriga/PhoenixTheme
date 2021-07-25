<?php

// Case: Donation Video
if( get_row_layout() == 'donation_video' ):

?>

<?php
$videoIndex = 1;
    if( have_rows('video_youtube1') ):
        while ( have_rows('video_youtube1') ) : the_row(); ?>
        <?php if (get_sub_field('position') == 'left_video') { ?>
            <div class="donationVideoFeature">
                <?php $image = get_sub_field('image_video');
                if( $image ) { ?>
                <div class="video-container d-flex justify-content-center align-items-center" style="background-image:url('<?= $image ?>')">
                <?php  } ?>
                    <div onclick="playDonationVideo(<?php echo $videoIndex; ?>)" class="playDiv hideMe">
                        <i class="fa fa-play"></i>
                        <div id="donation-video-<?php echo $videoIndex; ?>" style="display: none">
                            <?php the_sub_field('video');?>
                        </div>
                    </div>
                </div>
                <div class="donationVideoText d-flex flex-column justify-content-center align-items-center p-5 hideMe">
                    <div class="donationcontent px-5">
                        <h3 class="donation-title"><?php the_sub_field('titulli_video');?></h3>
                        <p class="donation-paragraph"><?php the_sub_field('paragrafi_video');?></p>
                        <button class="btn btn-lg donateBTN" onclick="window.location.href='/blog'"><?php the_sub_field('butoni_video');?></button>
                    </div>
                </div>
            </div>

        <?php } else { ?>

            <div class="donationVideoFeature"> 
                <div class="donationVideoText d-flex flex-column justify-content-center align-items-center p-5 hideMe order-last order-md-first">
                    <div class="donationcontent px-5">
                        <h3 class="donation-title"><?php the_sub_field('titulli_video');?></h3>
                        <p class="donation-paragraph"><?php the_sub_field('paragrafi_video');?></p>
                        <button class="btn btn-lg donateBTN"><?php the_sub_field('butoni_video');?></button>
                    </div>
                </div>

                <?php $image = get_sub_field('image_video');
                if( $image ) { ?>
                <div class="video-container d-flex justify-content-center align-items-center" style="background-image:url('<?= $image ?>')">
                <?php  } ?>
                    <div onclick="playDonationVideo(<?php echo $videoIndex; ?>)" class="playDiv hideMe">
                        <i class="fa fa-play"></i>
                        <div id="donation-video-<?php echo $videoIndex; ?>" style="display: none">
                            <?php the_sub_field('video');?>
                        </div>
                    </div>
                </div>
            </div>
    <?php 
        }
            $videoIndex++;
        endwhile;
                
        endif;
    ?>


    <div id="videoModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>    
            <div id="donationModalContent"></div>
        </div>
    </div>
    
<?php endif; ?>