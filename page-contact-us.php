<?php get_header();?>

<!--START OF CONTENT-->
<div id="contact-hero">
    <div class="container ">
        <div class="jumbotron">
            <h2>CONTACT US</h2>
            <h3>Feel free to drop a message</h3>
        </div>
    </div>
</div>
<!--END OF CONTENT-->

<div id="contact-container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="cont-info">Contact Info</h2>
                <!--START OF LEFT SECTION-->
                <div id="cont-left-section">
                    <div class="container">
                        <div class="row cont-post">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                <img class="cont-img" src="<?php bloginfo('template_directory');?>/img/location_icon.png" alt="">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
                                <p>A.C. Cortes Avenue, Mandaue</p>
                                <p>(next to RCBC Bank, across Kia Motors)</p>
                                <p>Cebu, Philippines, 6014</p>
                            </div>
                        </div>

                        <div class="row cont-post">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                <img class="cont-img" src="<?php bloginfo('template_directory');?>/img/web-address_loc.png" alt="">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9  col-lg-10">
                                <p>+6332 344.3119/ +6332 346.2429</p>
                            </div>
                        </div>

                        <div class="row cont-post">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                <img class="cont-img" src="<?php bloginfo('template_directory');?>/img/email_add.png" alt="">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
                                <p>info@athecorland.com</p>
                            </div>
                        </div>

                        <div class="row cont-post">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                <img class="cont-img" src="<?php bloginfo('template_directory');?>/img/web-address_loc.png" alt="">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
                                <p>https://www.athecorland.com</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!--END OF LEFT SECTION-->




            </div>

            <div class="col-md-6" id="contact-right-section">
                <h2>WE'D LOVE TO HEAR FROM YOU</h2>
                <form>
                    <input type="text" id="fname" name="firstname" placeholder="Name">
                    <input type="text" id="email" name="email" placeholder="Email address">
                    <input type="number" id="phone-number" name="phone" placeholder="Phone number">


                    <div id="subInterest">Subdivision of Interest:</div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label id="sc-check" class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input cont-checklist">
                                <span class="custom-control-indicator cont-checklist-indicator"></span>
                                <span class="custom-control-description">South Covina</span>
                            </label>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">88 Hillside</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">88 Summer Breeze</span>
                            </label>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">88 Brookside</span>
                            </label>
                        </div>
                    </div>

                    <div id="cont-inquiry">Tell us more about your inquiry</div>
                    <textarea class="form-control" placeholder="Write your message here..." rows="8" id="comment"></textarea>

                    <div id="cont-newsletter">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Subscribe to our Newsletter</span>
                        </label>
                    </div>

                    <div id="cont-submit" class="text-center">
                        <button type="button" class="btn btn-success">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="cont-google-map">
    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJu80spU2YqTMR1P2I98G6DyA&key=AIzaSyC95IgU_4733NiFiHNw9iujusf7sdXjR7E" allowfullscreen></iframe>
</div>


<?php get_footer(); ?>