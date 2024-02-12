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
            <script>
        function validateForm() {
            var lastName = document.forms["contactForm"]["last_name"].value;
            var phone = document.forms["contactForm"]["phone"].value;
            var email = document.forms["contactForm"]["email"].value;
            var country = document.forms["contactForm"]["country"].value;
            var purpose = document.forms["contactForm"]["00N5i00000JOFU6"].value;
            var description = document.forms["contactForm"]["description"].value;

            // Check if required fields are empty
            if (lastName == "" || phone == "" || email == "" || country == "" || purpose == "" || description == "") {
                alert("All fields are required");
                return false;
            }

            // Check if email is valid
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!email.match(emailPattern)) {
                alert("Invalid email address");
                return false;
            }


                 //check if phone number are 10 degite
                if(phone > 10 || phone < 10){
                    alert("Only 10 digit required"); 
                    return false;
                }
       

            return true;
        }
    </script>
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post" autocomplete="off" name="contactForm" onsubmit="return validateForm()" class="shadow">
                    <input type=hidden name="oid" value="00D5i000008yVNX">
                            <input type=hidden name="retURL" value="https://codmsoftware.com/ThankYou_For_Query.html">
                            <input type="hidden" name="lead_source" value="Web">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control border-0 border-bottom" placeholder="Your Full Name" name="last_name" >
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control border-0 border-bottom" placeholder="Company (Optional)" name="company">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="tel" class="form-control border-0 border-bottom" placeholder="Phone Number" name="phone" >
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="mail" class="form-control border-0 border-bottom" placeholder="Email Address" name="email" >
                        </div>
                        <div class="col-lg-6 mb-3">
                             <select id="country-select" class="form-select border-0 border-bottom" aria-label="Country"  name="country" >
                                <option hidden selected disabled>Your Country</option>
                        </select>
                        </div>
                        <style>
                            .form-select {
                                color: #737373 !important;
                            }
                        </style>
                        <div class="col-lg-6 mb-3">
                            <select class="form-select border-0 border-bottom" aria-label="Purpose" name="00N5i00000JOFU6" >
                                <option hidden selected disabled>Purpose</option>
                                <option value="Development">Development</option>
                                <option value="Support">Support</option>
                                <option value="Discussion">Discussion</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea class="w-100 form-control border-0 border-bottom" placeholder="About Your Project" name="description" ></textarea>
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
                    <div class="text-dark">CodM Software Ltd. <br> 71-75, Shelton Street, Covent Garden, London, WC2H 9JQ, UNITED KINGDOM</div>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-solid fa-phone text-info"></i>
                    <a href="tel:+44 7436934216" class="text-dark">+44 01218186924</a>
                </div>
                <div class="footerMailPhoneIcon mb-2">
                    <i class="fa-sharp fa-solid fa-envelope text-info"></i>
                    <a href="mailto:info@tech14networks.com" class="text-dark">info@codmsoftware.com</a>
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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkZda2DK9IvFu2smN1Z99vtt9j0_Tw2ZE&callback=initMap&libraries=places" async defer></script>

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
    zoom: 1, 
    center: { lat: 29.0588, lng: 76.0856}, 
  });

  const countryCoordinates = [
    { lat: 37.0902, lng: 95.7129 }, // USA
    { lat: 28.5355, lng: 77.3910 }, // india
    { lat: 29.0588, lng: 76.0856 }, // india
    { lat: 52.4862, lng: 1.8904 }, // india
   
  ];


  for (const coordinates of countryCoordinates) {
    new google.maps.Marker({
      position: coordinates,
      map: map,
    });
  }
}
 
    document.addEventListener("DOMContentLoaded", function () {
      initMap();
    });
</script>-->




<script> 
const url = 'https://location-to-address.p.rapidapi.com/v1/geocode/reverse?lon=-74.0445&lat=40.68922&limit=1&lang=en';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '8975f8d55bmsh6f58a860fb9012dp19b650jsnb7c3695973ad',
		'X-RapidAPI-Host': 'location-to-address.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}
</script>


<?php include "../app/footer.php"; ?>
 