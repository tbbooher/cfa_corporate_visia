<?php $t =& peTheme(); ?>
<?php $layout =& $t->layout; ?>

<!-- Begin Footer -->
<footer id="footer" class="clearfix">
	<div class="content dark container">

		<!-- Contact Links -->
		<ul class="contact animated hatch clearfix">
			<?php if ( $t->options->get("contactPhone") ) : ?>
			<li class="grid-2">
				<p>
				<i class="icon-phone"></i>
				<br>
				<?php echo $t->options->get("contactPhone"); ?>
			</li>
			<?php endif; ?>
			<?php if ( $t->options->get("contactEmail") ) : ?>
			<li class="grid-2">
				<a id="contact-open" href="#">
					<p>
						<i class="icon-mail"></i>
						<br>
					<?php echo $t->options->get("contactEmail"); ?>
					</p>
				</a>
			</li>
			<?php endif; ?>
			<?php if ( $t->options->get("contactAddress") ) : ?>
			<li class="grid-2">
				<a href="<?php echo esc_attr( $t->options->get("contactAddressLink") ); ?>" target="_blank">
					<p>
						<i class="icon-location"></i>
						<br>
					<?php echo $t->options->get("contactAddress"); ?>
					</p>
				</a>
			</li>
			<?php endif; ?>
		</ul>
	</div>

	<div class="container">

		<!-- Social Links -->
		<ul class="social-links grid-full">
			<?php $t->content->socialLinks($t->options->get("footerSocialLinks"),"bottom"); ?>
		</ul>

		<!-- Copyright Info -->
		<div class="copyright grid-full"><h6><?php echo $t->options->get("footerCopyright"); ?></h6></div>

	</div>
</footer>
<!-- End Footer -->
							
<?php $t->footer->wp_footer(); ?>

</body>
</html>
