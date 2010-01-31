<?php
/*
Plugin Name: flickr-slideshow-wrapper
Plugin URI: http://www.ramgad.com/board/topic/37-plugins-fssw-fpw-hfw/
Description: Including flickr slideshows. Call fssw by adding &lt;set&#95;id="XYZ"&gt; to your content. Please do not forget to replace XYZ by the set-id of the flickr-set you want to implement (<a href="htt://www.flickr.com" target="_blank">flickr.com</a>). With &lt;set&#95;tag="tag1, tag2, etc."&gt; your are able to compile your own tag-based set from flickr. Please refer to <a href="http://idgettr.com/" target="_blank">idgettr.com</a> to get the relevant information. You can as well implement a <a href="http://www.slideflickr.com" target="_blank">slideflickr.com</a> show by putting the slideflickr id into &lt;slidef="XYZ"&gt;. For your convenience you can as well use [set_id=XYZ] and/or [slidef=XYZ].
Version: 4.8.0
Author: Jeannot Muller
Author URI: http://www.ramgad.com/
Min WP Version: 2.5
Max WP Version: 2.9.1
*/

// Update routines
	if ('insert' == $HTTP_POST_VARS['action_fssw']) {
    	update_option("fssw_width",$HTTP_POST_VARS['fssw_width']);
    	update_option("fssw_height",$HTTP_POST_VARS['fssw_height']);
    	update_option("fssw_border",$HTTP_POST_VARS['fssw_border']);
    	update_option("fssw_scroll",$HTTP_POST_VARS['fssw_scroll']);
        update_option("fssw_sfli_w",$HTTP_POST_VARS['fssw_sfli_w']);
        update_option("fssw_sfli_h",$HTTP_POST_VARS['fssw_sfli_h']);
        update_option("fssw_userid",$HTTP_POST_VARS['fssw_userid']);
}

