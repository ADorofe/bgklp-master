  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <title>УО "БГКЛП им. В.Е. Чернышева"</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url') ?>/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap&subset=cyrillic" rel="stylesheet">
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


        <div class="preloader">
            <div class="lds-ripple"><div></div><div></div></div>
        </div>

    	<div class="overlay js-overlay"></div>

    	<header class="header">
    		<!-- TOP LINE -->

    		<div class="top-line">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col">
    						<ul class="top-contacts">
    							<li class="d-none d-md-inline-block">
    								<a href="https://yandex.by/maps/21015/baranavichy/?ll=26.016200%2C53.133251&mode=usermaps&source=constructorLink&um=constructor%3A0807e2b59532f91c83c248c6152f6fb92d5b77198c9eb2848d856ee3f1643fa3&z=17"  class="top-contacts__link-social" target="_blank">
    									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    									viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
    										<path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021C426.667,76.563,350.104,0,256,0zM256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/>
    									</svg>
    									<span class="d-none d-md-inline-block">Барановичи ул. Советская 67</span>
    								</a>
    							</li>
    							<li class="d-none d-md-inline-block">
    								<a href="tel:+375163647142"  class="top-contacts__link-social">
    									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    									viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
    									<path d="M462.491,468.206l-33.938,33.937c-6.062,6.031-23.812,9.844-24.343,9.844c-107.435,0.905-210.869-41.279-286.882-117.31C41.097,318.46-1.136,214.619,0.036,106.872c0-0.063,3.891-17.312,9.938-23.312l33.937-33.968c12.453-12.437,36.295-18.062,52.998-12.5l7.156,2.406c16.703,5.562,34.155,23.999,38.78,40.967l17.093,62.717c4.64,17-1.594,41.186-14.031,53.623l-22.687,22.687c22.25,82.467,86.919,147.121,169.339,169.402l22.687-22.688c12.438-12.438,36.687-18.656,53.687-14.031l62.718,17.125c16.937,4.594,35.374,22.03,40.968,38.748l2.375,7.156C480.552,431.926,474.928,455.769,462.491,468.206z M287.996,255.993h31.999c0-35.343-28.655-63.998-63.998-63.998v31.999C273.636,223.994,287.996,238.368,287.996,255.993z M415.992,255.993c0-88.373-71.623-159.996-159.995-159.996v32c70.591,0,127.996,57.436,127.996,127.996H415.992z M255.997,0v31.999c123.496,0,223.993,100.497,223.993,223.994h31.999C511.989,114.622,397.368,0,255.997,0z"/>

    								</svg>
    								<span class="d-none d-md-inline-block">8-(0163) 64-71-42</span>
    							</a>
    						</li>
    						<li class="d-none d-md-inline-block">
    							<a href="mailto:bgklp@bgklp.by"  class="top-contacts__link-social">
    								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" enable-background="new 0 0 612 612" xml:space="preserve">
    									<path d="M306.768,346.814h0.131c4.615,0,9.176-1.339,12.866-3.777l1.001-0.643c0.218-0.142,0.446-0.271,0.675-0.424l11.658-9.645l278.259-229.624c-0.576-0.795-1.557-1.339-2.602-1.339H3.233c-0.751,0-1.448,0.272-2.003,0.729l291.125,239.954C296.024,345.083,301.259,346.814,306.768,346.814z M0,133.899v340.37l208.55-168.471L0,133.899zM403.668,306.941L612,474.356V135.031L403.668,306.941z M337.431,361.585c-8.305,6.814-19.168,10.57-30.576,10.57c-11.451,0-22.304-3.734-30.587-10.516l-47.765-39.394L0,506.806v0.587c0,1.753,1.502,3.244,3.276,3.244h605.491c1.741,0,3.232-1.491,3.232-3.255v-0.544L383.693,323.4L337.431,361.585z"/>
    								</svg>
    								<span class="d-none d-md-inline-block jusify-content-end">bgklp@bgklp.by</span>
    							</a>
    						</li>
							<li>
							<!-- GTranslate: https://gtranslate.io/ -->
							<a href="#" class="switcher-popup glink nturl notranslate" onclick="openGTPopup(this)" style="padding: 7px 5px;display: inline-block;">
								<img src="//bgklp.by/wp-content/plugins/gtranslate/flags/24/ru.png" height="20" width="20" alt="ru" /> 
								<span>Русский</span><span style="color:#fff;font-size:8px;font-weight:bold;">&#9660;</span>
							</a>
							<div id="gt_fade" class="gt_black_overlay"></div>
							<div id="gt_lightbox" class="gt_white_content notranslate">
								<div style="position:relative;height:25px;"><span onclick="closeGTPopup()" style="position:absolute;right:2px;top:2px;font-weight:bold;font-size:14px;cursor:pointer;color:#444;font-family:cursive;">X</span></div>
								<div class="gt_languages">
									<a href="#" onclick="changeGTLanguage('ru|ru', this);return false;" title="Русский" class="glink nturl selected">
									<img data-gt-lazy-src="//bgklp.by/wp-content/plugins/gtranslate/flags/24/ru.png" height="24" width="24" alt="ru" /> 
									<span>Русский</span>
									</a>
									<a href="#" onclick="changeGTLanguage('ru|be', this);return false;" title="Белорусский" class="glink nturl">
									<img data-gt-lazy-src="//bgklp.by/wp-content/plugins/gtranslate/flags/24/be.png" height="24" width="24" alt="be" /> 
									<span>Белорусский</span>
									</a>
									<a href="#" onclick="changeGTLanguage('ru|en', this);return false;" title="English" class="glink nturl">
									<img data-gt-lazy-src="//bgklp.by/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="en" /> 
									<span>English</span></a>
								</div>
							</div>
							<style type="text/css">
							a.switcher-popup span {color: #fff;}
							@media (max-width: 960px){
								a.switcher-popup span{display:none;}
							}
							a.switcher-popup:hover {text-decoration: none;}
							.gt_black_overlay {display:none;position:fixed;top:0%;left:0%;width:100%;height:100%;background: rgba(13, 136, 191, 0.79);z-index:2017;-moz-opacity:1;opacity:1;filter:alpha(opacity=100);}
							.gt_white_content {display:none;position:fixed;top:50%;left:50%;width:341px;height:150px;margin:-75px 0 0 -170.5px;padding:6px 16px;border-radius:5px;background-color:white;color:black;z-index:19881205;overflow:auto;text-align:left;}
							.gt_white_content a {display:block;padding:5px 0;border-bottom:1px solid #e7e7e7;white-space:nowrap;}
							.gt_white_content a:last-of-type {border-bottom:none;}
							.gt_white_content a.selected {background-color:#ffc;}
							.gt_white_content .gt_languages {column-count:1;column-gap:10px;}
							.gt_white_content::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 3px rgba(0,0,0,0.3);border-radius:5px;background-color:#F5F5F5;}
							.gt_white_content::-webkit-scrollbar {width:5px;}
							.gt_white_content::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);background-color:#888;}
							</style>

							<script type="text/javascript">
							function openGTPopup(a) {jQuery('.gt_white_content a img').each(function() {if(!jQuery(this)[0].hasAttribute('src'))jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src'))});if(a === undefined){document.getElementById('gt_lightbox').style.display='block';document.getElementById('gt_fade').style.display='block';}else{jQuery(a).parent().find('#gt_lightbox').css('display', 'block');jQuery(a).parent().find('#gt_fade').css('display', 'block');}}
							function closeGTPopup() {jQuery('.gt_white_content').css('display', 'none');jQuery('.gt_black_overlay').css('display', 'none');}
							function changeGTLanguage(pair, a) {doGTranslate(pair);jQuery('a.switcher-popup').html(jQuery(a).html()+'<span style="color:#666;font-size:8px;font-weight:bold;">&#9660;</span>');closeGTPopup();}
							jQuery('.gt_black_overlay').click(function(e) {if(jQuery('.gt_white_content').is(':visible')) {closeGTPopup()}});
							</script>
							<style type="text/css">
							#goog-gt-tt {display:none !important;}
							.goog-te-banner-frame {display:none !important;}
							.goog-te-menu-value:hover {text-decoration:none !important;}
							.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
							body {top:0 !important;}
							#google_translate_element2 {display:none!important;}
							</style>

							<div id="google_translate_element2"></div>
							<script type="text/javascript">
							function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ru',autoDisplay: false}, 'google_translate_element2');}
							</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


							<script type="text/javascript">
							function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
							function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
							function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
							if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {var lang_html = jQuery(".gt_languages a[onclick*='|"+GTranslateGetCurrentLang()+"']").html();if(typeof lang_html != "undefined")jQuery('a.switcher-popup').html(lang_html.replace("data-gt-lazy-", "")+'<span style="color:#666;font-size:8px;font-weight:bold;">&#9660;</span>');});
							</script>

							</li>
							<li>
								<a href="#" class="bvi-link-shortcode bvi-open">
									<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="bvi-svg-eye"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
									<span class="hidden-mobile"> Версия для слабовидящих</span>
								</a>
							</li>
    					</ul>
    				</div>
    				<div class="col col-lg-auto d-none d-lg-flex justify-content-end">
    					<ul class="top-contacts">
							<li>
    							<a href="https://t.me/bgklp_live" class="top-contacts__link-social">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" style="height: 20px;width: 20px;">
										<path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z"></path>
									</svg>
    							</a>
    						</li>
    						<li>
    							<a href="https://vk.com/brsmbgklp" class="top-contacts__link-social" target="_blank">
    								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
    									<path d="M440.649,295.361c16.984,16.582,34.909,32.182,50.142,50.436
    									c6.729,8.112,13.099,16.482,17.973,25.896c6.906,13.382,0.651,28.108-11.348,28.907l-74.59-0.034c-19.238,1.596-34.585-6.148-47.489-19.302c-10.327-10.519-19.891-21.714-29.821-32.588c-4.071-4.444-8.332-8.626-13.422-11.932c-10.182-6.609-19.021-4.586-24.84,6.034c-5.926,10.802-7.271,22.762-7.853,34.8c-0.799,17.564-6.108,22.182-23.751,22.986c-37.705,1.778-73.489-3.926-106.732-22.947c-29.308-16.768-52.034-40.441-71.816-67.24C58.589,258.194,29.094,200.852,2.586,141.904c-5.967-13.281-1.603-20.41,13.051-20.663c24.333-0.473,48.663-0.439,73.025-0.034c9.89,0.145,16.437,5.817,20.256,15.16c13.165,32.371,29.274,63.169,49.494,91.716c5.385,7.6,10.876,15.201,18.694,20.55c8.65,5.923,15.236,3.96,19.305-5.676c2.582-6.11,3.713-12.691,4.295-19.234c1.928-22.513,2.182-44.988-1.199-67.422c-2.076-14.001-9.962-23.065-23.933-25.714c-7.129-1.351-6.068-4.004-2.616-8.073c5.995-7.018,11.634-11.387,22.875-11.387h84.298c13.271,2.619,16.218,8.581,18.035,21.934l0.072,93.637c-0.145,5.169,2.582,20.51,11.893,23.931c7.452,2.436,12.364-3.526,16.836-8.251c20.183-21.421,34.588-46.737,47.457-72.951c5.711-11.527,10.622-23.497,15.381-35.458c3.526-8.875,9.059-13.242,19.056-13.049l81.132,0.072c2.406,0,4.84,0.035,7.17,0.434c13.671,2.33,17.418,8.211,13.195,21.561c-6.653,20.945-19.598,38.4-32.255,55.935c-13.53,18.721-28.001,36.802-41.418,55.634C424.357,271.756,425.336,280.424,440.649,295.361L440.649,295.361z"/>
    								</svg>
    							</a>
    						</li>
    						<li>
    							<a href="https://www.youtube.com/channel/UChHDCwW0QADtU4I-ErM5F2A/featured" class="top-contacts__link-social"  target="_blank">
    								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 461.001 461.001" enable-background="new 0 0 461.001 461.001" xml:space="preserve">
    									<path d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"/>
    								</svg>
    							</a>
    						</li>
    						<li>
    							<a href="https://www.instagram.com/bgklp_baranovichi/" class="top-contacts__link-social" target="_blank">
    								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
    									<path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"/>
    									<path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z"/>
    									<circle cx="393.6" cy="118.4" r="17.056"/>
    								</svg>
    							</a>
    						</li>
    					</ul>
    				</div>
					
    			</div>

    		</div>
    	</div>
    <!-- END TOP LINE -->

    <!-- MOBILE MENU -->

    <nav class="mobile-nav">
        <span class="open-mobile-menu js-open-mobile-menu">Меню</span>
    </nav>

    <!-- END MOBILE MENU -->


    <nav id="top-menu" class="top-nav">
        <div class="top-nav__header">
            <a href="http://bgklp.by" class="top-nav__logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 115" class="logo">
                    <ellipse class="logo__circle" cx="59" cy="57.5" rx="58.5" ry="57"/>
                    <path class="logo__square" d="M3.5,42.5h21v34H3.5Zm90,34h21v-34h-21Zm-54-29h-4v8h4Zm0,15h-4v8h4Zm17-15h-4v8h4Zm9,0h-4v8h4Zm0,15h-13v17h13Zm3.5-19H49v36H69Zm19.5,0h-16v36h16Zm-6,4h-4v8h4Zm0,15h-4v8h4Zm-62-15h-4v8h4Zm-9,0h-4v8h4Zm9,15h-4v8h4Zm-9,0h-4v8h4Zm99-15h-4v8h4Zm-9,0h-4v8h4Zm9,15h-4v8h4Zm-9,0h-4v8h4Zm-8-25L97,34,59,15,21,34l3.5,3.5m69,0h-69v42h69Zm-48,6h-16v36h16ZM21,79.5H97M15.5,82v3M22,80.5H19m1,1H17m1,1H15m87.5-.5v3M96,80.5h3m2,1H98m2,1h3m-87.5,2h87"/>
                </svg>
                <span class="top-nav__caption">БГКЛП им. В.Е. Чернышева</span>
            </a>
        </div>
        <button type="button" class="top-nav__close js-close-mobile-menu"></button>
        <div class="top-nav__container">
            <div class="top-nav__row">

                <!--            -->
                <!-- MENU 1 LBL -->
                <!--            -->

                <div class="top-nav-menu clearfix">
                    <div class="folder-menu-header hidden-desk js-top-nav__back">
                        <div class="folder-menu-header__title">БГКЛП им. В.Е. Чернышева</div>
                    </div>
					<ul class="mobile-contacts d-lg-none">
						<li class="mobile-contacts__item d-md-none">
							<a href="https://yandex.by/maps/21015/baranavichy/?ll=26.016200%2C53.133251&mode=usermaps&source=constructorLink&um=constructor%3A0807e2b59532f91c83c248c6152f6fb92d5b77198c9eb2848d856ee3f1643fa3&z=17"  class="mobile-contacts__link" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021C426.667,76.563,350.104,0,256,0zM256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/>
								</svg>
							</a>
						</li>
						<li class="mobile-contacts__item d-md-none">
							<a href="tel:+375163647142"  class="mobile-contacts__link">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<path d="M462.491,468.206l-33.938,33.937c-6.062,6.031-23.812,9.844-24.343,9.844c-107.435,0.905-210.869-41.279-286.882-117.31C41.097,318.46-1.136,214.619,0.036,106.872c0-0.063,3.891-17.312,9.938-23.312l33.937-33.968c12.453-12.437,36.295-18.062,52.998-12.5l7.156,2.406c16.703,5.562,34.155,23.999,38.78,40.967l17.093,62.717c4.64,17-1.594,41.186-14.031,53.623l-22.687,22.687c22.25,82.467,86.919,147.121,169.339,169.402l22.687-22.688c12.438-12.438,36.687-18.656,53.687-14.031l62.718,17.125c16.937,4.594,35.374,22.03,40.968,38.748l2.375,7.156C480.552,431.926,474.928,455.769,462.491,468.206z M287.996,255.993h31.999c0-35.343-28.655-63.998-63.998-63.998v31.999C273.636,223.994,287.996,238.368,287.996,255.993z M415.992,255.993c0-88.373-71.623-159.996-159.995-159.996v32c70.591,0,127.996,57.436,127.996,127.996H415.992z M255.997,0v31.999c123.496,0,223.993,100.497,223.993,223.994h31.999C511.989,114.622,397.368,0,255.997,0z"/>

							</svg>
							</a>
						</li>
						<li class="mobile-contacts__item d-md-none">
							<a href="mailto:bgklp@bgklp.by"  class="mobile-contacts__link">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" enable-background="new 0 0 612 612" xml:space="preserve">
									<path d="M306.768,346.814h0.131c4.615,0,9.176-1.339,12.866-3.777l1.001-0.643c0.218-0.142,0.446-0.271,0.675-0.424l11.658-9.645l278.259-229.624c-0.576-0.795-1.557-1.339-2.602-1.339H3.233c-0.751,0-1.448,0.272-2.003,0.729l291.125,239.954C296.024,345.083,301.259,346.814,306.768,346.814z M0,133.899v340.37l208.55-168.471L0,133.899zM403.668,306.941L612,474.356V135.031L403.668,306.941z M337.431,361.585c-8.305,6.814-19.168,10.57-30.576,10.57c-11.451,0-22.304-3.734-30.587-10.516l-47.765-39.394L0,506.806v0.587c0,1.753,1.502,3.244,3.276,3.244h605.491c1.741,0,3.232-1.491,3.232-3.255v-0.544L383.693,323.4L337.431,361.585z"/>

								</svg>
							</a>
						</li>
						<li class="mobile-contacts__item">
							<a href="https://t.me/bgklp_live" class="mobile-contacts__link">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
									<path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z"></path>
								</svg>
							</a>
						</li>
						<li class="mobile-contacts__item">
							<a href="https://vk.com/brsmbgklp" class="mobile-contacts__link">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<path d="M440.649,295.361c16.984,16.582,34.909,32.182,50.142,50.436
									c6.729,8.112,13.099,16.482,17.973,25.896c6.906,13.382,0.651,28.108-11.348,28.907l-74.59-0.034c-19.238,1.596-34.585-6.148-47.489-19.302c-10.327-10.519-19.891-21.714-29.821-32.588c-4.071-4.444-8.332-8.626-13.422-11.932c-10.182-6.609-19.021-4.586-24.84,6.034c-5.926,10.802-7.271,22.762-7.853,34.8c-0.799,17.564-6.108,22.182-23.751,22.986c-37.705,1.778-73.489-3.926-106.732-22.947c-29.308-16.768-52.034-40.441-71.816-67.24C58.589,258.194,29.094,200.852,2.586,141.904c-5.967-13.281-1.603-20.41,13.051-20.663c24.333-0.473,48.663-0.439,73.025-0.034c9.89,0.145,16.437,5.817,20.256,15.16c13.165,32.371,29.274,63.169,49.494,91.716c5.385,7.6,10.876,15.201,18.694,20.55c8.65,5.923,15.236,3.96,19.305-5.676c2.582-6.11,3.713-12.691,4.295-19.234c1.928-22.513,2.182-44.988-1.199-67.422c-2.076-14.001-9.962-23.065-23.933-25.714c-7.129-1.351-6.068-4.004-2.616-8.073c5.995-7.018,11.634-11.387,22.875-11.387h84.298c13.271,2.619,16.218,8.581,18.035,21.934l0.072,93.637c-0.145,5.169,2.582,20.51,11.893,23.931c7.452,2.436,12.364-3.526,16.836-8.251c20.183-21.421,34.588-46.737,47.457-72.951c5.711-11.527,10.622-23.497,15.381-35.458c3.526-8.875,9.059-13.242,19.056-13.049l81.132,0.072c2.406,0,4.84,0.035,7.17,0.434c13.671,2.33,17.418,8.211,13.195,21.561c-6.653,20.945-19.598,38.4-32.255,55.935c-13.53,18.721-28.001,36.802-41.418,55.634C424.357,271.756,425.336,280.424,440.649,295.361L440.649,295.361z"/>
								</svg>
							</a>
						</li>
						<li class="mobile-contacts__item">
							<a href="https://www.youtube.com/channel/UChHDCwW0QADtU4I-ErM5F2A/featured" class="mobile-contacts__link">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 461.001 461.001" enable-background="new 0 0 461.001 461.001" xml:space="preserve">
									<path d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"/>
								</svg>
							</a>
						</li>
						<li class="mobile-contacts__item">
							<a href="https://www.instagram.com/bgklp_baranovichi/" class="mobile-contacts__link">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"/>
									<path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z"/>
									<circle cx="393.6" cy="118.4" r="17.056"/>
								</svg>
							</a>
						</li>
					</ul>

                    <?php
                        wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => false,
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'navbar-nav mr-auto',
                                'fallback_cb'     => '',
                                'items_wrap' => '%3$s',
                                'walker'          => new IBenic_Walker(),
                            ) );
                    ?>

                </div>

						
            </div>
        </div>
    </nav>

    </header>


  		<div id="main">
