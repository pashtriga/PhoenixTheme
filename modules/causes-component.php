<?php
// Case: Causes we support layout.
if( get_row_layout() == 'causes' ):
?>

<div class="causeAll">
    <div class="causeTop hideMe">
        <h1 id="causeTitull"> Causes We Support </h1>
        <p>We’re here for people like you who want to make a difference. Choose how and when
            you support the causes you care about here.</p>
    </div>


    <div class="bgcolor1 ">
        <div class="containercontent1">
            <div class="owl-caro owl-carousel owl-theme">
                <?php if( have_rows('carousel_card') ):
                        $count = 0;
                        while ( have_rows('carousel_card') ) : the_row(); ?>
                        <div class="item foto1">
                            <div class="card p-3 cardthyrje">
                                <img class="card-img-top fotoinside" src="<?php the_sub_field('card_image');?>" alt="test"
                                    alt="Card image cap">
                                <div class="cardcause card-body d-flex flex-column">
                                    <h4 class="card-title hideMe"><?php the_sub_field('card_title');?></h4>
                                    <small>
                                        <p class="hideMe"><?php the_sub_field('card_text'); ?></p>
                                    </small>
                                    <button type="button" id="butoniCard"
                                        class="mt-auto hideMe btn btn-md btn-primary" onclick="window.location.href='/blog'">
                                        <?php the_sub_field('card_button');?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php $count++; 
                         $_SESSION['causes_count'] = $count;
                        ?>
                <?php endwhile;

                    else :

                        echo("No Rows Found");

                    endif;

                ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
