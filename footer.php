
<div class="footer_Container">
    <div>
        <div class="logo"><img src="<?php site_icon_url()?>"></div>
        <div class="text">
            <div class="lines">
			<?php 
		wp_nav_menu(
				array(
					'theme_location' => 'footer-menu'
				)
		);
		?> <div><a href="https://dev.deoxy.nl/I/FAQ.php">Theme FAQ</a></div>           </div>
			<div class="icons">
							</div>
            <div class="copyright">
                Powered by <a href="http://dev.deoxy.nl" target="_blank">dev.deoxy.nl</a><br>
                All Rights Reserved.
            </div>
        </div>
    </div>
</div>









<?php wp_footer();?>
</body>
</html>