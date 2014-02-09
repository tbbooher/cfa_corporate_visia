<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php if ( defined( 'HOME_SLIDER') ) echo '<div class="slider-cover">'; ?>
<?php $parallax = empty($meta->background->parallax) ? "parallax-disabled" : ""; ?>
<section class="parallax colored <?php echo $parallax; ?> clearfix" id="<?php $content->slug(); ?>" style="background-image: url(' <?php echo $meta->background->background; ?>');">
	<div class="content dark padded background-page container">

		<div class="title grid-full">
			<h2><?php $content->title(); ?></h2>
			<span class="border"></span>

			<div class="sub-heading <?php $content->slug(); ?>">
			  	<?php $content->content(); ?>
		    	<form action="#" method="post" class="contactForm peThemeContactForm container" id="contactform">
					<fieldset>
						<div class="form-field grid-half control-group">
							<label for="name"><?php _e("Name",'Pixelentity Theme/Plugin'); ?></label>
							<span><input type="text" class="required" name="name" id="name" data-validation="name" /></span>
						</div>
						<div class="form-field grid-half  control-group">
							<label for="email"><?php _e("Email",'Pixelentity Theme/Plugin'); ?></label>
							<span><input type="email" class="required" name="email" id="email" /></span>
						</div>
						<div class="form-field grid-full control-group">
							<label for="message"><?php _e("Message",'Pixelentity Theme/Plugin'); ?></label>
							<span><textarea name="message" class="required" id="message" data-validation="message"></textarea></span>
						</div>
					</fieldset>
					<div class="form-click grid-full">
						<span><button name="send" type="submit" dir="ltr" lang="en" class="submit" id="submit"><?php _e("Send",'Pixelentity Theme/Plugin'); ?></button></span>
					</div>
					<div id="contactFormSent" class="grid-full formSent alert"><?php echo $t->options->get("msgOK"); ?></div>
					<div id="contactFormError" class="grid-full formError alert"><?php echo $t->options->get("msgKO"); ?></div>
				</form>	
			    </div>
			</div>
		</div>
		<div class="clearfix"></div>
		<?php if ($content->hasFeatImage()): ?>
		<div class="animated slide" data-appear-bottom-offset="100">
			<?php $content->img(960,330); ?>
		</div>	
		<?php endif; ?>
	</div>
</section>
<?php if ( defined( 'HOME_SLIDER') ) echo '</div>'; ?>
