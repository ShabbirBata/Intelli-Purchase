<div class="footer">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer-head">
			
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="text-center">
			<div class="col-sm-6">
			<img src="<?php echo base_url(); ?>images/2.jpg" class="img-circle author">
				
			</div>
			<div class="col-sm-6 author-text">
				<br>
				<a href="#">Kunal Agrawal</a><br>
				<i class="glyphicon glyphicon-briefcase"></i> PHP Web Developer<br>
				<i class="glyphicon glyphicon-phone"></i> +91 9890012345		
			</div>
				
			</div>
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<h2 align="center" id="dev"><i class="glyphicon glyphicon-star"></i> Developers</h2>
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="text-center">
			<div class="col-sm-6">
			<img src="<?php echo base_url(); ?>images/3.jpg" class="img-circle author">
				
			</div>
			<div class="col-sm-6 author-text">
				<br>
				<a href="#">Shabbir Bata</a><br>
				<i class="glyphicon glyphicon-briefcase"></i> PHP Web Developer<br>
				<i class="glyphicon glyphicon-phone"></i> +91 9890012345		
			</div>
			</div>
		</div>
	</div>

		<div class="col-sm-12 text-center copyright">
			Copyright &copy; <a href="<?php echo base_url(); ?>">intelliPurchase</a> | All Rights Reserved | 2015
		</div>

</div>


		<script type="text/javascript">stLight.options({publisher: "00e91c0c-d0fa-4be2-bcab-d29f94d035e2", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
		<script>
			var options={ "publisher": "00e91c0c-d0fa-4be2-bcab-d29f94d035e2", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "googleplus", "twitter", "linkedin", "reddit", "whatsapp", "email", "sharethis"]}};
			var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
		</script>
		<script type="text/javascript" src="<?php echo base_url();?>js/pwstrength.js"></script>
	    <script type="text/javascript">
	        jQuery(document).ready(function () {
	            "use strict";
	            var options = {};
	            options.ui = {
	                showPopover: false,
	                showErrors: true,
	                showProgressBar: true,
	                showStatus: true,
	                showVerdictsInsideProgressBar: true,
	                errorMessages:{
	                	password_too_short: "The Password is too short",
    					email_as_password: "Do not use your email as your password",
    					same_as_username: "Your password cannot contain your username",
    					two_character_classes: "Use atleast a Special symbol or a number",
    					repeated_character: "Too many repeated characters",
    					sequence_found: "Your password contains sequential characters"
	                }
	            };
	            options.rules = {
	                activated: {
	                    wordTwoCharacterClasses: true,
	                    wordRepetitions: false,
	                    wordLowercase: false,
    					wordUppercase: false,
    					wordOneNumber: false
	                }
	            };
	            $('#pwd-register').pwstrength(options);
	        });
	    </script>
	</body>
</html>