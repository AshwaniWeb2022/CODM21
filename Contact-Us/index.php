<!-- header include  -->
<?php include "../app/header.php"; ?>
<!-- header include ENd -->
<!--============= body container =========== -->
<style>
    input:focus,
    textarea:focus,
    select:focus {
        box-shadow: none !important;
    }
</style>
<section style="background-image: url(../assect/upload/contact/con_background.jpg);" id="banner">
    <h3 class="line anim-typewriter text-uppercase text-white text-center">So now you’re here you know how to reach us. We’re happy to serve!!</h3>
</section>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-tittel-h1">Wait no further! Write to us and we will get back to you shortly.</div>
            </div>
            <div class="col-lg-7">
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post" autocomplete="off" >
                    <input type=hidden name="oid" value="00D5i000008yVNX">
                            <input type=hidden name="retURL" value="https://codmsoftware.com/salesforce_consulting_partner/ThankYou_For_Query">
                            <input type="hidden" name="lead_source" value="Web">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control border-0 border-bottom" placeholder="Your Full Name" name="last_name" require>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control border-0 border-bottom" placeholder="Company (Optional)" name="company">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="tel" class="form-control border-0 border-bottom" placeholder="Phone Number" name="phone" require>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="mail" class="form-control border-0 border-bottom" placeholder="Email Address" name="email" require>
                        </div>
                        <div class="col-lg-6 mb-3">
                             <select id="country-select" class="form-select border-0 border-bottom" aria-label="Country"  name="country" require>
                                <option hidden selected disabled>Your Country</option>
                        </select>
                        </div>
                        <style>
                            .form-select {
                                color: #737373 !important;
                            }
                        </style>
                        <div class="col-lg-6 mb-3">
                            <select class="form-select border-0 border-bottom" aria-label="Purpose" name="00N5i00000JOFU6" require>
                                <option hidden selected disabled>Purpose</option>
                                <option value="Development">Development</option>
                                <option value="Support">Support</option>
                                <option value="Discussion">Discussion</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea class="w-100 form-control border-0 border-bottom" placeholder="About Your Project" name="description" require></textarea>
                        </div>
                        <div class="col-lg-5">
                            <button class="btn btn-primary w-100" role="button" name="submit">Send Message <i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 addressMap" style="background-image:url(../assect/upload/contact/worldMap.jpg);">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-3 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2 padding_footer_map-left"> <b>India</b></div>
                <div class="footerAddress mb-2">
                    <img src="../assect/upload/contact/flag-India.webp" alt="india Flag">
                    <div class="text-dark">CodM Software Pvt. Ltd. <br> 2nd Floor, IHDP Business Park, Plot No. 7, Sector 127, Noida, UP 201303, India</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+91 9871717425" class="text-dark">+91 9871717425</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:hr@Codmsoftware.com" class="text-dark">info@codmsoftware.com</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2 padding_footer_map-left"><b> India </b></div>
                <div class="footerAddress mb-2">
                    <img src="../assect/upload/contact/flag-India.webp" alt="india Flag">
                    <div class="text-dark">CodM Software Pvt. Ltd.<br> Business Pluss, EF3 Mall, Sector 20A, Faridabad, Haryana 121001, India</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+91 9871717425" class="text-dark">+91 9871717425</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:hr@Codmsoftware.com" class="text-dark">info@codmsoftware.com</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2 padding_footer_map-left"><b>UK</b></div>
                <div class="footerAddress mb-2">
                    <img src="../assect/upload/contact/flag-uk.webp" alt="uk Flag">
                    <div class="text-dark">Tech14 Networks Ltd. <br> Regus Edmund House 12-22, Newhall Street, Birmingham B3 3AS, UK</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+44 7436934216" class="text-dark">+44 7436934216</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:info@tech14networks.com" class="text-dark">info@tech14networks.com</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 mb-2">
                <div class="footerAddressHeading pb-2 padding_footer_map-left"><b> USA</b></div>
                <div class="footerAddress mb-2">
                    <img src="../assect/upload/contact/usa_flag.png" alt="usa Flag">
                    <div class="text-dark">Talent4World LLC <br> 4501 Nightland <br> Dr  Plano, <br> TX 75024 - USA</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+44 7436934216" class="text-dark">+1(972)-945-5043</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:info@tech14networks.com" class="text-dark">info@talent4world.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkZda2DK9IvFu2smN1Z99vtt9j0_Tw2ZE&callback=initMap" async defer></script>

<div id="map"></div>

<style>
    #map {
  width: 100%;
  height: 400px;
}
</style>

<script>
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 2, 
    center: { lat: 0, lng: 0 }, 
  });

  const countryCoordinates = [
    { lat: 51.5074, lng: -0.1278 }, // London, UK
    { lat: 48.8566, lng: 2.3522 }, // Paris, France
    { lat: 40.7128, lng: -74.0060 }, // New York, USA
   
  ];

  // Loop through the array and add markers for each country
  for (const coordinates of countryCoordinates) {
    new google.maps.Marker({
      position: coordinates,
      map: map,
      title: "Country Name", // Replace with the country name
    });
  }
}
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    initMap();
  });
</script>


<?php include "../app/footer.php"; ?>
 