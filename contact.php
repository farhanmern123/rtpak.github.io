<?php

include('header.php');
include('topHeader.php');

?>

<!-- Contact Page Content Starts here -->
<section class="contact">
    <div class="container">
        <div class="row">
            <!-- <h1>Contact Us</h1> -->
               <div class="col-lg-6">
                    <h3>Get Connect With Us On Social Media</h3>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                    <div class="contactDetails">
                        <h3>Contact Instant</h3>
                        <span><i class="fa-solid fa-location-dot"></i> Imam Saud Road, Alyarmouk Area Riyadh-13215</span> <br>
                        <span><i class="fa-solid fa-mobile"></i> +966-11-2770900, +966-11-2495417</span> <br>
                        <span><i class="fa-solid fa-phone-volume"></i></i> +966-11-2495956</span> <br>
                        <span><i class="fa-solid fa-envelope"></i> info@rt.com.sa</span> <br>
                        <span><i class="fa-solid fa-globe"></i> www.rt.com.sa</span> <br>    
                    </div>
                </div>

                <div class="col-lg-6">
                <h2 class="h4 mb-4">Write to us:</h2>
                <p>We'll write rarely, but with only the best content.</p>
                <form action="" method="post" id="messageForm">
                    <input type="text" name="" id="" placeholder="Enter Your Name" class="form-control">
                    <input type="text" name="" id="" placeholder="Enter Your Email" class="form-control">
                    <input type="text" name="" id="" placeholder="Enter Subject" class="form-control">
                    <textarea name="" id="" cols="30" rows="5" placeholder="Enter Your Message Here..." class="form-control"></textarea>
                    <input type="submit" value="Send Message" class="btn btn-primary">
                </form>
            </div>

         
        </div>

        <div class="row map">
            <h2>Find Us On</h2>
        <iframe src="https://www.google.com/maps/d/embed?mid=1zo4DmumS7-WP3X85qMvWieJVrqrykVPD&ehbc=2E312F" width="100%" height="480"></iframe>
        </div>
    </div>
</section>
<!-- Contact Page Content Ends here -->


<?php

include('footer.php');

?>