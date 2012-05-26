<?php
/*
Plugin Name: Udinra-Adsense-Alternatives
Plugin URI: http://udinra.com/blog/udinra-adsense-alternatives-plugin-for-wordpress
Description: Simple plugin for in image advertising networks,In text advertising network,Mobile Advertising networks and Dynamic Oxygen advertising network.
Version: 1.2
Author: Udinra
Author URI: http://udinra.com
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
if(!isset($_POST['udinra_ads_alt_mobile'])){
$_POST['udinra_ads_alt_mobile'] = "";
}
if(!isset($_POST['udinra_ads_alt_dynamic'])){
$_POST['udinra_ads_alt_dynamic'] = "";
}
if(!isset($_POST['udinra_inimage_admin_flag'])){
$_POST['udinra_inimage_admin_flag'] = "";
}
if(!isset($_POST['udinra_intext_admin_flag'])){
$_POST['udinra_intext_admin_flag'] = "";
}
if(!isset($_POST['udinra_dyn_admin_flag'])){
$_POST['udinra_dyn_admin_flag'] = "";
}
if(!isset($_POST['udinra_mobile_admin_flag'])){
$_POST['udinra_mobile_admin_flag'] = "";
}

if($_POST['udinra_ads_alt_update']){
update_option('udinra_ads_alt_inimage',$_POST['udinra_ads_alt_inimage']);
update_option('udinra_ads_alt_intext',$_POST['udinra_ads_alt_intext']);
update_option('udinra_ads_alt_dynamic',$_POST['udinra_ads_alt_dynamic']);
update_option('udinra_ads_alt_mobile',$_POST['udinra_ads_alt_mobile']);
update_option('udinra_inimage_admin_flag',$_POST['udinra_inimage_admin_flag']);
update_option('udinra_intext_admin_flag',$_POST['udinra_intext_admin_flag']);
update_option('udinra_dyn_admin_flag',$_POST['udinra_dyn_admin_flag']);
update_option('udinra_mobile_admin_flag',$_POST['udinra_mobile_admin_flag']);

}
$wp_udinra_ads_alt_inimage    = get_option('udinra_ads_alt_inimage');
$wp_udinra_ads_alt_intext     = get_option('udinra_ads_alt_intext');
$wp_udinra_ads_alt_dynamic    = get_option('udinra_ads_alt_dynamic');
$wp_udinra_ads_alt_mobile    = get_option('udinra_ads_alt_mobile');
$wp_udinra_intext_admin_flag  = get_option('udinra_intext_admin_flag');
$wp_udinra_inimage_admin_flag = get_option('udinra_inimage_admin_flag');
$wp_udinra_dyn_admin_flag     = get_option('udinra_dyn_admin_flag');
$wp_udinra_mobile_admin_flag     = get_option('udinra_mobile_admin_flag');
?>
<div class="wrap">
<h2>Udinra Adsense Alternatives (Configuration)</h2>
<form method="post" id="UdinraAA_OPT">
<fieldset class="options">
<table><tr><td>Paste code from <b><a href="http://udinra.com/blog/list-of-in-image-advertising-networks" title="Know more about In Image Advertising networks">In Image advertising networks</a></b></td>
<td><textarea rows="3" columns="300" id="udinra_ads_alt_inimage" name="udinra_ads_alt_inimage" ><?php echo stripslashes($wp_udinra_ads_alt_inimage); ?></textarea></td><td><input type="checkbox" id="udinra_inimage_admin_flag" name="udinra_inimage_admin_flag" value="udinra_inimage_admin_flag" <?php if($wp_udinra_inimage_admin_flag == true) { echo('checked="checked"'); } ?> />Disable Logged in Users</td></tr>
<tr><td>Paste code from <b><a href="http://udinra.com/blog/list-of-in-text-advertising-networks" title="Know more about In Text Advertising networks">In Text advertising networks</b></a></td>
<td><textarea id="udinra_ads_alt_intext" name="udinra_ads_alt_intext" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_intext); ?></textarea></td><td><input type="checkbox" id="udinra_intext_admin_flag" name="udinra_intext_admin_flag" value="udinra_intext_admin_flag" <?php if($wp_udinra_intext_admin_flag == true) { echo('checked="checked"'); } ?> />Disable Logged in Users</td></tr>
<tr><td>Paste code from <b><a href="https://pub.dynamicoxygen.com/signup.jsp?ref=6117" title="Signup for Dynamic Oxygen">Dynamic Oxygen</a></b></td>
<td><textarea id="udinra_ads_alt_dynamic" name="udinra_ads_alt_dynamic" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_dynamic); ?></textarea></td><td><input type="checkbox" id="udinra_dyn_admin_flag" name="udinra_dyn_admin_flag" value="udinra_dyn_admin_flag" <?php if($wp_udinra_dyn_admin_flag == true) { echo('checked="checked"'); } ?> />Disable Logged in Users</td></tr>
<tr><td>Paste code from <b><a href="http://udinra.com/blog/mobile-advertising-network-list" title="Know more about Mobile Advertising networks">Mobile advertising networks</a></b></td>
<td><textarea id="udinra_ads_alt_mobile" name="udinra_ads_alt_mobile" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_mobile); ?></textarea></td><td><input type="checkbox" id="udinra_mobile_admin_flag" name="udinra_mobile_admin_flag" value="udinra_mobile_admin_flag" <?php if($wp_udinra_mobile_admin_flag == true) { echo('checked="checked"'); } ?> />Disable Logged in Users</td></tr>
<tr><td><em>If you have a minute, please <a href="http://wordpress.org/extend/plugins/udinra-adsense-alternatives/" target="_blank">rate this plugin</a> on WordPress.org... thanks!</em></td></tr>
<tr><td><input type="submit" name="udinra_ads_alt_update" value="Update" /></td></tr></table>
</fieldset>
</form>
<br>
<h3>Join Me on</h3>
<p>
<a 
href="https://plus.google.com/116123732887797372587?rel=author"  title="Esha on Google plus"><b>Google Plus</b></a><br />
<a 
href="http://www.facebook.com/eshaaupadhyay"  title="Esha on Facebook"><b>Facebook</b></a><br />
<a 
href="https://twitter.com/Udinra"  title="Esha on Twitter"><b>Twitter</b></a><br />
<a 
href="https://digg.com/udinra"  title="Esha on Digg"><b>Digg</b></a>
<br  />
<a 
href="https://stumbleupon.com/stumbler/udinra"  title="Esha on StumbleUpon"><b>StumbleUpon</b></a>
</p>
<p>Is the plugin helping you then Donate a small share.</p>
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
<p>Recent Tweets</p>
<p>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 5,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('Udinra').start();
</script>
</p>
</div>
<?php
}

function udinra_ads_alt_footer() {
$wp_udinra_ads_alt_inimage = get_option('udinra_ads_alt_inimage');
$wp_udinra_ads_alt_intext  = get_option('udinra_ads_alt_intext');
$wp_udinra_ads_alt_dynamic = get_option('udinra_ads_alt_dynamic');
$wp_udinra_ads_alt_mobile  = get_option('udinra_ads_alt_mobile');
$wp_udinra_intext_admin_flag     = get_option('udinra_intext_admin_flag');
$wp_udinra_inimage_admin_flag    = get_option('udinra_inimage_admin_flag');
$wp_udinra_dyn_admin_flag        = get_option('udinra_dyn_admin_flag');
$wp_udinra_mobile_admin_flag     = get_option('udinra_mobile_admin_flag');

if(!empty($wp_udinra_ads_alt_mobile) && trim($wp_udinra_ads_alt_mobile) !== '') {
	$wp_udinra_desktop_mobile_agent = udinra_detect_user_agent();
}

if($wp_udinra_desktop_mobile_agent == false) {
	if($wp_udinra_intext_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			echo stripslashes($wp_udinra_ads_alt_intext);
		}}
	else {
		echo stripslashes($wp_udinra_ads_alt_intext);
	}
}

if($wp_udinra_desktop_mobile_agent == false) {
	if($wp_udinra_inimage_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			echo stripslashes($wp_udinra_ads_alt_inimage);
		}}
	else {
		echo stripslashes($wp_udinra_ads_alt_inimage);
	}
}

if($wp_udinra_desktop_mobile_agent == false) {
	if($wp_udinra_dyn_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			echo stripslashes($wp_udinra_ads_alt_dynamic);
		}}
	else {
		echo stripslashes($wp_udinra_ads_alt_dynamic);
	}
}

if($wp_udinra_desktop_mobile_agent == true) {
	if($wp_udinra_mobile_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			echo stripslashes($wp_udinra_ads_alt_mobile);
		}}
	else {
		echo stripslashes($wp_udinra_ads_alt_mobile);
	}
}
}

function udinra_detect_user_agent() {
	 $udinra_user_agent      = strtolower($_SERVER['HTTP_USER_AGENT']);
	 $udinra_user_agent_list = explode(',', "elaine/3.0,iphone,ipod,palm,eudoraweb,blazer,avantgo,windows ce,cellphone,small,mmef20,danger,hiptop,proxinet,newt,palmos,netfront,sharp-tq-gx10,sonyericsson,symbianos,up.browser,up.link,ts21i-10,mot-v,portalmmm,docomo,opera mini,palm,handspring,nokia,kyocera,samsung,motorola,mot,smartphone,blackberry,wap,playstation portable,lg,mmp,opwv,symbian,epoc");
	foreach ($udinra_user_agent_list as $udinra_user_agent_member) {
	        if (strpos($udinra_user_agent, $udinra_user_agent_member) !== false) {
			return true;
		}
	}
	return false;
}

function udinra_ads_alt_admin() {
if (function_exists('add_options_page')) {
add_options_page('Udinra Adsense Alternatives', 'Udinra Adsense Alternatives', 'manage_options', basename(__FILE__), 'UdinraAA_OPT');
}
}

add_action('wp_footer','udinra_ads_alt_footer');
add_action('admin_menu','udinra_ads_alt_admin');

?>
