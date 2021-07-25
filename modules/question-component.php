<?php

// Case: Questions
if( get_row_layout() == 'questions' ):
?>

<div class="questionSect">
    <div id="rreshtiques" class="row">
        <div class="questionFoto col-lg-6"></div>
        <div class="queskolright col-lg-6 d-flex justify-content-center align-items-center ">
            <div class=" quesrightcont d-flex flex-column ">
                <div class="questiontitulli hideMe">
                    <h1>Got any questions?</br> See more below</h1>
                </div>
                <div class="questionsbut">
                    <?php
                            if( have_rows('quescomp_parts') ):
                                while ( have_rows('quescomp_parts') ) : the_row(); ?>

                    <div class="quesAll hideMe">
                        <div class="menu">
                            <div class="menu-item quesdiff toggler"><?php the_sub_field('quescomp_button');?></div>
                            <div class="collapsible-wrapper collapsed">
                                <div class="collapsible">
                                    <div class="menu-item"><?php the_sub_field('quescomp_content');?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;

                        else :

                            echo("No Rows Found");

                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endif; ?>