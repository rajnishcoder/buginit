<?php
/**
 * The template for displaying the footer
 **/
 
?>
	 	</div> <!-- Row End here -->
          </div> <!--.container-->
            </div> <!--.middle_wrapper-->
           <!--Middle wrapper End Here-->  
          
           <!--Footer wrapper Start Here--> 
   <footer class="footer_wrapper" itemscope itemtype="http://schema.org/WPFooter">
                 	
            <div class="container">
				<?php if(is_active_sidebar('Footer Sidebar')): ?>
					<div id="footer-widget-area">    
						<?php dynamic_sidebar('Footer Sidebar'); ?>
						<div class="clearboth"></div>
					</div>
				<?php endif; ?>
                <div class="clearboth"></div>
            </div><!--.container-->
            	<div class="copy_right">
                    <div class="container"> 
						<div class="row">
							<div class="col-md-4">
								<h3>Navigation</h3>
								<?php wp_nav_menu( 
									array( 
										'items_wrap'=> '<ul itemscope itemtype="https://schema.org/SiteNavigationElement" id="%1$s" class="%2$s">%3$s</ul>', 
										'container' => 'none',
										'fallback_cb' => false 
									) ); 
								?>
							</div>
							<div class="col-md-4">
								<h3>Support Us</h3>
								<a href="https://www.patreon.com/join/buginit" target="_blank" rel="nofollow"
									style="float:left;font-size: 16px; line-height:20px;clear:both">
									Support on Patreon
								</a>
								<a href="https://www.paypal.me/rajnishprogrammer/5" target="_blank" rel="nofollow"
									style="float:left;font-size: 16px; line-height:20px;clear:both">
									Through Paypal
								</a>
							</div>
							<div class="col-md-4">
								<h3>Follow Us</h3>								
								<div class="footerFollowMain">
									<ul class="footerFollowList">
										<li class="fb"><a href="https://www.facebook.com/buginit" target="_blank" ></a></li>
										<li class="twitter"><a href="https://twitter.com/buginit" target="_blank" ></a></li>
									</ul>
									<!-- <div style="float:right;font-size:18px;">Follow Us On: </div> -->
								</div>
							</div>
						</div>
						<div style="text-align:center">&copy; <?php echo date('Y'); ?> All Rights Reserved. v1.1.2</div>
						
              		</div>
            	</div> 
            <!--Footer wrapper End Here--> 
			<?php wp_footer(); ?>
	     </footer> 	  

	</div>
	<div class="themeSwitcher" onclick="darkSwitcher(this)">
		<i class="fa fa-adjust"></i>
	</div>
	<div id="dark" class="dark"></div>
	<script>
		// for darkmode
		console.log(localStorage.getItem("isDark"));
		
		function darkSwitcher(ele) {
			var isDark = JSON.parse(localStorage.getItem("isDark"));
			console.log('1', isDark);
			
			var body = document.getElementsByTagName('body')[0];
			if (isDark == true) {
				console.log('2', isDark);
				
				body.classList.add('darkTheme');
				document.getElementById('dark').classList.add('dark')
				localStorage.setItem("isDark", "false");
				console.log(localStorage.getItem("isDark"), isDark);
				
			} else {
				console.log('in if else');
				body.classList.remove('darkTheme');
				document.getElementById('dark').classList.remove('dark')
				localStorage.setItem("isDark", "true");
				console.log(localStorage.getItem("isDark"));
			}
			// if (ele && body.classList.contains('darkTheme')) {
			// } else {
			// }
		}
	</script>
    <!--.main_container end-->
	<!-- <script type="text/javascript">
		// for infolinks
		var infolinks_pid = 2053195;
		var infolinks_wsid = 4;
	</script>
	<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script> -->

    </body>
    </html>