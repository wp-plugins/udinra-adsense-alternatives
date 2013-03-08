<?php
/*
Plugin Name: Udinra-Adsense-Alternatives
Plugin URI: http://udinra.com/blog/udinra-adsense-alternatives-plugin-for-wordpress
Description: Simple plugin for in image advertising networks,In text advertising network,Mobile Advertising networks and Dynamic Oxygen,Adbull advertising network.
Version: 1.4
Author: Udinra
Author URI: http://udinra.com
*/

function UdinraAA_OPT() {

/*-------------------------- Ad code section start--------------------- */
if(!isset($_POST['udinra_ads_alt_update'])){
$_POST['udinra_ads_alt_update'] = "";
}
if(!isset($_POST['udinra_ads_alt_inimage1'])){
$_POST['udinra_ads_alt_inimage1'] = "";
}
if(!isset($_POST['udinra_ads_alt_intext1'])){
$_POST['udinra_ads_alt_intext1'] = "";
}
if(!isset($_POST['udinra_ads_alt_mobile1'])){
$_POST['udinra_ads_alt_mobile1'] = "";
}
if(!isset($_POST['udinra_ads_alt_dynamic1'])){
$_POST['udinra_ads_alt_dynamic1'] = "";
}
if(!isset($_POST['udinra_ads_alt_inimage2'])){
$_POST['udinra_ads_alt_inimage2'] = "";
}
if(!isset($_POST['udinra_ads_alt_intext2'])){
$_POST['udinra_ads_alt_intext2'] = "";
}
if(!isset($_POST['udinra_ads_alt_mobile2'])){
$_POST['udinra_ads_alt_mobile2'] = "";
}
if(!isset($_POST['udinra_ads_alt_dynamic2'])){
$_POST['udinra_ads_alt_dynamic2'] = "";
}
/*-------------------------- start admin flag--------------------- */
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
/*-------------------------- start home flag--------------------- */
if(!isset($_POST['udinra_inimage_home_flag'])){
$_POST['udinra_inimage_home_flag'] = "";
}
if(!isset($_POST['udinra_intext_home_flag'])){
$_POST['udinra_intext_home_flag'] = "";
}
if(!isset($_POST['udinra_dyn_home_flag'])){
$_POST['udinra_dyn_home_flag'] = "";
}
if(!isset($_POST['udinra_mobile_home_flag'])){
$_POST['udinra_mobile_home_flag'] = "";
}
/*-------------------------- start page flag--------------------- */
if(!isset($_POST['udinra_inimage_page_flag'])){
$_POST['udinra_inimage_page_flag'] = "";
}
if(!isset($_POST['udinra_intext_page_flag'])){
$_POST['udinra_intext_page_flag'] = "";
}
if(!isset($_POST['udinra_dyn_page_flag'])){
$_POST['udinra_dyn_page_flag'] = "";
}
if(!isset($_POST['udinra_mobile_page_flag'])){
$_POST['udinra_mobile_page_flag'] = "";
}
/*-------------------------- start 404 flag--------------------- */
if(!isset($_POST['udinra_inimage_404_flag'])){
$_POST['udinra_inimage_404_flag'] = "";
}
if(!isset($_POST['udinra_intext_404_flag'])){
$_POST['udinra_intext_404_flag'] = "";
}
if(!isset($_POST['udinra_dyn_404_flag'])){
$_POST['udinra_dyn_404_flag'] = "";
}
if(!isset($_POST['udinra_mobile_404_flag'])){
$_POST['udinra_mobile_404_flag'] = "";
}

/*-------------------------- start archive flag--------------------- */
if(!isset($_POST['udinra_inimage_arc_flag'])){
$_POST['udinra_inimage_arc_flag'] = "";
}
if(!isset($_POST['udinra_intext_arc_flag'])){
$_POST['udinra_intext_arc_flag'] = "";
}
if(!isset($_POST['udinra_dyn_arc_flag'])){
$_POST['udinra_dyn_arc_flag'] = "";
}
if(!isset($_POST['udinra_mobile_arc_flag'])){
$_POST['udinra_mobile_arc_flag'] = "";
}
/*-------------------------- start search flag--------------------- */
if(!isset($_POST['udinra_inimage_srch_flag'])){
$_POST['udinra_inimage_srch_flag'] = "";
}
if(!isset($_POST['udinra_intext_srch_flag'])){
$_POST['udinra_intext_srch_flag'] = "";
}
if(!isset($_POST['udinra_dyn_srch_flag'])){
$_POST['udinra_dyn_srch_flag'] = "";
}
if(!isset($_POST['udinra_mobile_srch_flag'])){
$_POST['udinra_mobile_srch_flag'] = "";
}
/*-------------------------- start author flag--------------------- */
if(!isset($_POST['udinra_inimage_auth_flag'])){
$_POST['udinra_inimage_auth_flag'] = "";
}
if(!isset($_POST['udinra_intext_auth_flag'])){
$_POST['udinra_intext_auth_flag'] = "";
}
if(!isset($_POST['udinra_dyn_auth_flag'])){
$_POST['udinra_dyn_auth_flag'] = "";
}
if(!isset($_POST['udinra_mobile_auth_flag'])){
$_POST['udinra_mobile_auth_flag'] = "";
}
/*-------------------------- start checking--------------------- */
if($_POST['udinra_ads_alt_update']){
update_option('udinra_ads_alt_inimage1',$_POST['udinra_ads_alt_inimage1']);
update_option('udinra_ads_alt_intext1',$_POST['udinra_ads_alt_intext1']);
update_option('udinra_ads_alt_dynamic1',$_POST['udinra_ads_alt_dynamic1']);
update_option('udinra_ads_alt_mobile1',$_POST['udinra_ads_alt_mobile1']);
update_option('udinra_ads_alt_inimage2',$_POST['udinra_ads_alt_inimage2']);
update_option('udinra_ads_alt_intext2',$_POST['udinra_ads_alt_intext2']);
update_option('udinra_ads_alt_dynamic2',$_POST['udinra_ads_alt_dynamic2']);
update_option('udinra_ads_alt_mobile2',$_POST['udinra_ads_alt_mobile2']);

update_option('udinra_inimage_admin_flag',$_POST['udinra_inimage_admin_flag']);
update_option('udinra_intext_admin_flag',$_POST['udinra_intext_admin_flag']);
update_option('udinra_dyn_admin_flag',$_POST['udinra_dyn_admin_flag']);
update_option('udinra_mobile_admin_flag',$_POST['udinra_mobile_admin_flag']);

update_option('udinra_inimage_home_flag',$_POST['udinra_inimage_home_flag']);
update_option('udinra_intext_home_flag',$_POST['udinra_intext_home_flag']);
update_option('udinra_dyn_home_flag',$_POST['udinra_dyn_home_flag']);
update_option('udinra_mobile_home_flag',$_POST['udinra_mobile_home_flag']);

update_option('udinra_inimage_page_flag',$_POST['udinra_inimage_page_flag']);
update_option('udinra_intext_page_flag',$_POST['udinra_intext_page_flag']);
update_option('udinra_dyn_page_flag',$_POST['udinra_dyn_page_flag']);
update_option('udinra_mobile_page_flag',$_POST['udinra_mobile_page_flag']);

update_option('udinra_inimage_404_flag',$_POST['udinra_inimage_404_flag']);
update_option('udinra_intext_404_flag',$_POST['udinra_intext_404_flag']);
update_option('udinra_dyn_404_flag',$_POST['udinra_dyn_404_flag']);
update_option('udinra_mobile_404_flag',$_POST['udinra_mobile_404_flag']);

update_option('udinra_inimage_arc_flag',$_POST['udinra_inimage_arc_flag']);
update_option('udinra_intext_arc_flag',$_POST['udinra_intext_arc_flag']);
update_option('udinra_dyn_arc_flag',$_POST['udinra_dyn_arc_flag']);
update_option('udinra_mobile_arc_flag',$_POST['udinra_mobile_arc_flag']);

update_option('udinra_inimage_srch_flag',$_POST['udinra_inimage_srch_flag']);
update_option('udinra_intext_srch_flag',$_POST['udinra_intext_srch_flag']);
update_option('udinra_dyn_srch_flag',$_POST['udinra_dyn_srch_flag']);
update_option('udinra_mobile_srch_flag',$_POST['udinra_mobile_srch_flag']);

update_option('udinra_inimage_auth_flag',$_POST['udinra_inimage_auth_flag']);
update_option('udinra_intext_auth_flag',$_POST['udinra_intext_auth_flag']);
update_option('udinra_dyn_auth_flag',$_POST['udinra_dyn_auth_flag']);
update_option('udinra_mobile_auth_flag',$_POST['udinra_mobile_auth_flag']);
}

$wp_udinra_ads_alt_inimage1    = get_option('udinra_ads_alt_inimage1');
$wp_udinra_ads_alt_intext1     = get_option('udinra_ads_alt_intext1');
$wp_udinra_ads_alt_dynamic1    = get_option('udinra_ads_alt_dynamic1');
$wp_udinra_ads_alt_mobile1     = get_option('udinra_ads_alt_mobile1');
$wp_udinra_ads_alt_inimage2    = get_option('udinra_ads_alt_inimage2');
$wp_udinra_ads_alt_intext2     = get_option('udinra_ads_alt_intext2');
$wp_udinra_ads_alt_dynamic2    = get_option('udinra_ads_alt_dynamic2');
$wp_udinra_ads_alt_mobile2     = get_option('udinra_ads_alt_mobile2');

$wp_udinra_intext_admin_flag  = get_option('udinra_intext_admin_flag');
$wp_udinra_inimage_admin_flag = get_option('udinra_inimage_admin_flag');
$wp_udinra_dyn_admin_flag     = get_option('udinra_dyn_admin_flag');
$wp_udinra_mobile_admin_flag     = get_option('udinra_mobile_admin_flag');

$wp_udinra_intext_home_flag  = get_option('udinra_intext_home_flag');
$wp_udinra_inimage_home_flag = get_option('udinra_inimage_home_flag');
$wp_udinra_dyn_home_flag     = get_option('udinra_dyn_home_flag');
$wp_udinra_mobile_home_flag     = get_option('udinra_mobile_home_flag');

$wp_udinra_intext_page_flag  = get_option('udinra_intext_page_flag');
$wp_udinra_inimage_page_flag = get_option('udinra_inimage_page_flag');
$wp_udinra_dyn_page_flag     = get_option('udinra_dyn_page_flag');
$wp_udinra_mobile_page_flag     = get_option('udinra_mobile_page_flag');

$wp_udinra_intext_404_flag  = get_option('udinra_intext_404_flag');
$wp_udinra_inimage_404_flag = get_option('udinra_inimage_404_flag');
$wp_udinra_dyn_404_flag     = get_option('udinra_dyn_404_flag');
$wp_udinra_mobile_404_flag     = get_option('udinra_mobile_404_flag');

$wp_udinra_intext_arc_flag  = get_option('udinra_intext_arc_flag');
$wp_udinra_inimage_arc_flag = get_option('udinra_inimage_arc_flag');
$wp_udinra_dyn_arc_flag     = get_option('udinra_dyn_arc_flag');
$wp_udinra_mobile_arc_flag     = get_option('udinra_mobile_arc_flag');

$wp_udinra_intext_srch_flag  = get_option('udinra_intext_srch_flag');
$wp_udinra_inimage_srch_flag = get_option('udinra_inimage_srch_flag');
$wp_udinra_dyn_srch_flag     = get_option('udinra_dyn_srch_flag');
$wp_udinra_mobile_srch_flag     = get_option('udinra_mobile_srch_flag');

$wp_udinra_intext_auth_flag  = get_option('udinra_intext_auth_flag');
$wp_udinra_inimage_auth_flag = get_option('udinra_inimage_auth_flag');
$wp_udinra_dyn_auth_flag     = get_option('udinra_dyn_auth_flag');
$wp_udinra_mobile_auth_flag     = get_option('udinra_mobile_auth_flag');

?>
<div class="wrap">
<h2>Udinra Adsense Alternatives (Configuration)</h2>
<form method="post" id="UdinraAA_OPT">
<fieldset class="options">
<table width="100%">
	<thead><tr>
		<th width="20%">Advertising Network Type</th>
		<th width="20%">Paste Code 1</th>
		<th width="20%">Paste Code 2</th>
		<th width="40%">Check to disable</th>
	</tr></thead>
	<tbody><tr>
		<td width="20%"><a href="http://udinra.com/blog/list-of-in-image-advertising-networks" title="Know more about In Image Advertising networks">In Image advertising networks</a></td>
		<td width="20%"><textarea rows="3" columns="300" id="udinra_ads_alt_inimage1" name="udinra_ads_alt_inimage1" ><?php echo stripslashes($wp_udinra_ads_alt_inimage1); ?></textarea></td>
		<td width="20%"><textarea rows="3" columns="300" id="udinra_ads_alt_inimage2" name="udinra_ads_alt_inimage2" ><?php echo stripslashes($wp_udinra_ads_alt_inimage2); ?></textarea></td>
		<td width="40%">
			<table><tr>
				<td><input type="checkbox" id="udinra_inimage_admin_flag" name="udinra_inimage_admin_flag" value="udinra_inimage_admin_flag" <?php if($wp_udinra_inimage_admin_flag == true) { echo('checked="checked"'); } ?> />Logged Users</td>
				<td><input type="checkbox" id="udinra_inimage_home_flag" name="udinra_inimage_home_flag" value="udinra_inimage_home_flag" <?php if($wp_udinra_inimage_home_flag == true) { echo('checked="checked"'); } ?> />Home Page</td>
				<td><input type="checkbox" id="udinra_inimage_page_flag" name="udinra_inimage_page_flag" value="udinra_inimage_page_flag" <?php if($wp_udinra_inimage_page_flag == true) { echo('checked="checked"'); } ?> />All Pages</td>
				<td><input type="checkbox" id="udinra_inimage_404_flag" name="udinra_inimage_404_flag" value="udinra_inimage_404_flag" <?php if($wp_udinra_inimage_404_flag == true) { echo('checked="checked"'); } ?> />404 Pages</td>
				<td><input type="checkbox" id="udinra_inimage_arc_flag" name="udinra_inimage_arc_flag" value="udinra_inimage_arc_flag" <?php if($wp_udinra_inimage_arc_flag == true) { echo('checked="checked"'); } ?> />Archives Pages</td>
				<td><input type="checkbox" id="udinra_inimage_srch_flag" name="udinra_inimage_srch_flag" value="udinra_inimage_srch_flag" <?php if($wp_udinra_inimage_srch_flag == true) { echo('checked="checked"'); } ?> />Search Pages</td>
				<td><input type="checkbox" id="udinra_inimage_auth_flag" name="udinra_inimage_auth_flag" value="udinra_inimage_auth_flag" <?php if($wp_udinra_inimage_auth_flag == true) { echo('checked="checked"'); } ?> />Author Pages</td>
			</tr></table></td>
	</tr><tr>
		<td width="20%"><a href="http://udinra.com/blog/list-of-in-text-advertising-networks" title="Know more about In Text Advertising networks">In Text advertising networks</a></td>
		<td width="20%"><textarea id="udinra_ads_alt_intext1" name="udinra_ads_alt_intext1" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_intext1); ?></textarea></td>
		<td width="20%"><textarea id="udinra_ads_alt_intext2" name="udinra_ads_alt_intext2" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_intext2); ?></textarea></td>
		<td width="40%">
			<table><tr>
				<td><input type="checkbox" id="udinra_intext_admin_flag" name="udinra_intext_admin_flag" 
