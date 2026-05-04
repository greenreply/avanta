<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Avanta
 * @since Avanta 1.0
 */

?>	
		<!-- FOOTER -->
		<footer class="footer" id="contact">
		  	<div class="footer-grid">
		    	<div class="footer-column">
		    		<?php $avanta_footer_logo_image = get_field('avanta_footer_logo_image', 'option'); ?>
					<?php if(!empty($avanta_footer_logo_image)) { ?>
						<a href="<?php echo site_url(); ?>" class="nav-logo"><img src="<?php echo $avanta_footer_logo_image['url']; ?>" alt="<?php echo $avanta_footer_logo_image['alt']; ?>" width="<?php echo $avanta_footer_logo_image['width']; ?>" height="<?php echo $avanta_footer_logo_image['height']; ?>"></a>
					<?php } else { ?>
						<a href="<?php echo site_url(); ?>" class="footer-brand"><?php echo get_field('avanta_logo_text', 'option'); ?></a>
					<?php } ?>
		      		<?php echo get_field('avanta_footer_desc', 'option'); ?>
		    	</div>
		    	<div class="footer-column">
	    			<?php $locations = get_nav_menu_locations();
						if (isset($locations['footer'])) {
					    	$menu = wp_get_nav_menu_object($locations['footer']);
					    	if ($menu) {
					    		echo '<h4>' . esc_html($menu->name) . '</h4>';
					    	}
						}
					?>
					<?php
						wp_nav_menu([
						  'theme_location' => 'footer',
						  'container'      => false,
						  'menu_class'     => '',
						  'items_wrap'     => '<ul>%3$s</ul>',
						]);
					?>
			    </div>
		    	<div class="footer-column">
			      	<?php $locations = get_nav_menu_locations();
						if (isset($locations['footer'])) {
						    $menu = wp_get_nav_menu_object($locations['hotel_info_menu']);
						    if ($menu) {
						    	echo '<h4>' . esc_html($menu->name) . '</h4>';
						    }
						}
					?>
			      	<?php
						wp_nav_menu([
						  'theme_location' => 'hotel_info_menu',
						  'container'      => false,
						  'menu_class'     => '',
						  'items_wrap'     => '<ul>%3$s</ul>',
						]);
					?>
		    	</div>
			    <div class="footer-column contact-details">
			    	<?php $contact_details = get_field('contact_details', 'option'); ?>
			      	<h4><?php echo $contact_details['contact_details_title']; ?></h4>
			      	<ul>
				        <li><div class="footer-icon"><?php echo $contact_details['avanta_address_icon']; ?></div><a href="<?php echo $contact_details['avanta_address_link']; ?>"><?php echo $contact_details['avanta_address']; ?></a></li>
				        <li><div class="footer-icon"><?php echo $contact_details['avanta_phone_number_icon']; ?></div><a href="<?php echo $contact_details['avanta_phone_number_link']; ?>"><?php echo $contact_details['avanta_phone_number']; ?></a></li>
				        <li><div class="footer-icon"><?php echo $contact_details['avanta_email_icon']; ?></div><a href="<?php echo $contact_details['avanta_email_link']; ?>"><?php echo $contact_details['avanta_email']; ?></a></li>
			      	</ul>
			    </div>
		  	</div>
		  	<div class="footer-bottom">
		    	<span><?php echo get_field('footer_copy_right_text', 'option'); ?></span>
		    	<span>
		    		<?php 
					$bottom_footer_links = get_field('bottom_footer_links', 'option');
					if( $bottom_footer_links ) { ?>
						<ul class="policy-menu">
							<?php foreach( $bottom_footer_links as $bottom_footer_link ) { ?>
						  		<li><a href="<?php echo $bottom_footer_link['footer_bottom_link']['url']; ?>"><?php echo $bottom_footer_link['footer_bottom_link']['title']; ?></a></li>
						  	<?php } ?>
						</ul>
					<?php } ?>
				</span>
		  	</div>
		</footer>

		<div id="custom-popup" class="popup-overlay">
		  <div class="popup-box">

		    <span class="popup-close">&times;</span>

		    <div class="popup-left">
		      <img src="https://avanta.ashishoza.co.in/wp-content/uploads/2026/04/popup-image.jpg" />
		    </div>

		    <div class="popup-right">
		      <h5>LEAVING SO SOON?</h5>
		      <h2>AVAIL EXCLUSIVE OFFERS</h2>

		      <div class="offer-items">
			        <div class="offer-item divider">
			            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M454.683 282.98V163.501c0-19.758-16.017-35.775-35.776-35.775h-249c-.453.311-.834.72-1.099 1.206l-10.817 19.777c-1.334 2.439-4.837 2.439-6.17 0l-10.817-19.777a3.522 3.522 0 0 0-1.099-1.206H93.093c-19.758 0-35.776 16.017-35.776 35.775V190.5M57.317 225.5v57.48M25.083 425.088h46.561v49.231H25.083zM440.356 425.088h46.561v49.231h-46.561z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" opacity="1" class=""></path><path d="M419.459 282.083a22.767 22.767 0 0 0 1.817-8.922v-52.384c0-12.643-10.344-22.988-22.988-22.988H298.41c-12.643 0-22.988 10.345-22.988 22.988v52.384c0 3.16.65 6.175 1.817 8.922M234.761 282.083a22.767 22.767 0 0 0 1.817-8.922v-52.384c0-12.643-10.344-22.988-22.988-22.988h-99.878c-12.643 0-22.988 10.345-22.988 22.988v52.384c0 3.16.65 6.175 1.817 8.922h142.22zM336 282.083H65.828c-22.503 0-40.746 18.242-40.746 40.746v21.379h461.835v-21.379c0-22.503-18.242-40.746-40.746-40.746H371M172 425.088h317.5c8.284 0 15-6.716 15-15v-50.88c0-8.284-6.716-15-15-15h-467c-8.284 0-15 6.716-15 15v50.88c0 8.284 6.716 15 15 15H137M504.5 386.947H7.5M157.991 78.555l10.817 19.777c.323.59.808 1.075 1.398 1.398l19.777 10.817c2.439 1.334 2.439 4.837 0 6.17l-19.777 10.817a3.521 3.521 0 0 0-1.398 1.398l-10.817 19.777c-1.334 2.439-4.837 2.439-6.17 0l-10.817-19.777a3.521 3.521 0 0 0-1.398-1.398l-19.777-10.817c-2.439-1.334-2.439-4.837 0-6.17l19.777-10.817a3.521 3.521 0 0 0 1.398-1.398l10.817-19.777c1.334-2.439 4.836-2.439 6.17 0zM220.248 42.071v31.504M204.496 57.823H236M284.248 81.071v21.504M273.496 91.823H295M362.16 39.51l8.401 15.361c.323.59.808 1.075 1.398 1.398l15.361 8.401c2.439 1.334 2.439 4.837 0 6.17l-15.361 8.401a3.521 3.521 0 0 0-1.398 1.398L362.16 96c-1.334 2.439-4.837 2.439-6.17 0l-8.401-15.361a3.521 3.521 0 0 0-1.398-1.398L330.83 70.84c-2.439-1.334-2.439-4.837 0-6.17l15.361-8.401a3.521 3.521 0 0 0 1.398-1.398l8.401-15.361c1.334-2.438 4.836-2.438 6.17 0zM7.5 474.319h497" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" opacity="1" class=""></path></g></svg></div>
			            <p>Enjoy Savings on <br />Room Rates</p>
			        </div>

			        <div class="offer-item">
			            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#1d4a7a" opacity="1" data-original="#000000"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0v-141l15-30v-116c0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15V45C20.147 45 0 24.853 0 0Z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(459.5 384.5)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path><path d="M0 0c0-95.821-77.679-173.5-173.5-173.5S-347-95.821-347 0s77.679 173.5 173.5 173.5S0 95.821 0 0Z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(429.5 256)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path><path d="M0 0c-14.639-19.113-23.343-43.011-23.343-68.945 0-62.684 50.816-113.5 113.5-113.5 62.685 0 113.5 50.816 113.5 113.5 0 62.685-50.815 113.5-113.5 113.5-25.934 0-49.832-8.704-68.944-23.342" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(165.843 324.945)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path><path d="M0 0c0-46.116-37.385-83.5-83.5-83.5-46.116 0-83.5 37.384-83.5 83.5s37.384 83.5 83.5 83.5C-37.385 83.5 0 46.116 0 0Z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(339.5 256)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path><path d="M0 0v-60" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(37.5 429.5)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path><path d="M0 0v-90.377a45 45 0 0 1 4.751-20.124L15-131v-201c0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15v201l10.249 20.499A45 45 0 0 1 60-90.377V0" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(7.5 429.5)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path><path d="M0 0h60" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(7.5 369.5)" fill="none" stroke="#1d4a7a" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""></path></g></g></svg></div>
			            <p>Avail Offers across<br />Restaurants</p>
			        </div>
			    </div>

			    <div class="offer-item single">
			        <div class="icon"><svg width="452" height="512" viewBox="0 0 452 512" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.6497 342.607L79.2464 344.439C80.3489 344.47 81.4348 344.717 82.4417 345.167C83.4488 345.617 84.3574 346.261 85.1156 347.062C85.8736 347.864 86.466 348.807 86.8597 349.837C87.2534 350.867 87.441 351.965 87.4105 353.067L87.0247 367.067C102.598 358.909 119.913 354.639 137.493 354.62C155.074 354.602 172.399 358.836 187.989 366.962L194.168 370.163C202.718 374.579 212.151 377.016 221.77 377.291L282.502 378.96C291.923 379.226 301.107 381.973 309.127 386.922C317.148 391.871 323.721 398.848 328.184 407.148L393.971 376.064C414.208 365.883 438.875 373.399 449.995 393.132C451.049 394.996 451.35 397.192 450.839 399.271C450.328 401.351 449.042 403.156 447.244 404.319L297.449 501.21C297.117 501.428 296.769 501.62 296.408 501.785C281.723 508.525 265.755 512.01 249.598 512C241.969 512.005 234.36 511.221 226.893 509.659C226.707 509.617 226.528 509.576 226.347 509.522L123.034 480.526C115.616 478.427 107.672 479.296 100.884 482.95L83.5833 492.214L83.3919 499.205C83.3323 501.393 82.4205 503.47 80.8519 504.996C79.2834 506.522 77.1816 507.376 74.9935 507.375H74.763L8.1683 505.542C7.0655 505.512 5.97926 505.264 4.97201 504.814C3.96487 504.364 3.05639 503.72 2.29818 502.919C1.53992 502.118 0.946816 501.174 0.553067 500.144C0.159378 499.113 -0.0274873 498.015 0.00326262 496.912L4.02572 350.773C4.05551 349.671 4.30271 348.584 4.75229 347.577C5.20186 346.57 5.84509 345.661 6.64584 344.903C7.44669 344.145 8.38917 343.552 9.41928 343.158C10.4494 342.764 11.5473 342.577 12.6497 342.607ZM180.267 381.876C165.617 374.243 149.187 370.68 132.692 371.56C116.196 372.439 100.237 377.729 86.4828 386.878L84.1165 472.883L92.9583 468.146C103.57 462.442 115.984 461.084 127.577 464.361L230.612 493.284C250.222 497.292 270.598 495.017 288.842 486.784L430.464 395.171C426.621 391.613 421.78 389.316 416.593 388.59C411.406 387.863 406.121 388.741 401.448 391.105C401.382 391.139 401.316 391.172 401.25 391.2L333.774 423.084C334.417 426.678 334.689 430.329 334.585 433.979C334.526 436.164 333.616 438.241 332.049 439.767C330.482 441.292 328.382 442.147 326.196 442.148H325.961L226.125 439.401C223.899 439.34 221.787 438.395 220.256 436.777C218.725 435.159 217.899 432.999 217.96 430.772C218.092 426.139 221.951 422.482 226.588 422.607L317.055 425.105C313.594 408.391 299.105 396.244 282.046 395.753L221.31 394.084C209.161 393.732 197.246 390.654 186.447 385.078L180.267 381.876ZM17.0247 488.982L66.8294 490.356L70.388 360.999L20.5843 359.629L17.0247 488.982ZM230.787 111.794C298.047 111.794 352.572 166.317 352.572 233.577C352.572 300.837 298.047 355.36 230.787 355.36C163.528 355.36 109.004 300.837 109.004 233.577C109.083 166.35 163.56 111.868 230.787 111.794ZM230.787 128.59C172.832 128.656 125.867 175.622 125.801 233.577C125.801 291.561 172.804 338.564 230.787 338.564C288.771 338.564 335.775 291.561 335.775 233.577C335.775 175.593 288.771 128.59 230.787 128.59ZM283.323 177C288.498 177 291.948 180.45 291.948 185.625C291.948 190.8 288.498 194.25 283.323 194.25H248.823C252.384 199.592 255.128 205.342 256.493 211.5H283.323C288.498 211.5 291.948 214.95 291.948 220.125C291.948 225.3 288.498 228.75 283.323 228.75H256.582C254.93 236.897 250.908 244.554 244.51 250.312C236.748 258.937 225.535 263.25 214.323 263.25H209.148L246.236 300.337C249.686 303.787 249.685 308.962 246.236 312.412C244.511 314.137 242.785 315 240.198 315C237.61 315 235.885 314.137 234.16 312.412L182.41 260.662C179.823 258.075 178.961 254.625 180.686 251.175C181.548 247.725 184.998 246 188.448 246H214.323C221.223 246 228.123 243.412 232.436 238.237C235.404 235.764 237.52 232.438 238.785 228.75H188.448C183.273 228.75 179.823 225.3 179.823 220.125C179.823 214.95 183.273 211.5 188.448 211.5H238.785C237.52 207.812 235.404 204.486 232.436 202.013C228.123 196.838 221.223 194.25 214.323 194.25H188.448C183.273 194.25 179.823 190.8 179.823 185.625C179.823 180.45 183.273 177 188.448 177H283.323ZM167.8 41.9912C170.027 41.9912 172.164 42.8763 173.739 44.4512C175.314 46.0261 176.199 48.1623 176.199 50.3896V88.1816C176.199 90.409 175.314 92.5451 173.739 94.1201C172.164 95.6951 170.027 96.5801 167.8 96.5801C165.573 96.58 163.437 95.695 161.862 94.1201C160.287 92.5452 159.403 90.4088 159.403 88.1816V50.3896C159.403 48.1624 160.287 46.0261 161.862 44.4512C163.437 42.8763 165.573 41.9913 167.8 41.9912ZM230.787 0C233.015 0 235.151 0.884987 236.726 2.45996C238.301 4.03494 239.186 6.17108 239.186 8.39844V88.1816C239.186 90.409 238.301 92.5451 236.726 94.1201C235.151 95.6951 233.015 96.5801 230.787 96.5801C228.56 96.58 226.424 95.6951 224.849 94.1201C223.274 92.5452 222.389 90.4089 222.389 88.1816V8.39844C222.389 6.17116 223.274 4.03493 224.849 2.45996C226.424 0.885024 228.56 5.18191e-05 230.787 0ZM293.775 41.9912C296.002 41.9912 298.138 42.8762 299.713 44.4512C301.288 46.0261 302.173 48.1623 302.173 50.3896V88.1816C302.173 90.4089 301.288 92.5451 299.713 94.1201C298.138 95.6951 296.002 96.5801 293.775 96.5801C291.547 96.5801 289.411 95.6951 287.836 94.1201C286.261 92.5451 285.376 90.4089 285.376 88.1816V50.3896C285.376 48.1623 286.261 46.0261 287.836 44.4512C289.411 42.8762 291.547 41.9912 293.775 41.9912Z" fill="#1D4A7A"/></svg></div>
			        <p>Special Savings<br />on Spas</p>
			    </div>

		      <a href="#" class="popup-btn">VIEW OFFERS</a>
		    </div>

		  </div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

		<script>
		document.addEventListener("DOMContentLoaded", function() {

		  const popup = document.getElementById("custom-popup");
		  const closeBtn = document.querySelector(".popup-close");

		  function setCookie(name, value, hours) {
		    const d = new Date();
		    d.setTime(d.getTime() + (hours*60*60*1000));
		    document.cookie = name + "=" + value + ";expires=" + d.toUTCString() + ";path=/";
		  }

		  function getCookie(name) {
		    const cname = name + "=";
		    const ca = document.cookie.split(';');
		    for(let i=0;i<ca.length;i++) {
		      let c = ca[i].trim();
		      if (c.indexOf(cname) == 0) return c.substring(cname.length,c.length);
		    }
		    return "";
		  }

		  function showPopup() {
		    if (!getCookie("popupClosed")) {
		      popup.style.display = "flex";
		      setTimeout(() => popup.classList.add("active"), 10);
		    }
		  }

		  function closePopup() {
		    popup.classList.remove("active");
		    setTimeout(() => popup.style.display = "none", 400);
		    setCookie("popupClosed", "true", 1); // show again after 6 hours
		  }

		  closeBtn.addEventListener("click", closePopup);

		  // Only homepage
		  if (window.location.pathname === "/" || document.body.classList.contains("home")) {
		    setTimeout(showPopup, 4000);
		  }

		});
		</script>

		<script>
		document.addEventListener("DOMContentLoaded", function () {
		  new Swiper(".testSwiper", {
		    loop: true,
		    spaceBetween: 30,

		    slidesPerView: 1,
		    breakpoints: {
		      768: {
		        slidesPerView: 2
		      },
		      1024: {
		        slidesPerView: 3
		      }
		    },

		    navigation: {
		      nextEl: ".swiper-button-next",
		      prevEl: ".swiper-button-prev",
		    },

		    autoplay: {
		      delay: 4000,
		      disableOnInteraction: false,
		    },
		  });
		});

		
		Fancybox.bind("[data-fancybox='gallery']", {
		    Thumbs: false,
		    Toolbar: {
		      display: [
		        "close"
		      ]
		    }
		});
	
		document.addEventListener("DOMContentLoaded", function () {

		    const items = document.querySelectorAll(".dynamic-item");
		    const dynamicText = document.getElementById("dynamicText");
		    const wrapper = document.getElementById("announcementWrapper");

		    let index = 0;
		    let interval;
		    let isPaused = false;

		    function showText(i) {
		        if (items.length === 0) return;

		        dynamicText.classList.remove("show");

		        setTimeout(() => {
		            // Copy full HTML (icon + text)
		            dynamicText.innerHTML = items[i].innerHTML;
		            dynamicText.classList.add("show");
		        }, 400);
		    }

		    function startRotation() {
		        interval = setInterval(() => {
		            if (!isPaused) {
		                index = (index + 1) % items.length;
		                showText(index);
		            }
		        }, 3000);
		    }

		    // Initial load
		    if (items.length > 0) {
		        showText(0);
		        startRotation();
		    }

		    if (wrapper) {
			  wrapper.addEventListener("mouseenter", () => isPaused = true);
			  wrapper.addEventListener("mouseleave", () => isPaused = false);
			}
		});
		
	// Navbar scroll — hide top bar on scroll, move nav to top
	const nav = document.getElementById('navbar');
	const topBar = document.getElementById('topBar');
	window.addEventListener('scroll', () => {
	  const scrolled = window.scrollY > 80;
	  nav.classList.toggle('scrolled', scrolled);
	  if (topBar) topBar.style.transform = scrolled ? 'translateY(-100%)' : 'translateY(0)';
	  if (topBar) topBar.style.transition = 'transform 0.4s ease';
	});

	const toggle = document.getElementById('mobileToggle');
	const links = document.getElementById('navLinks');
	const closeBtn = document.getElementById('menuClose');

	if (toggle && links) {
	  toggle.addEventListener('click', () => {
	    links.classList.toggle('open');
	  });
	}

	// ✅ Close button click
	if (closeBtn) {
	  closeBtn.addEventListener('click', () => {
	    links.classList.remove('open');
	  });
	}

	// ✅ Close on menu link click
	links.querySelectorAll('a').forEach(a =>
	  a.addEventListener('click', () => links.classList.remove('open'))
	);

	// Live IST Clock
	function updateClock() {
	  const now = new Date();
	  const ist = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Kolkata' }));
	  const h = String(ist.getHours()).padStart(2, '0');
	  const m = String(ist.getMinutes()).padStart(2, '0');
	  const s = String(ist.getSeconds()).padStart(2, '0');
	  document.getElementById('liveTime').textContent = h + ':' + m + ':' + s;
	}
	updateClock();
	setInterval(updateClock, 1000);

	// Live Weather (Srinagar)
	async function fetchWeather() {
	  try {
	    const res = await fetch(
	      'https://api.weatherapi.com/v1/current.json?key=da62864d7186458599b93034260104&q=Srinagar&aqi=no'
	    );

	    if (!res.ok) throw new Error('API error');

	    const data = await res.json();

	    const temp = Math.round(data.current.temp_c) + '°C';
	    const condition = data.current.condition.text.toLowerCase();

	    const weatherTemp = document.getElementById('weatherTemp');

		if (weatherTemp) {
		  weatherTemp.textContent = temp;
		}

	    let icon = '⛅';

	    if (condition.includes('sunny') || condition.includes('clear')) icon = '☀️';
	    else if (condition.includes('rain')) icon = '🌧️';
	    else if (condition.includes('snow')) icon = '❄️';
	    else if (condition.includes('cloud')) icon = '☁️';
	    else if (condition.includes('mist') || condition.includes('fog')) icon = '🌫️';

	    document.querySelector('.tb-weather-icon').textContent = icon;

	  } catch (e) {
	    console.error(e);
	    document.getElementById('weatherTemp').textContent = 'N/A';
	  }
	}

	fetchWeather();

	/* Booking Bar Sticky 
	window.addEventListener("scroll", function () {
	  const bar = document.querySelector(".booking-bar");
	  const trigger = document.querySelector(".hero").offsetHeight - 120;

	  if (window.scrollY > trigger) {
	    bar.classList.add("is-sticky");
	  } else {
	    bar.classList.remove("is-sticky");
	  }
	});*/

	// Account dropdown
	function toggleAccountMenu() {
	  const dd = document.getElementById('accountDropdown');
	  dd.classList.toggle('open');
	}
	document.addEventListener('click', function(e) {
	  const acct = document.getElementById('accountToggle');
	  const dd = document.getElementById('accountDropdown');
	  if (acct && !acct.contains(e.target)) dd.classList.remove('open');
	});

	// Scroll reveal
	const observer = new IntersectionObserver((entries) => {
	  entries.forEach((entry, i) => {
	    if (entry.isIntersecting) {
	      setTimeout(() => entry.target.classList.add('visible'), i * 80);
	      observer.unobserve(entry.target);
	    }
	  });
	}, { threshold: 0.1 });
	document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

	// Default dates & validation
	const today = new Date();
	const t1 = new Date(today); t1.setDate(t1.getDate() + 1);
	const t2 = new Date(today); t2.setDate(t2.getDate() + 2);
	const fmt = d => d.toISOString().split('T')[0];
	const ciInput = document.getElementById('bookCheckin');
	const coInput = document.getElementById('bookCheckout');

	if (ciInput && coInput) {
	  ciInput.value = fmt(t1);
	  coInput.value = fmt(t2);
	}
	ciInput.min = fmt(today);
	coInput.min = fmt(t1);
	ciInput.addEventListener('change', function() {
	  const ciDate = new Date(this.value);
	  const nextDay = new Date(ciDate); nextDay.setDate(nextDay.getDate() + 1);
	  coInput.min = fmt(nextDay);
	  if (coInput.value && new Date(coInput.value) <= ciDate) {
	    coInput.value = fmt(nextDay);
	  }
	});
	coInput.addEventListener('change', function() {
	  if (this.value && ciInput.value && new Date(this.value) <= new Date(ciInput.value)) {
	    const nextDay = new Date(ciInput.value); nextDay.setDate(nextDay.getDate() + 1);
	    this.value = fmt(nextDay);
	  }
	});

	// Room select
	function selectRoom(id, price) {
	  const b = {
	    roomId: id, price,
	    checkin: document.getElementById('bookCheckin').value,
	    checkout: document.getElementById('bookCheckout').value,
	    guests: document.getElementById('bookGuests').value,
	    rooms: document.getElementById('bookRooms').value
	  };
	  localStorage.setItem('avantaBooking', JSON.stringify(b));
	  window.location.href = 'rooms.html?select=' + id;
	}
	function goToRooms() {
	  const b = {
	    checkin: document.getElementById('bookCheckin').value,
	    checkout: document.getElementById('bookCheckout').value,
	    guests: document.getElementById('bookGuests').value,
	    rooms: document.getElementById('bookRooms').value
	  };
	  localStorage.setItem('avantaBooking', JSON.stringify(b));
	  window.location.href = 'rooms.html';
	}

	// Reels carousel
	let currentReel = 1;
	const reelData = [0, 1, 2, 3];
	function slideReels(dir) {
	  const phones = document.querySelectorAll('.reel-phone');
	  currentReel += dir;
	  if (currentReel < 1) currentReel = 1;
	  if (currentReel > reelData.length - 2) currentReel = reelData.length - 2;
	  phones.forEach(p => {
	    const idx = parseInt(p.dataset.reel);
	    p.style.display = 'none';
	    p.classList.remove('center', 'side');
	  });
	  // Show 3: current-1, current, current+1
	  const show = [currentReel - 1, currentReel, currentReel + 1];
	  show.forEach(i => {
	    const p = document.querySelector('[data-reel="' + i + '"]');
	    if (p) {
	      p.style.display = 'block';
	      if (i === currentReel) p.classList.add('center');
	      else p.classList.add('side');
	    }
	  });
	}
</script>

		<?php wp_footer(); ?>
	</body>
</html>
