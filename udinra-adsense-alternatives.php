<?php
/*
Plugin Name: Udinra-Adsense-Alternatives
Plugin URI: http://udinra.com/store/wordpress-plugins
Description: Simple plugin for in image advertising networks (Luminate,GumGum etc),In text advertising network (Infolinks,Kontera) and Dynamic Oxygen advertising network.
Version: 1.0
Author: Udinra
Author URI: http://udinra.com/
*/

function UdinraAA_OPT() {
if(!isset($_POST['udinra_ads_alt_update'])){
$_POST['udinra_ads_alt_update'] = "";
}
if(!isset($_POST['udinra_ads_alt_inimage'])){
$_POST['udinra_ads_alt_inimage'] = "";
}
if(!isset($_POST['udinra_ads_alt_intext'])){
$_POST['udinra_ads_alt_intext'] = "";
}
if(!isset($_POST['udinra_ads_alt_dynamic'])){
$_POST['udinra_ads_alt_dynamic'] = "";
}
if($_POST['udinra_ads_alt_update']){
update_option('udinra_ads_alt_inimage',$_POST['udinra_ads_alt_inimage']);
update_option('udinra_ads_alt_intext',$_POST['udinra_ads_alt_intext']);
update_option('udinra_ads_alt_dynamic',$_POST['udinra_ads_alt_dynamic']);
}
$wp_udinra_ads_alt_inimage = get_option('udinra_ads_alt_inimage');
$wp_udinra_ads_alt_intext  = get_option('udinra_ads_alt_intext');
$wp_udinra_ads_alt_dynamic = get_option('udinra_ads_alt_dynamic');
?>
<div class="wrap">
<h2>Udinra Adsense Alternatives (Configuration)</h2>
<form method="post" id="UdinraAA_OPT">
<fieldset class="options">
<p>Paste code from <b>In Image advertising networks</b> (like <a href="http://gumgum.com">GumGum</a>,<a href="http://luminate.com">Luminate</a>) in below box.</p>
<p><input type="textbox" id="udinra_ads_alt_inimage" name="udinra_ads_alt_inimage" /></p>
<p>Paste code from <b>In Text advertising networks</b> (like <a href="http://infolinks.com">Infolinks</a>,<a href="http://kontera.com">Kontera</a>) in below box.</p>
<p><input type="textbox" id="udinra_ads_alt_intext" name="udinra_ads_alt_intext"  /></p>
<p>Paste code from <a href="https://pub.dynamicoxygen.com/signup.jsp?ref=6117">Dynamic Oxygen</a> in below box.If you are not aware of this advertising network <a href="http://udinra.com/blog/should-i-use-dynamic-oxygen-ads">check this</a></p>
<p><input type="textbox" id="udinra_ads_alt_dynamic" name="udinra_ads_alt_dynamic"  /></p>

<p><em>If you have a minute, please <a href="http://wordpress.org/extend/plugins/udinra-adsense-alternatives/" target="_blank">rate this plugin</a> on WordPress.org... thanks!</em></p>
<p><input type="submit" name="udinra_ads_alt_update" value="Update" /></p>
</fieldset>
</form>
<br>
<h3>Suggestions?</h3>
<p>Please email your suggestions to <a href="http://udinra.com/contact-me">Udinra</a></p>
<p>Are You Making Money With Your Images then Donate Us a small share.</p>
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">  
 <input type="hidden" name="business" value="pitaji@udinra.com">  
 <input type="hidden" name="cmd" value="_donations">  
 <input type="hidden" name="item_name" value="udinra">  
 <input type="hidden" name="item_number" value="Udinra Image Sitemap plugin">  
 <input type="hidden" name="currency_code" value="USD">  
 <input type="image" name="submit" border="0" 
        src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif"  
        alt="PayPal - The safer, easier way to pay online">  
 <img alt="" border="0" width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" >  
</form>
</p>
</div>
<?php
}

function udinra_ads_alt_footer() {
$wp_udinra_ads_alt_inimage = get_option('udinra_ads_alt_inimage');
$wp_udinra_ads_alt_intext  = get_option('udinra_ads_alt_intext');
$wp_udinra_ads_alt_dynamic = get_option('udinra_ads_alt_dynamic');

echo stripslashes($wp_udinra_ads_alt_inimage);
echo stripslashes($wp_udinra_ads_alt_intext);
echo stripslashes($wp_udinra_ads_alt_indynamic);

}

function udinra_ads_alt_admin() {
if (function_exists('add_options_page')) {
add_options_page('Udinra Adsense Alternatives', 'Udinra Adsense Alternatives', 'manage_options', basename(__FILE__), 'UdinraAA_OPT');
}
}

add_action('wp_footer','udinra_ads_alt_footer');
add_action('admin_menu','udinra_ads_alt_admin');

?>