value="udinra_intext_admin_flag" <?php if($wp_udinra_intext_admin_flag == true) { echo('checked="checked"'); } ?> />Logged Users</td>
				<td><input type="checkbox" id="udinra_intext_home_flag" name="udinra_intext_home_flag" value="udinra_intext_home_flag" <?php if($wp_udinra_intext_home_flag == true) { echo('checked="checked"'); } ?> />Home page</td>
				<td><input type="checkbox" id="udinra_intext_page_flag" name="udinra_intext_page_flag" value="udinra_intext_page_flag" <?php if($wp_udinra_intext_page_flag == true) { echo('checked="checked"'); } ?> />All Pages</td>
				<td><input type="checkbox" id="udinra_intext_404_flag" name="udinra_intext_404_flag" value="udinra_intext_404_flag" <?php if($wp_udinra_intext_404_flag == true) { echo('checked="checked"'); } ?> />404 Pages</td>
				<td><input type="checkbox" id="udinra_intext_arc_flag" name="udinra_intext_arc_flag" value="udinra_intext_arc_flag" <?php if($wp_udinra_intext_arc_flag == true) { echo('checked="checked"'); } ?> />Archives Pages</td>
				<td><input type="checkbox" id="udinra_intext_srch_flag" name="udinra_intext_srch_flag" value="udinra_intext_srch_flag" <?php if($wp_udinra_intext_srch_flag == true) { echo('checked="checked"'); } ?> />Search Pages</td>
				<td><input type="checkbox" id="udinra_intext_auth_flag" name="udinra_intext_auth_flag" value="udinra_intext_auth_flag" <?php if($wp_udinra_intext_auth_flag == true) { echo('checked="checked"'); } ?> />Author Pages</td>
			</tr></table></td>
	</tr><tr>
	<td width="20%"><a href="http://udinra.com/blog/should-i-use-dynamic-oxygen-ads" title="Should I use Dynamic Oxygen">Dynamic Oxygen</a><br />
				<a href="http://udinra.com/blog/is-adbull-scam" title="Should I use Adbull">Adbull</a></td>
		<td width="20%"><textarea id="udinra_ads_alt_dynamic1" name="udinra_ads_alt_dynamic1" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_dynamic1); ?></textarea></td>
		<td width="20%"><textarea id="udinra_ads_alt_dynamic2" name="udinra_ads_alt_dynamic2" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_dynamic2); ?></textarea></td>
		<td width="40%">
			<table><tr>
				<td><input type="checkbox" id="udinra_dyn_admin_flag" name="udinra_dyn_admin_flag" 
