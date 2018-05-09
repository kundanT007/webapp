<?php include_once('includes/classes/inc_DisplayClass.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel='SHORTCUT ICON' href='gallery/logo/favicon.ico' type='image/x-icon' />
<title>Course</title>
<?php
include('headsection.php');?>
</head>
<body>
	<!--START--FACEBOOK COMMENT-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=493838477624083";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- END--FOR FACEBOOK COMMENT-->
	<div class="header-home">

								<?php
								include('header.php');
								?>
							</div>
   <div class="grid_4">
		<div class="container" style="margin-top:30px";>


		    <div class="blog_grid">
		      <?php $display->singleCourseDisplay(); ?>
					<!--FOR FACEBOOK COMMENTS-->

					<div class="fb-comments" data-href="<?php echo $actual_link; ?>" data-numposts="5" data-width="1000px" style="margin-left:60px;"></div>
		   </div></div></div>
<!--
			 <div class="comment">

		  		    	<h2>Comments</h2>
		  		        	<ul class="comment-list">
		  		        	  <li><img src="images/pic12.jpg" alt="">
		  		        		 <div class="desc1">
		  		        			<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
		  		        			<div class="extra">
					                  <time pubdate="" datetime="2014-03-30T14:47:59">
						                 Submitted by admin on January 30, 2014 - 14:47					</time>
					                </div>
			                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
			                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
		  		        		   </div>
		  		        		   <div class="clearfix"></div>
		  		        		</li>
		  		        	</ul>
		  </div>
		  <div class="comments-area">
		  		        	<h3>Add New Comment</h3>
							<form>
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Website</label>
									<input type="text" value="">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea></textarea>
								</p>
								<p>
									<label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Submit Comment"></label>
								</p>
							</form>
		    </div>
		</div>
	</div>-->
	<?php include_once('footer.php') ?>
</body>
</html>
