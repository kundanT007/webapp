<?php //require_once 'config/init.php';?>

<?php $display->showHeaders(); ?>
			</ul>
			<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->

	</div>
</div>
<!--script-->
<script>
$(document).ready(function(){
	$(".top-nav li a").click(function(){
		$(this).parent().addClass("active");
		$(this).parent().siblings().removeClass("active");
	});
});
</script>
<!-- script-for sticky-nav -->
<script>
$(document).ready(function() {
	var navoffeset=$(".header-home").offset().top;
	$(window).scroll(function(){
		var scrollpos=$(window).scrollTop();
		if(scrollpos >=navoffeset){
			$(".header-home").addClass("fixed");
		}else{
			$(".header-home").removeClass("fixed");
		}
	});

});
</script>
<!-- /script-for sticky-nav -->
<!--//header-->