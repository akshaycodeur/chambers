<footer class="sectionFooter paddingtop-small paddingbottom-big">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-col">
            <div class="footerlogo"><img src="assets/images/logoblack1.png" alt=""></div>
            <p>Trust, Honesty and Success is the basis of our relationship with you. Expert advice with a human touch is what we offer. </p>
          </div>
          <div class="col-md-4 footer-col">
            <h4 class="">Find us</h4>
            <span class="pin"></span>
            <p>Chancery House, 510 4th Floor MU, </br>Lislet Geoffrey St, Port Louis 11321</p>
            <span class="call"></span>
            <p>208 0429</p>
          </div>
          <div class="col-md-4 footer-col">
            <h4 class="">Useful Links</h4>
            <a href="#"><p>Terms and conditions</p></a>
            <a href="#"><p>Privacy Policy</p></a>
            <a href="#"><p>External Links</p></a>
          </div>
        </div>
      </div>
    </footer>

	<?php
			wp_footer();
			?> 
			
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>		
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/scripts/custom.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      $(document).ready(function(){
        $('.sectionSlider').slick({
          autoplay: true,
        });
        $('.testimonialbox').slick({
          autoplay: true,
        });
      });
    </script>

	<script>
	AOS.init();
	</script>

  </body>
</html>