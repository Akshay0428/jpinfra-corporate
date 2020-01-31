
<!--Footer-->
<footer>
	<div class="content-continer">
		<div class="col-md-8 col-lg-8">
			<p>Copyright by JP INFRA. All rights reserved.</p>
		</div>
		<div class="col-md-4 col-lg-4">
			<img src="img/fb.png" alt="fb">
			<img src="img/twitter.png" alt="twitter">
			<img src="img/youtube.png" alt="youtube">
			<img src="img/linkedin.png" alt="linkedin">
		</div>	
		<div class="clearfix"></div>
	</div>		

</footer>
 
<!---->


	<!--External Javascript-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- My JavaScript -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-edit.js"></script>
  <script src="js/viewportchecker.js"></script>
  <script src="js/js.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/aos.js"></script>

  <script type="text/javascript">
    AOS.init({
      once: true,
    });

  </script>
	<script type="text/javascript">
		  
		  $(document).ready(function() {
			$('.carousel').carousel({
			  interval: 3000
		
			})

      $(".gallery-img").click(function(){
			var t = $(this).attr("src");
			$(".modal-body").html("<img src='"+t+"' class='modal-img'>");
			$("#myModal").modal();
		  });

      var a = 0;

      var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.counter-value').each(function() {
            var $this = $(this),
              countTo = $this.attr('data-count');
            $({
              countNum: $this.text()
            }).animate({
                countNum: countTo
              },

              {

                duration: 2000,
                easing: 'swing',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
                }

              });
          });
          a = 1;
        }

		  });
	</script>
		
</body>
</html>