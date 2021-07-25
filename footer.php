
        <footer class="footer mt-auto p-5 w-100">
            <div class="row">
                <div class="d-lg-flex col-sm-12 ">
                    <div class="footer-navbar">
                        <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'secondary',
                    'container'         => 'false',
                    'menu_class'        => 'navbar-nav flex-sm-column flex-md-row'
                    ) );
                ?>
                    </div>
                    <div class="ml-lg-auto mt-4 mt-lg-0 pl-lg-3 text-lg-right">
                        <span class="mr-3"><a href=""><i class="fa fa-google"></i></a></span>
                        <span class="mx-3"><a href=""><i class="fa fa-instagram"></i></a></span>
                        <span class="ml-3"><a href=""><i class="fa fa-twitter"></i></a></span>
                    </div>
                </div>
            </div>

            <div class="py-4 mb-md-5 mt-lg-4 pt-md-5 border-footer">
                <div class="row footer-links">
                    <div class="col-12 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted orange" href="#">Random feature</a></li>
                            <li><a class="text-muted orange" href="#">Team feature</a></li>
                            <li><a class="text-muted orange" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted orange" href="#">Another one</a></li>
                            <li><a class="text-muted orange" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Additional Links</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Categories</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                            <li><a class="text-muted" href="#">Resource name</a></li>
                            <li><a class="text-muted" href="#">Another resource</a></li>
                            <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Ekko</h5>
                        <p class="text-small">
                            Making a positive first impression is essential to developing a strong customer relationship. 
                            Ekko is powerful enough to assist any small businesses or corporate companies in quickly build 
                            an effective online presence.
                        </p>
                    </div>
                </div>
            </div>

            <p class="text-center text-muted">@ Ekko Charity</p>

        </footer>

        <a href="#top" class="back-to-top active" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        <?php wp_footer() ?>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script> -->
        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script> -->
    </body>
</html>