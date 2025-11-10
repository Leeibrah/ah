<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html
	class="ie ie6" lang=en>
	<![endif]-->
	<!--[if IE 7 ]>
	<html
		class="ie ie7" lang=en>
		<![endif]-->
		<!--[if IE 8 ]>
		<html
			class="ie ie8" lang=en>
			<![endif]-->
			<!--[if (gte IE 9)|!(IE)]><!-->
			<html
				lang=en>
				<!--<![endif]-->
				
				@include('partials._head')


				<style>
				  body {
				    font-family: Arial, sans-serif;
				    background: #f8f9fa;
				    margin: 0;
				    padding: 0;
				  }

				  .gallery-container {
				    max-width: 1200px;
				    margin: 40px auto;
				    padding: 0 15px;
				  }

				  h2 {
				    text-align: center;
				    margin-bottom: 20px;
				    color: #333;
				  }

				  /* 4 images per row */
				  .gallery-grid {
				    display: grid;
				    grid-template-columns: repeat(4, 1fr);
				    gap: 15px;
				  }

				  /* Make it responsive */
				  @media (max-width: 992px) {
				    .gallery-grid {
				      grid-template-columns: repeat(3, 1fr);
				    }
				  }

				  @media (max-width: 768px) {
				    .gallery-grid {
				      grid-template-columns: repeat(2, 1fr);
				    }
				  }

				  @media (max-width: 480px) {
				    .gallery-grid {
				      grid-template-columns: 1fr;
				    }
				  }

				  .gallery-item {
				    overflow: hidden;
				    border-radius: 8px;
				    cursor: pointer;
				    position: relative;
				  }

				  .gallery-item img {
				    width: 100%;
				    height: 200px;
				    object-fit: cover;
				    transition: transform 0.3s ease;
				    border-radius: 8px;
				  }

				  .gallery-item:hover img {
				    transform: scale(1.05);
				  }

				  /* Lightbox */
				  .lightbox {
				    display: none;
				    position: fixed;
				    z-index: 1000;
				    left: 0;
				    top: 0;
				    width: 100%;
				    height: 100%;
				    overflow: hidden;
				    background-color: rgba(0, 0, 0, 0.9);
				  }

				  .lightbox.active {
				    display: flex;
				    justify-content: center;
				    align-items: center;
				  }

				  .lightbox img {
				    max-width: 90%;
				    max-height: 80%;
				    border-radius: 10px;
				  }

				  /* Controls */
				  .lightbox .prev,
				  .lightbox .next {
				    position: absolute;
				    top: 50%;
				    transform: translateY(-50%);
				    color: white;
				    font-size: 2.5rem;
				    background: rgba(0,0,0,0.3);
				    border: none;
				    padding: 10px 15px;
				    cursor: pointer;
				    border-radius: 5px;
				  }

				  .lightbox .prev:hover,
				  .lightbox .next:hover {
				    background: rgba(0,0,0,0.6);
				  }

				  .lightbox .prev { left: 20px; }
				  .lightbox .next { right: 20px; }

				  /* Close button */
				  .lightbox .close {
				    position: absolute;
				    top: 20px;
				    right: 30px;
				    color: white;
				    font-size: 2rem;
				    cursor: pointer;
				    background: rgba(0,0,0,0.3);
				    padding: 6px 12px;
				    border-radius: 5px;
				  }

				  .lightbox .close:hover {
				    background: rgba(0,0,0,0.6);
				  }

				  /* Thumbnails strip */
				  .thumbnails {
				    display: flex;
				    overflow-x: auto;
				    gap: 10px;
				    padding: 10px;
				    background: rgba(0,0,0,0.4);
				    border-radius: 10px;
				    width: 90%;
				    justify-content: flex-start;
				    scrollbar-width: thin;
				  }

				  .thumbnails::-webkit-scrollbar {
				    height: 8px;
				  }

				  .thumbnails::-webkit-scrollbar-thumb {
				    background: rgba(255,255,255,0.3);
				    border-radius: 4px;
				  }

				  .thumbnails img {
				    height: 80px;
				    border-radius: 6px;
				    cursor: pointer;
				    opacity: 0.6;
				    transition: opacity 0.3s, transform 0.3s;
				  }

				  .thumbnails img:hover {
				    opacity: 1;
				    transform: scale(1.05);
				  }

				  .thumbnails img.active-thumb {
				    opacity: 1;
				    border: 2px solid white;
				  }
				</style>
				
				<body
					class="post-template-default single single-post postid-63 single-format-standard">
					
					@include('partials._header')

					<!-- Elfsight WhatsApp Chat | Arrow Head Design & Printshop -->
			        <script src="https://elfsightcdn.com/platform.js" async></script>
			        <div class="elfsight-app-55060a7a-2d03-42b5-ac73-c54a9e489a1c" data-elfsight-app-lazy></div>

					<section
						id=slideshow_container>
						<div
							id=slideshow>
							<div
								id=slides>
								<section
									id=slide-1>
									<img
										width=1600 height=567 src="{{ $service_banner_image }}" class="attachment-original size-original wp-post-image" alt="{{ $service_tag }}" decoding=async fetchpriority=high>
									<h1>{{ $service_tag }}</h1>
									<p>
										{{ $service_description }}
									</p>
								</section>
							</div>
							
							@include('partials._number')

						</div>
						<!-- <a href=https://www.facebook.com/arrowheadprintshop target=_blank>
							<img data-src=https://www.signs-print.com/wp-content/themes/signs-print/images/layout/facebook-icon.png alt="facebook logo" id=facebook-logo src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" class=lazyload style="--smush-placeholder-width: 98px; --smush-placeholder-aspect-ratio: 98/100;">
						</a> -->
					</section>

			
				

					@yield('content')
        
        			@include("partials._bottom")
					
					@include('partials._footer')

					<script>
					  const images = document.querySelectorAll('.gallery-item img');
					  const lightbox = document.getElementById('lightbox');
					  const lightboxImg = document.getElementById('lightboxImg');
					  const closeBtn = document.getElementById('lightboxClose');
					  const nextBtn = document.getElementById('nextBtn');
					  const prevBtn = document.getElementById('prevBtn');

					  let currentIndex = 0;

					  function showImage(index) {
					    if (index < 0) index = images.length - 1;
					    if (index >= images.length) index = 0;
					    currentIndex = index;
					    lightboxImg.src = images[currentIndex].src;
					  }

					  images.forEach((img, index) => {
					    img.addEventListener('click', () => {
					      showImage(index);
					      lightbox.classList.add('active');
					    });
					  });

					  closeBtn.addEventListener('click', () => {
					    lightbox.classList.remove('active');
					  });

					  nextBtn.addEventListener('click', () => {
					    showImage(currentIndex + 1);
					  });

					  prevBtn.addEventListener('click', () => {
					    showImage(currentIndex - 1);
					  });

					  lightbox.addEventListener('click', (e) => {
					    if (e.target === lightbox) lightbox.classList.remove('active');
					  });

					  document.addEventListener('keydown', (e) => {
					    if (!lightbox.classList.contains('active')) return;
					    if (e.key === 'ArrowRight') showImage(currentIndex + 1);
					    if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
					    if (e.key === 'Escape') lightbox.classList.remove('active');
					  });
					</script>


					<script id=ngg_common-js-extra>/*<![CDATA[*/var galleries={};galleries.gallery_b2cb6e9aeab9d9b3bc36617b41a4c4b0={"__defaults_set":null,"ID":"b2cb6e9aeab9d9b3bc36617b41a4c4b0","album_ids":[],"container_ids":["4"],"display":"","display_settings":{"display_view":"default-view.php","images_per_page":"20","number_of_columns":0,"thumbnail_width":190,"thumbnail_height":143,"show_all_in_lightbox":0,"ajax_pagination":0,"use_imagebrowser_effect":0,"template":"","display_no_images_error":1,"disable_pagination":0,"show_slideshow_link":1,"slideshow_link_text":"[Show slideshow]","override_thumbnail_settings":0,"thumbnail_quality":"100","thumbnail_crop":1,"thumbnail_watermark":0,"ngg_triggers_display":"never","use_lightbox_effect":true,"is_ecommerce_enabled":false},"display_type":"photocrati-nextgen_basic_thumbnails","effect_code":null,"entity_ids":[],"excluded_container_ids":[],"exclusions":[],"gallery_ids":null,"id":"b2cb6e9aeab9d9b3bc36617b41a4c4b0","ids":null,"image_ids":[],"images_list_count":null,"inner_content":null,"is_album_gallery":null,"maximum_entity_count":700,"order_by":"imagedate","order_direction":"DESC","returns":"included","skip_excluding_globally_excluded_images":null,"slug":null,"sortorder":[],"source":"galleries","src":"","tag_ids":[],"tagcloud":false,"transient_id":null};galleries.gallery_b2cb6e9aeab9d9b3bc36617b41a4c4b0.wordpress_page_root="https:\/\/www.signs-print.com\/business-stationery\/";var nextgen_lightbox_settings={"static_path":"https:\/\/www.signs-print.com\/wp-content\/plugins\/nextgen-gallery\/static\/Lightbox\/{placeholder}","context":"nextgen_images"};var nextgen_lightbox_settings={"static_path":"https:\/\/www.signs-print.com\/wp-content\/plugins\/nextgen-gallery\/static\/Lightbox\/{placeholder}","context":"nextgen_images"};galleries.gallery_b2cb6e9aeab9d9b3bc36617b41a4c4b0.images_list=[{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/business-stationery\/printing01.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/business-stationery\/printing01.jpg"},"use_hdpi":false,"title":"printing01","description":" ","image_id":56,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/business-stationery\/thumbs\/thumbs_printing01.jpg","width":500,"height":667,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/business-stationery\/printing01.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/business-stationery\/printing01.jpg"},"thumb_dimensions":{"width":190,"height":143}}];galleries.gallery_b2cb6e9aeab9d9b3bc36617b41a4c4b0.images_list_limit="100";galleries.gallery_b2cb6e9aeab9d9b3bc36617b41a4c4b0.images_list_count=1;galleries.gallery_b2cb6e9aeab9d9b3bc36617b41a4c4b0.captions_enabled=false;galleries.gallery_b85bc709778666d8bed36c76b0a5a021={"__defaults_set":null,"ID":"b85bc709778666d8bed36c76b0a5a021","album_ids":[],"container_ids":[],"display":"","display_settings":{"display_view":"default-view.php","images_per_page":8,"number_of_columns":0,"thumbnail_width":190,"thumbnail_height":143,"show_all_in_lightbox":false,"ajax_pagination":0,"use_imagebrowser_effect":false,"template":"\/homepages\/17\/d290324610\/htdocs\/wp-content\/plugins\/nextgen-gallery\/templates\/Widget\/Display\/Gallery.php","display_no_images_error":1,"disable_pagination":true,"show_slideshow_link":false,"slideshow_link_text":"[Show slideshow]","override_thumbnail_settings":0,"thumbnail_quality":"100","thumbnail_crop":1,"thumbnail_watermark":0,"ngg_triggers_display":"never","use_lightbox_effect":true,"is_ecommerce_enabled":false,"maximum_entity_count":8,"image_type":"thumb","show_thumbnail_link":false,"image_width":100,"image_height":75,"widget_setting_title":"Recent Project Images","widget_setting_before_widget":"<section id=\"footer-widget\"><div class=\"hslice\" id=\"ngg-webslice\">","widget_setting_before_title":"<h4 class=\"entry-title widget-title\">","widget_setting_after_widget":"<\/div><\/section>","widget_setting_after_title":"<\/h4>","widget_setting_width":100,"widget_setting_height":75,"widget_setting_show_setting":"thumbnail","widget_setting_widget_id":"ngg-images-2"},"display_type":"photocrati-nextgen_basic_thumbnails","effect_code":null,"entity_ids":[],"excluded_container_ids":[],"exclusions":[],"gallery_ids":[],"id":"b85bc709778666d8bed36c76b0a5a021","ids":null,"image_ids":[],"images_list_count":null,"inner_content":null,"is_album_gallery":null,"maximum_entity_count":8,"order_by":"imagedate","order_direction":"DESC","returns":"included","skip_excluding_globally_excluded_images":null,"slug":"widget-ngg-images-2","sortorder":[],"source":"recent","src":"","tag_ids":[],"tagcloud":false,"transient_id":null};galleries.gallery_b85bc709778666d8bed36c76b0a5a021.wordpress_page_root="https:\/\/www.signs-print.com\/business-stationery\/";var nextgen_lightbox_settings={"static_path":"https:\/\/www.signs-print.com\/wp-content\/plugins\/nextgen-gallery\/static\/Lightbox\/{placeholder}","context":"nextgen_images"};var nextgen_lightbox_settings={"static_path":"https:\/\/www.signs-print.com\/wp-content\/plugins\/nextgen-gallery\/static\/Lightbox\/{placeholder}","context":"nextgen_images"};galleries.gallery_b85bc709778666d8bed36c76b0a5a021.images_list=[{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1394.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1394.jpg"},"use_hdpi":false,"title":"IMG_1394","description":"","image_id":616,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/thumbs\/thumbs_IMG_1394.jpg","width":1500,"height":1125,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1394.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1394.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1393.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1393.jpg"},"use_hdpi":false,"title":"IMG_1393","description":"","image_id":614,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/thumbs\/thumbs_IMG_1393.jpg","width":1500,"height":1125,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1393.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1393.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1392.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1392.jpg"},"use_hdpi":false,"title":"IMG_1392","description":"","image_id":615,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/thumbs\/thumbs_IMG_1392.jpg","width":1500,"height":1125,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1392.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1392.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1391.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1391.jpg"},"use_hdpi":false,"title":"IMG_1391","description":"","image_id":613,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/thumbs\/thumbs_IMG_1391.jpg","width":1500,"height":1125,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1391.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1391.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1388.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1388.jpg"},"use_hdpi":false,"title":"IMG_1388","description":"","image_id":612,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/thumbs\/thumbs_IMG_1388.jpg","width":1500,"height":1125,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1388.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/large-format-printing\/IMG_1388.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/vehicle-graphics-misc\/476ff5ac-c9bf-43bf-a058-15cdb573db55.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/vehicle-graphics-misc\/476ff5ac-c9bf-43bf-a058-15cdb573db55.jpg"},"use_hdpi":false,"title":"476ff5ac-c9bf-43bf-a058-15cdb573db55","description":"","image_id":601,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/vehicle-graphics-misc\/thumbs\/thumbs_476ff5ac-c9bf-43bf-a058-15cdb573db55.jpg","width":1600,"height":1200,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/vehicle-graphics-misc\/476ff5ac-c9bf-43bf-a058-15cdb573db55.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/vehicle-graphics-misc\/476ff5ac-c9bf-43bf-a058-15cdb573db55.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/a21ade35-ef44-4021-834c-3fb57ba79ec8.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/a21ade35-ef44-4021-834c-3fb57ba79ec8.jpg"},"use_hdpi":false,"title":"a21ade35-ef44-4021-834c-3fb57ba79ec8","description":"","image_id":544,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/thumbs\/thumbs_a21ade35-ef44-4021-834c-3fb57ba79ec8.jpg","width":1600,"height":1200,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/a21ade35-ef44-4021-834c-3fb57ba79ec8.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/a21ade35-ef44-4021-834c-3fb57ba79ec8.jpg"},"thumb_dimensions":{"width":190,"height":143}},{"image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/15a67ebb-6484-4f7f-a9bb-f669e741a4a7.jpg","srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/15a67ebb-6484-4f7f-a9bb-f669e741a4a7.jpg"},"use_hdpi":false,"title":"15a67ebb-6484-4f7f-a9bb-f669e741a4a7","description":"","image_id":545,"thumb":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/thumbs\/thumbs_15a67ebb-6484-4f7f-a9bb-f669e741a4a7.jpg","width":1984,"height":1488,"full_image":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/15a67ebb-6484-4f7f-a9bb-f669e741a4a7.jpg","full_use_hdpi":false,"full_srcsets":{"original":"https:\/\/www.signs-print.com\/wp-content\/gallery\/shop-front-signs\/15a67ebb-6484-4f7f-a9bb-f669e741a4a7.jpg"},"thumb_dimensions":{"width":190,"height":143}}];galleries.gallery_b85bc709778666d8bed36c76b0a5a021.images_list_limit="100";galleries.gallery_b85bc709778666d8bed36c76b0a5a021.images_list_count=8;galleries.gallery_b85bc709778666d8bed36c76b0a5a021.captions_enabled=false;/*]]>*/</script> <script src="https://www.signs-print.com/wp-content/plugins/nextgen-gallery/static/GalleryDisplay/common.js?ver=3.59.12" id=ngg_common-js></script> <script id=ngg_common-js-after>var nggLastTimeoutVal=1000;var nggRetryFailedImage=function(img){setTimeout(function(){img.src=img.src;},nggLastTimeoutVal);nggLastTimeoutVal+=500;}
						var nggLastTimeoutVal=1000;var nggRetryFailedImage=function(img){setTimeout(function(){img.src=img.src;},nggLastTimeoutVal);nggLastTimeoutVal+=500;}
						var nggLastTimeoutVal=1000;var nggRetryFailedImage=function(img){setTimeout(function(){img.src=img.src;},nggLastTimeoutVal);nggLastTimeoutVal+=500;}
						var nggLastTimeoutVal=1000;var nggRetryFailedImage=function(img){setTimeout(function(){img.src=img.src;},nggLastTimeoutVal);nggLastTimeoutVal+=500;}
					</script> <script id=ngg_lightbox_context-js-extra>var nplModalSettings={"style":"white","background_color":"#ffffff","sidebar_background_color":"","sidebar_button_color":"","sidebar_button_background":"","carousel_background_color":"","carousel_text_color":"#7a7a7a","overlay_icon_color":"","icon_color":"#ffffff","icon_background_enabled":"0","icon_background_rounded":"1","icon_background":"#444444","padding":"0","padding_unit":"px","image_crop":"false","image_pan":"0","enable_comments":"0","display_comments":"0","enable_sharing":"1","facebook_app_id":"","enable_twitter_cards":"0","twitter_username":"","display_carousel":"1","display_captions":"0","enable_carousel":"always","transition_effect":"fadeslide","transition_speed":"0.4","slideshow_speed":"5","interaction_pause":"1","enable_routing":"1","router_slug":"gallery","localize_limit":"100","touch_transition_effect":"slide","is_front_page":0,"share_url":"https:\/\/www.signs-print.com\/nextgen-share\/{gallery_id}\/{image_id}\/{named_size}","wp_site_url":"https:\/\/www.signs-print.com","protect_images":false,"i18n":{"toggle_social_sidebar":"Toggle social sidebar","play_pause":"Play \/ Pause","toggle_fullsize":"Toggle fullsize","toggle_image_info":"Toggle image info","close_window":"Close window","share":{"twitter":"Share on Twitter","facebook":"Share on Facebook","pinterest":"Share on Pinterest"}}};</script> <script src="https://www.signs-print.com/wp-content/plugins/nextgen-gallery/static/Lightbox/lightbox_context.js?ver=3.59.12" id=ngg_lightbox_context-js></script> <script src="https://www.signs-print.com/wp-includes/js/underscore.min.js?ver=1.13.4" id=underscore-js></script> <script src="https://www.signs-print.com/wp-content/plugins/nextgen-gallery-plus/modules/nextgen_pro_lightbox/static/parsesrcset.js?ver=3.59.12" id=photocrati-nextgen_pro_lightbox-1-js></script> <script src="https://www.signs-print.com/wp-content/plugins/nextgen-gallery-plus/modules/nextgen_pro_lightbox/static/nextgen_pro_lightbox.js?ver=3.59.12" id=photocrati-nextgen_pro_lightbox-3-js></script> <script src="https://www.signs-print.com/wp-content/plugins/nextgen-gallery-plus/modules/nextgen_pro_lightbox/static/theme/galleria.nextgen_pro_lightbox.js?ver=3.59.12" id=photocrati-nextgen_pro_lightbox-4-js></script> <script src="../wp-content/themes/signs-print/js/site.js%3Fver=2.0.6" id=scripts-js></script> <script src="https://www.google.com/recaptcha/api.js?render=6Lefb4IUAAAAAHp98F5_2nX7_z80oFw7lsDjhqHg&amp;ver=3.0" id=google-recaptcha-js></script> <script src="https://www.signs-print.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id=wp-polyfill-inert-js></script> <script src="https://www.signs-print.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id=regenerator-runtime-js></script> <script src="https://www.signs-print.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id=wp-polyfill-js></script> <script id=wpcf7-recaptcha-js-extra>var wpcf7_recaptcha={"sitekey":"6Lefb4IUAAAAAHp98F5_2nX7_z80oFw7lsDjhqHg","actions":{"homepage":"homepage","contactform":"contactform"}};</script> <script src="https://www.signs-print.com/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.9.8" id=wpcf7-recaptcha-js></script> <script id=smush-lazy-load-js-before>var smushLazyLoadOptions={"autoResizingEnabled":false,"autoResizeOptions":{"precision":5,"skipAutoWidth":true}};</script> <script src="https://www.signs-print.com/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js?ver=3.22.1" id=smush-lazy-load-js></script> <script src=https://use.typekit.net/wdl5ujv.js></script> <script>try{Typekit.load({async:true});}catch(e){}</script> 
				</body>
			</html>