value="udinra_dyn_admin_flag" <?php if($wp_udinra_dyn_admin_flag == true) { echo('checked="checked"'); } ?> />Logged Users</td>
				<td><input type="checkbox" id="udinra_dyn_home_flag" name="udinra_dyn_home_flag" value="udinra_dyn_home_flag" <?php if($wp_udinra_dyn_home_flag == true) { echo('checked="checked"'); } ?> />Home Page</td>
				<td><input type="checkbox" id="udinra_dyn_page_flag" name="udinra_dyn_page_flag" value="udinra_dyn_page_flag" <?php if($wp_udinra_dyn_page_flag == true) { echo('checked="checked"'); } ?> />All Pages</td>
				<td><input type="checkbox" id="udinra_dyn_404_flag" name="udinra_dyn_404_flag" value="udinra_dyn_404_flag" <?php if($wp_udinra_dyn_404_flag == true) { echo('checked="checked"'); } ?> />404 Pages</td>
				<td><input type="checkbox" id="udinra_dyn_arc_flag" name="udinra_dyn_arc_flag" value="udinra_dyn_arc_flag" <?php if($wp_udinra_dyn_arc_flag == true) { echo('checked="checked"'); } ?> />Archive Pages</td>
				<td><input type="checkbox" id="udinra_dyn_srch_flag" name="udinra_dyn_srch_flag" value="udinra_dyn_srch_flag" <?php if($wp_udinra_dyn_srch_flag == true) { echo('checked="checked"'); } ?> />Search Pages</td>
				<td><input type="checkbox" id="udinra_dyn_auth_flag" name="udinra_dyn_auth_flag" value="udinra_dyn_auth_flag" <?php if($wp_udinra_dyn_auth_flag == true) { echo('checked="checked"'); } ?> />Author Pages</td>
			</tr></table></td>
	</tr><tr>
	</tr><tr>
		<td width="20%"><a href="http://udinra.com/blog/mobile-advertising-network-list" title="Know more about Mobile Advertising networks">Mobile advertising networks</a></td>
		<td width="20%"><textarea id="udinra_ads_alt_mobile1" name="udinra_ads_alt_mobile1" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_mobile1); ?></textarea></td>
		<td width="20%"><textarea id="udinra_ads_alt_mobile2" name="udinra_ads_alt_mobile2" rows="3" columns="300" ><?php echo stripslashes($wp_udinra_ads_alt_mobile2); ?></textarea></td>
		<td width="40%">
			<table><tr>
				<td><input type="checkbox" id="udinra_mobile_admin_flag" name="udinra_mobile_admin_flag" 
