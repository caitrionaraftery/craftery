<?php  include "header.php" ?>

				
				
<div class="container">

<div class="container-fluid">
	<div class="row-fluid">					
	<div class="span9">					
						<form>
  <label>Your name:</label>
  <input type="text" class="span4" placeholder="Your name here">

<label>Your email address:</label>
  <input type="text" class="span4" placeholder="Your email address here">
  
  <label>Message:</label>
  <textarea type="text" class="span10" placeholder="Your message here">
Enter your message here
  </textarea>
  <br>
  <button type="submit" class="btn">Send Message</button>
</form>
</div>

	<div class="span3">
<div class="well">			
					<?php  include "social_icons.php" ?>
					<p>
						<div class="fb-like" data-href="http://www.facebook.com/craftery.ie" data-send="false" data-layout="button_count" data-width="30" data-show-faces="false">
						</div>
					</p>
</div>
	</div>

</div>
</div>
</div>
		
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'))
		;</script>	
<?php  include "footer.php" ?>