if (!class_exists('fssw_main')) {
    class fssw_main {
		/**
		* PHP 4 Compatible Constructor
		*/
		function fssw_main(){$this->__construct();}
		
		/**
		* PHP 5 Constructor
		*/		
		function __construct(){
			// Registrieren der WordPress-Hooks
			add_action('admin_menu', 'fssw_description_add_menu');
			add_filter('the_content', 'get_flickr_set_id');
		}
		// Registration of WordPress-Hooks
	}

function fssw_description_option_page() {
	?>

	<!-- Start Options Adminarea (xhtml) -->
	  <div class="wrap">
	    <h2>FSSW Options</h2>
		         <div style="margin-top:20px;">
		         <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>&amp;updated=true">
		                          <div style="">
						<table class="form-table">
						<tr><th scope="col" colspan="3" cellpadding="15">Settings</th></tr>
		                                <tr><th scope="row">Width: (flickr)</th><td>
		                    <input name="fssw_width" size="3" value="<?=get_option("fssw_width");?>" type="text" /><span style="color:red;">   Example: 450</span></td></tr>
						<tr><th scope="row">Height: (flickr)</th><td>
		                    <input name="fssw_height" size="3" value="<?=get_option("fssw_height");?>" type="text" /><span style="color:red;">   Example: 450</span></td></tr>
						<tr><th scope="row">Border: (flickr)</th><td>
			            <input name="fssw_border" size="3" value="<?=get_option("fssw_border");?>" type="text" /><span style="color:red;">   Example: 0</span></td></tr>
						<tr><th scope="row">Scrolling (yes|no): (flickr)</th><td>
				    <input name="fssw_scroll" size="3" value="<?=get_option("fssw_scroll");?>" type="text" /><span style="color:red;">   Example: no</span></td></tr>
                                                <tr><th scope="row">User-ID: (flickr)</th><td>
			            <input name="fssw_userid" size="15" value="<?=get_option("fssw_userid");?>" type="text" /><span style="color:red;">   Example: 12345678@A12</span> (please use <a href="http://www.slideflickr.com/" target="_blank">slideflickr.com</a> to retrieve your ID)</td></tr>
				                <tr><th scope="row">Width: (slideflickr)</th><td>
			            <input name="fssw_sfli_w" size="3" value="<?=get_option("fssw_sfli_w");?>" type="text" /><span style="color:red;">   Example: 450</span></td></tr>
                                                <tr><th scope="row">Height: (slideflickr)</th><td>
			            <input name="fssw_sfli_h" size="3" value="<?=get_option("fssw_sfli_h");?>" type="text" /><span style="color:red;">   Example: 450</span></td></tr>
</table>
	      <br>
	      <p class="submit_fssw"><input name="submit_fssw" type="submit" id="submit_fssw" value="Save changes &raquo;">
	     <input class="submit" name="action_fssw" value="insert": type="hidden" /></p>
	    </form>
	  </div>
	</div>
	<p style="text-align:justify;">Call your flickr-slideshow-wrapper by adding &lt;set_id="XYZ"&gt; to your content. Please do not forget to replace XYZ by the set-id of the flickr-set you want to implement (<a href="http://www.flickr.com" target="_blank">flickr.com</a>).</p>
	<p style="text-algin:justify;">With &lt;set&#95;tag="tag1, tag2, etc."&gt; your are able to compile your own tag-based set from flickr. You need to specify your flickr user-id under settings to get this feature look for tags in your library only. Please refer to <a href="http://idgettr.com/" target="_blank">idgettr.com</a> to get the relevant information.</p>
	<p style="text-algin:justify;">You can call as well a  <a href="http://www.slideflickr.com/" target="_blank">slideflickr.com</a> slideshow by putting the slideflickr id into &lt;slidef="XYZ"&gt;. Please be informed that slideflickr needs the same width and height values you defined during creation of your slideshow on their webpage - otherwise you'll see an endless loading bar.
	<p style="text-align:justify;">If you have problems with FSSW, please feel free to contact me: <a href="mailto:jeannot.muller@ramgad.com">jeannot.muller@ramgad.com</a></p>

<?php

} // Ende Funktion fssw_description_option_page()

// Adminmenu Optionen erweitern
function fssw_description_add_menu() {
      global $fssw_width, $fssw_height, $fssw_border, $fssw_scroll, $fssw_sfli_w, $fssw_sfli_h; $fssw_userid;
      add_options_page('FSSW', 'FSSW', 9, __FILE__, 'fssw_description_option_page'); //optionenseite hinzufügen
}

function get_flickr_set_id($content) {
		 $fssw_width   = get_option('fssw_width');
		 $fssw_height  = get_option('fssw_height');
		 $fssw_border  = get_option('fssw_border');
		 $fssw_scroll  = get_option('fssw_scroll');
		 $fssw_sfli_w  = get_option('fssw_sfli_w');
		 $fssw_sfli_h  = get_option('fssw_sfli_h');
		 $fssw_userid  = get_option('fssw_userid');

// standard initialisation (default values)	
		 if ( $fssw_width == null or $fssw_height == null) {
			$fssw_width  = "450";
		    $fssw_height = "450";		
		 }

	// parse and replace	 


                $content = preg_replace('/<set_id="([a-zA-Z0-9_]+)"\/?>/', '<iframe width="' . $fssw_width . '" height="' . $fssw_height . '" src="http://www.flickr.com/slideShow/index.gne?set_id=$1" frameBorder="' . $fssw_border . '" scrolling="' . $fssw_scroll . '"></iframe>', $content);


                $content = preg_replace('/\[set_id=([a-zA-Z0-9_]+)\]/', '<iframe width="' . $fssw_width . '" height="' . $fssw_height . '" src="http://www.flickr.com/slideShow/index.gne?set_id=$1" frameBorder="' . $fssw_border . '" scrolling="' . $fssw_scroll . '"></iframe>', $content);


                 $content = preg_replace('/<set_tag="(\w.+)"\/?>/', '<iframe width="' . $fssw_width . '" height="' . $fssw_height . '" src="http://www.flickr.com/slideShow/index.gne?user_id=' . $fssw_userid . '&tags=$1' . '" frameBorder="' . $fssw_border . '" scrolling="' . $fssw_scroll . '"></iframe>', $content);



                 $content = preg_replace('/<slidef="([a-zA-Z0-9_]+)"\/?>/', '<object width="' . $fssw_sfli_w . '" height="' . $fssw_sfli_h . '"><param name="movie" value="http://www.slideflickr.com/slide/$1"></param><param name="wmode" value="transparent"></param><embed src="http://www.slideflickr.com/slide/$1" type="application/x-shockwave-flash" wmode="transparent" width="' . $fssw_sfli_w . '" height="' . $fssw_sfli_h . '"></embed></object>', $content);


                 $content = preg_replace('/\[slidef=([a-zA-Z0-9_]+)\]/', '<object width="' . $fssw_sfli_w . '" height="' . $fssw_sfli_h . '"><param name="movie" value="http://www.slideflickr.com/slide/$1"></param><param name="wmode" value="transparent"></param><embed src="http://www.slideflickr.com/slide/$1" type="application/x-shockwave-flash" wmode="transparent" width="' . $fssw_sfli_w . '" height="' . $fssw_sfli_h . '"></embed></object>', $content);


return $content;
    }

}

//instantiate the class
if (class_exists('fssw_main')) {
	$fssw_main = new fssw_main();
}
?>