value="udinra_mobile_admin_flag" <?php if($wp_udinra_mobile_admin_flag == true) { echo('checked="checked"'); } ?> />Logged Users</td>
				<td><input type="checkbox" id="udinra_mobile_home_flag" name="udinra_mobile_home_flag" value="udinra_mobile_home_flag" <?php if($wp_udinra_mobile_home_flag == true) { echo('checked="checked"'); } ?> />Home Page</td>
				<td><input type="checkbox" id="udinra_mobile_page_flag" name="udinra_mobile_page_flag" value="udinra_mobile_page_flag" <?php if($wp_udinra_mobile_page_flag == true) { echo('checked="checked"'); } ?> />All Pages</td>
				<td><input type="checkbox" id="udinra_mobile_404_flag" name="udinra_mobile_404_flag" value="udinra_mobile_404_flag" <?php if($wp_udinra_mobile_404_flag == true) { echo('checked="checked"'); } ?> />404 Pages</td>
				<td><input type="checkbox" id="udinra_mobile_arc_flag" name="udinra_mobile_arc_flag" value="udinra_mobile_arc_flag" <?php if($wp_udinra_mobile_arc_flag == true) { echo('checked="checked"'); } ?> />Archive Pages</td>
				<td><input type="checkbox" id="udinra_mobile_srch_flag" name="udinra_mobile_srch_flag" value="udinra_mobile_srch_flag" <?php if($wp_udinra_mobile_srch_flag == true) { echo('checked="checked"'); } ?> />Search Pages</td>
				<td><input type="checkbox" id="udinra_mobile_auth_flag" name="udinra_mobile_auth_flag" value="udinra_mobile_auth_flag" <?php if($wp_udinra_mobile_auth_flag == true) { echo('checked="checked"'); } ?> />Author Pages</td>
			</tr></table></td>
	</tr>
