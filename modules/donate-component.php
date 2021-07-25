<?php

// Case: Donate
if( get_row_layout() == 'donate' ):

?>

<div class="p-5 donate-section text-center text-md-left">
    <div class="pg_row text-center hideMe">
        <h6>
            <span>Learn More</span> about Ekko's unique features.</h6>
        <h2>A better way to give</h2>
    </div>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="donateInfo ">
                <i class="fa fa-paypal" id="ikonat"></i>
                <h4>Easy and simple payments</h4>
                <p class="donateText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur</p>
            </div>

            <div class="donateInfo ">
                <i class="fa fa-gift" id="ikonat"></i>
                <h4>Effective giving options</h4>
                <p class="donateText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="donateInfo ">
                <i class="fa fa-globe" id="ikonat"></i>
                <h4>Donate worldwide</h4>
                <p class="donateText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur</p>
            </div>

            <div class="donateInfo ">
                <i class="fa fa-envelope" id="ikonat"></i>
                <h4>Charitable service</h4>
                <p class="donateText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="pricing-card">
                <h5 class="pricing-title  hideMe">Payroll giving</h5>
                <div class="pricing-body">

                    <div class="price-row border-bottom  hideMe">
                        <span>50&euro;</span>
                        <div>billed monthly</div>
                    </div>

                    <div class="card-row ">
                        <div class="row">                           
                            <div class="d-flex col-12  hideMe">
                                <span>Mattis Vulputate</span>
                                <div class="ml-auto text-right"><i class="fa fa-check"></i></div>                            
                            </div>
                        </div>
                    </div>

                    <div class="card-row">
                        <div class="row">                           
                            <div class="d-flex col-12  hideMe">
                                <span>Mattis Vulputate</span>
                                <div class="ml-auto text-right"><i class="fa fa-check"></i></div>                            
                            </div>
                        </div>
                    </div>

                    <div class="card-row mb-5">
                        <div class="row">                           
                            <div class="d-flex col-12  hideMe">
                                <span>Mattis Vulputate</span>
                                <div class="ml-auto text-right"><i class="fa fa-check"></i></div>                            
                            </div>
                        </div>
                    </div>

                    <button class="donate-button text-center hideMe" onclick="window.location.href='/contact'">
                        Donate now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>