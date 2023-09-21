<footer class="bg-color-footer bg-dark text-white">
  <div class="container p-3">

    <div class="row mb-3 p-3">

      <div class="col-lg-9 order-md-2 mb-3">
        <div class="owl-carousel" id="AllCetificat">
          <div class="cetificat">
            <img src="../client/imageFoleder//omniStudioDeveloper.webp" alt="omniStudioDeveloper" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//omniStudioConsultant.webp" alt="omniStudioConsultant" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//platformAppBuilder.webp" alt="platformAppBuilder" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//PD1.webp" alt="PD1" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//PD2.webp" alt="PD2" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//CPQSpecialist.webp" alt="CPQSpecialist" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//B2CSolutionArchitect.webp" alt="B2CSolutionArchitect" class="w-100">
          </div>
          <div class="cetificat">
            <img src="../client/imageFoleder//applicationArchitect.webp" alt="applicationArchitect" class="w-100">
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3 ">
        <h5>COMPANY PROFILE</h5>
        <a href="../client/CodM_MediaDeck.pdf" target="_blank"><button class="btn btn-primary text-uppercase mb-3" type="button"> download <i class="fas fa-download"></i> </button></a>
        <br>
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCXthwczjWNxYx9Ti5bJ2hDg" target="_blank" role="button"><i class="fab fa-youtube"></i></a>
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/codmsoftware/mycompany/" target="_blank" role="button"><i class="fab fa-linkedin-in"></i></a>
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/CodmSoftwa" target="_blank" role="button"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <hr class="footerHrline mb-3">
    <!-- Copyright -->
    <div class="text-center p-1">
      © 2023 Copyright:
      <a class="text-white" href="index">CodM Software Pvt. Ltd.</a>
    </div>
    <!-- Copyright -->
  </div>
  </div>
  </div>
</footer>


<!--============ javaScript Cdn============= -->
<script src="../assect/js/CountriesAPI.js"></script>
<script src="../assect\js\typerWriter.js"></script>
<script src="../assect/js/headerJs.js"></script>

<!--============ javaScript Cdn End============= -->

<!-- jQuary start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('#serveToIndustrie').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    slideSpeed: 1500,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      },
      1400: {
        items: 5
      }
    }
  })
</script>

<!-- clinet section  -->
<script>
  $('#ourclinet').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    slideSpeed: 1500,
    responsive: {
      0: {
        items: 4
      },
      600: {
        items: 3
      },
      1000: {
        items: 6
      },
      1400: {
        items: 6
      }
    }
  })
</script>
<!-- jQuary End -->

<!-- jQuary  magnific-popup js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('#Events').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {
      enabled: true
    }

  });
</script>

<!-- testimonial -->
<script>
  $(function() {
        $(".owl-carousel.testimonial-carousel").owlCarousel({
      nav: true,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>'
      ],
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        },
        1400: {
          items: 1
        }
      }
    });
  });
</script>
<script>
  $('#AllCetificat').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    slideSpeed: 5000,
    responsive: {
      0: {
        items: 4
      },
      600: {
        items: 5
      },
      1000: {
        items: 7
      },
      1400: {
        items: 8
      }
    }
  })
</script>
 <script>
  // ----------------- Variables

wrapper = $(".tabs");
tabs = wrapper.find(".tab");
tabToggle = wrapper.find(".tab-toggle");

// ----------------- Functions

function openTab() {
  var content = $(this).parent().next(".content"),
    activeItems = wrapper.find(".active");

  if (!$(this).hasClass("active")) {
    $(this).add(content).add(activeItems).toggleClass("active");
    wrapper.css("min-height", content.outerHeight());
  }
}

// ----------------- Interactions

tabToggle.on("click", openTab);

// ----------------- Constructor functions

$(window).load(function () {
  tabToggle.first().trigger("click");
});

 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>