<tr><td><input type="submit" name="udinra_ads_alt_update" value="Update" /></td></tr></table>
</fieldset>
</form>
<p><em>If you have a minute, please <a href="http://wordpress.org/extend/plugins/udinra-adsense-alternatives/" target="_blank">rate this plugin</a> on WordPress.org... thanks!</p>
<table><tr><td>
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
</td><td>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=238475612916304";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="http://www.facebook.com/udinra" data-width="250" data-show-faces="false" data-stream="false" data-header="false"></div>
</td><td>
<div class="fb-follow" data-href="https://www.facebook.com/eshaaupadhyay" data-show-faces="false" data-width="250"></div>
</td></tr>
</table>
</div>
<?php
}
function udinra_ads_alt_footer() {
$wp_udinra_ads_alt_inimage1    = get_option('udinra_ads_alt_inimage1');
$wp_udinra_ads_alt_intext1     = get_option('udinra_ads_alt_intext1');
$wp_udinra_ads_alt_dynamic1    = get_option('udinra_ads_alt_dynamic1');
$wp_udinra_ads_alt_mobile1     = get_option('udinra_ads_alt_mobile1');
$wp_udinra_ads_alt_inimage2    = get_option('udinra_ads_alt_inimage2');
$wp_udinra_ads_alt_intext2     = get_option('udinra_ads_alt_intext2');
$wp_udinra_ads_alt_dynamic2    = get_option('udinra_ads_alt_dynamic2');
$wp_udinra_ads_alt_mobile2     = get_option('udinra_ads_alt_mobile2');

$wp_udinra_intext_admin_flag  = get_option('udinra_intext_admin_flag');
$wp_udinra_inimage_admin_flag = get_option('udinra_inimage_admin_flag');
$wp_udinra_dyn_admin_flag     = get_option('udinra_dyn_admin_flag');
$wp_udinra_mobile_admin_flag     = get_option('udinra_mobile_admin_flag');

$wp_udinra_intext_home_flag  = get_option('udinra_intext_home_flag');
$wp_udinra_inimage_home_flag = get_option('udinra_inimage_home_flag');
$wp_udinra_dyn_home_flag     = get_option('udinra_dyn_home_flag');
$wp_udinra_mobile_home_flag     = get_option('udinra_mobile_home_flag');

$wp_udinra_intext_page_flag  = get_option('udinra_intext_page_flag');
$wp_udinra_inimage_page_flag = get_option('udinra_inimage_page_flag');
$wp_udinra_dyn_page_flag     = get_option('udinra_dyn_page_flag');
$wp_udinra_mobile_page_flag  = get_option('udinra_mobile_page_flag');

$wp_udinra_intext_404_flag  = get_option('udinra_intext_404_flag');
$wp_udinra_inimage_404_flag = get_option('udinra_inimage_404_flag');
$wp_udinra_dyn_404_flag     = get_option('udinra_dyn_404_flag');
$wp_udinra_mobile_404_flag     = get_option('udinra_mobile_404_flag');

$wp_udinra_intext_arc_flag  = get_option('udinra_intext_arc_flag');
$wp_udinra_inimage_arc_flag = get_option('udinra_inimage_arc_flag');
$wp_udinra_dyn_arc_flag     = get_option('udinra_dyn_arc_flag');
$wp_udinra_mobile_arc_flag     = get_option('udinra_mobile_arc_flag');

$wp_udinra_intext_srch_flag  = get_option('udinra_intext_srch_flag');
$wp_udinra_inimage_srch_flag = get_option('udinra_inimage_srch_flag');
$wp_udinra_dyn_srch_flag     = get_option('udinra_dyn_srch_flag');
$wp_udinra_mobile_srch_flag     = get_option('udinra_mobile_srch_flag');

$wp_udinra_intext_auth_flag  = get_option('udinra_intext_auth_flag');
$wp_udinra_inimage_auth_flag = get_option('udinra_inimage_auth_flag');
$wp_udinra_dyn_auth_flag     = get_option('udinra_dyn_auth_flag');
$wp_udinra_mobile_auth_flag     = get_option('udinra_mobile_auth_flag');
$udinra_random_number = rand(0, 1);

/*-------------------------- check for mobile user agent -------------------- */
if(!empty($wp_udinra_ads_alt_mobile1) && trim($wp_udinra_ads_alt_mobile1) !== '' && !empty($wp_udinra_ads_alt_mobile2) && trim($wp_udinra_ads_alt_mobile2) !== '') {
	$wp_udinra_desktop_mobile_agent = udinra_detect_user_agent();
}

if(empty($wp_udinra_ads_alt_inimage2) && trim($wp_udinra_ads_alt_inimage2) == '') {
	$wp_udinra_ads_alt_inimage2 = $wp_udinra_ads_alt_inimage1;
}

if(empty($wp_udinra_ads_alt_intext2) && trim($wp_udinra_ads_alt_intext2) == '') {
	$wp_udinra_ads_alt_intext2 = $wp_udinra_ads_alt_intext1;
}

if(empty($wp_udinra_ads_alt_dynamic2) && trim($wp_udinra_ads_alt_dynamic2) == '') {
	$wp_udinra_ads_alt_dynamic2 = $wp_udinra_ads_alt_dynamic1;
}

if(empty($wp_udinra_ads_alt_mobile2) && trim($wp_udinra_ads_alt_mobile2) == '') {
	$wp_udinra_ads_alt_mobile2 = $wp_udinra_ads_alt_mobile1;
}

if($wp_udinra_desktop_mobile_agent == false) {
	if($wp_udinra_intext_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {
			if(($wp_udinra_intext_home_flag == true && is_home()) ||	
			   ($wp_udinra_intext_page_flag == true && is_page()) ||
			   ($wp_udinra_intext_404_flag == true && is_404()) ||
			   ($wp_udinra_intext_arc_flag == true && is_archive()) ||
			   ($wp_udinra_intext_srch_flag == true && is_search()) ||
			   ($wp_udinra_intext_auth_flag == true && is_author())) { }
			else {	
			if ($udinra_random_number) {
				echo stripslashes($wp_udinra_ads_alt_intext1); }
			else {echo stripslashes($wp_udinra_ads_alt_intext2); }
		}}}
	else {
		if(($wp_udinra_intext_home_flag == true && is_home()) ||	
		   ($wp_udinra_intext_page_flag == true && is_page()) ||
		   ($wp_udinra_intext_404_flag == true && is_404()) ||
		   ($wp_udinra_intext_arc_flag == true && is_archive()) ||
		   ($wp_udinra_intext_srch_flag == true && is_search()) ||
		   ($wp_udinra_intext_auth_flag == true && is_author())) { }
		else {	
			if ($udinra_random_number) {
				echo stripslashes($wp_udinra_ads_alt_intext1); }
			else {echo stripslashes($wp_udinra_ads_alt_intext2); }
		 }
	}
}

if($wp_udinra_desktop_mobile_agent == false) {
	if($wp_udinra_inimage_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			if(($wp_udinra_inimage_home_flag == true && is_home()) ||	
			   ($wp_udinra_inimage_page_flag == true && is_page()) ||
			   ($wp_udinra_inimage_404_flag == true && is_404()) ||
			   ($wp_udinra_inimage_arc_flag == true && is_archive()) ||
			   ($wp_udinra_inimage_srch_flag == true && is_search()) ||
			   ($wp_udinra_inimage_auth_flag == true && is_author())) { }
			else {	
				if ($udinra_random_number) {
					echo stripslashes($wp_udinra_ads_alt_inimage1); }
				else {echo stripslashes($wp_udinra_ads_alt_inimage2); }
		}}}
	else {
		if(($wp_udinra_inimage_home_flag == true && is_home()) ||	
		   ($wp_udinra_inimage_page_flag == true && is_page()) ||
		   ($wp_udinra_inimage_404_flag == true && is_404()) ||
		   ($wp_udinra_inimage_arc_flag == true && is_archive()) ||
		   ($wp_udinra_inimage_srch_flag == true && is_search()) ||
		   ($wp_udinra_inimage_auth_flag == true && is_author())) { }
		else {	
			if ($udinra_random_number) {
					echo stripslashes($wp_udinra_ads_alt_inimage1); }
				else {echo stripslashes($wp_udinra_ads_alt_inimage2); }
		}
	}
}

