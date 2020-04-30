
<div class="wrapper">
  
<footer>
    <div class="container">
     <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3>Lorem ipsum</h3>
            <ol>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
            </ol>
        </div>
         <div class="col-lg-3 col-md-3 col-sm-12">
            <h3>Lorem ipsum</h3>
            <ol>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
            </ol>
        </div>
         <div class="col-lg-3 col-md-3 col-sm-12">
            <h3>Lorem ipsum</h3>
            <ol>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
                <li><a href="">Lorem ipsuma</a></li>
            </ol>
        </div>
         <div class="col-lg-3 col-md-3 col-sm-12">
            <h3>Always Update</h3>
             <input type="news" placeholder="Newsletter" class="news"> <button typ="btn" class="btn btn-success go">Go</button>
        </div>
         
         
         
          <div class="col-lg-10 col-md-10 col-sm-10 text-center mt-3">copyright©2020 reserved by <i><a href="">skgroup</a></i></div>
         <div col-lg-2 col-md-2 col-sm-2>
             <nav class="navbar navbar-expand-lg  social ">
                    <a href=""><i class="fab fa-facebook-square template-awesome" aria-hidden="true"></i>
                    </a>
                    <a href=""><i class="fa fa-envelope template-awesome" aria-hidden="true"></i>
                    
                    </a>
                    <a href=""><i class="fab fa-twitter-square template-awesome" aria-hidden="true"></i>
                    </a>
                </nav>
         </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 fly">
     <i class="fab fa-fly blink" id="top"></i>
        </div>    
    </div>
    </div>
    </footer>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".flip").click(function() {
                $(".panel").slideToggle("slow");
            });
        });
        
        
        
</script>
        
<script>
    $('.carousel').carousel({
  interval: 3000
})
    
    
</script>

<script>
    $("#top").click(function() {
        $("html").animate({ scrollTop: 0 }, "slow");
        });
    
    
    function blink_text() {
    $('.blink').fadeOut(900);
    $('.blink').fadeIn(900);
}
setInterval(blink_text, 1000);
</script>
<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="js/slick.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
    </script>        
        
        
        
    
<script>
  AOS.init(20000);
</script>




</body>

</html>