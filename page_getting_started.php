<?php
/*
Template Name: Page Getting Started
*/
?>
<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php get_header(); ?>
<?php while ($content->looping() ) : ?>
<?php get_template_part("pagecontent","background"); ?>
<?php endwhile; ?>

	<!-- Contact Form -->
	<div id="contact-form" class="dark clearfix">
		<div class="container">
			<div class="contact-heading grid-full">
				<h3><?php echo $t->options->get("contactHeading"); ?></h3>
				<span class="border"></span>
			</div>
		</div>

		<form action="#" method="post" class="contactForm peThemeContactForm container" id="contactform">
			<fieldset>
				<div class="form-field grid-half control-group">
					<label for="name"><?php _e("Name",'Pixelentity Theme/Plugin'); ?></label>
					<span><input type="text" class="required" name="name" id="name" /></span>
				</div>
				<div class="form-field grid-half  control-group">
					<label for="email"><?php _e("Email",'Pixelentity Theme/Plugin'); ?></label>
					<span><input type="email" class="required" name="email" id="email" /></span>
				</div>
				<div class="form-field grid-full control-group">
					<label for="message"><?php _e("Message",'Pixelentity Theme/Plugin'); ?></label>
					<span><textarea name="message" class="required" id="message"></textarea></span>
				</div>
			</fieldset>
			<div class="form-click grid-full">
				<span><button name="send" type="submit" dir="ltr" lang="en" class="submit" id="submit"><?php _e("Send",'Pixelentity Theme/Plugin'); ?></button></span>
			</div>
			<div id="contactFormSent" class="grid-full formSent alert"><?php echo $t->options->get("msgOK"); ?></div>
			<div id="contactFormError" class="grid-full formError alert"><?php echo $t->options->get("msgKO"); ?></div>
		</form>	
	</div>

<?php get_footer(); ?>