if($wp_udinra_desktop_mobile_agent == false) {
	if($wp_udinra_dyn_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			if(($wp_udinra_dyn_home_flag == true && is_home()) ||	
			   ($wp_udinra_dyn_page_flag == true && is_page()) ||
			   ($wp_udinra_dyn_404_flag == true && is_404()) ||
			   ($wp_udinra_dyn_arc_flag == true && is_archive()) ||
			   ($wp_udinra_dyn_srch_flag == true && is_search()) ||
			   ($wp_udinra_dyn_auth_flag == true && is_author())) { }
			else {	
				if ($udinra_random_number) {
					echo stripslashes($wp_udinra_ads_alt_dynamic1); }
				else {echo stripslashes($wp_udinra_ads_alt_dynamic2); }
		}}}
	else {
		if(($wp_udinra_dyn_home_flag == true && is_home()) ||	
			   ($wp_udinra_dyn_page_flag == true && is_page()) ||
			   ($wp_udinra_dyn_404_flag == true && is_404()) ||
			   ($wp_udinra_dyn_arc_flag == true && is_archive()) ||
			   ($wp_udinra_dyn_srch_flag == true && is_search()) ||
			   ($wp_udinra_dyn_auth_flag == true && is_author())) { }
			else {	
				if ($udinra_random_number) {
					echo stripslashes($wp_udinra_ads_alt_dynamic1); }
				else {echo stripslashes($wp_udinra_ads_alt_dynamic2); }
		}
	}
}

