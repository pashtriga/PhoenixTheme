<?php

// Case: Difference we support
if( get_row_layout() == 'difference' ):

?>

<div class="diffbackground d-flex justify-content-center align-items-center  ">
    <div class="container">
        <div class="row lartdiff "  >           
            <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center ">
                <div class="row makeadifference my-5">
                    <div id="word" >Donate to make a difference</div>
                </div>
                <div class="w3-animate-zoom row makeadifference2">
                <button  type="button" class=" butonidiff align-self-start btn btn-lg btn-block btn-primary" onclick="window.location.href='/blog'">READ MORE</button>
                </div>
            </div>  



            <div class="w3-animate-zoom coldiff2 col-md-6 d-flex justify-content-center align-items-center ">
                <div class="asistance">
                    <h2 class="mb-4 px-5">Child assistance charity</h2>
                    <div class="row text-center">
                    <div class="timeri col-3 d-flex flex-column justify-content-center align-content-center" >
                        <h1 id="demo1"><i class="fa fa-spinner fa-spin"></i></h1>
                        <h5> Days</h5>
                    </div>
                    <div class="timeri col-3 d-flex flex-column justify-content-center align-content-center" >
                        <h1 id="demo2"><i class="fa fa-spinner fa-spin"></i></h1>
                        <h5> Hours</h5>
                    </div>
                    <div class="timeri col-3 d-flex flex-column justify-content-center align-content-center" >
                        <h1 id="demo3"><i class="fa fa-spinner fa-spin"></i></h1>
                        <h5> Minutes</h5>
                    </div>
                    <div class="timeri col-3 d-flex flex-column justify-content-center align-content-center" >
                        <h1 id="demo4"><i class="fa fa-spinner fa-spin"></i></h1>
                        <h5> Seconds</h5>
                    </div>
                        

                    </div>
                    
                    <p id="demo1"></p>

                    <p id="progdiff">Raised: $75.000</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                    </div>
                    <button type="button" class="butonidiff2 btn align-self-end btn btn-lg btn-block mt-4" onclick="window.location.href='/contact'">CONTRIBUTE NOW</button>
                </div>
            </div>

        </div>
    </div>
</div>

<?php endif; ?>