if($wp_udinra_desktop_mobile_agent == true) {
	if($wp_udinra_mobile_admin_flag == true) {
		if ( is_user_logged_in() ) { }
		else {	
			if(($wp_udinra_mobile_home_flag == true && is_home()) ||	
			   ($wp_udinra_mobile_page_flag == true && is_page()) ||
			   ($wp_udinra_mobile_404_flag == true && is_404()) ||
			   ($wp_udinra_mobile_arc_flag == true && is_archive()) ||
			   ($wp_udinra_mobile_srch_flag == true && is_search()) ||
			   ($wp_udinra_mobile_auth_flag == true && is_author())) { }
			else {	
				if ($udinra_random_number) {
					echo stripslashes($wp_udinra_ads_alt_mobile1); }
				else {echo stripslashes($wp_udinra_ads_alt_mobile2); }
		}}}
	else {
			if(($wp_udinra_mobile_home_flag == true && is_home()) ||	
			   ($wp_udinra_mobile_page_flag == true && is_page()) ||
			   ($wp_udinra_mobile_404_flag == true && is_404()) ||
			   ($wp_udinra_mobile_arc_flag == true && is_archive()) ||
			   ($wp_udinra_mobile_srch_flag == true && is_search()) ||
			   ($wp_udinra_mobile_auth_flag == true && is_author())) { }
			else {	
				if ($udinra_random_number) {
					echo stripslashes($wp_udinra_ads_alt_mobile1); }
				else {echo stripslashes($wp_udinra_ads_alt_mobile2); }
			 }
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
