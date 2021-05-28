<?php
/* 
//  require(DIR_WS_BOXES . 'search.php');
  
if ($_GET['layout_id'] != '') {

$layout = tep_random_select("select cats_left from " . TABLE_LAYOUT . " WHERE status = '1' and language_id = '".$languages_id."' and id = '".$_GET['layout_id']."' ");

}else{

$layout = tep_random_select("select cats_left from " . TABLE_LAYOUT . " WHERE status = '1' and language_id = '".$languages_id."' and template_folder = '".$layout_template_folder."' ");

}

if ($layout["cats_left"] != '') {
  
	if ($layout["cats_left"] == 'DropDown') {
	
	  if ((USE_CACHE == 'true') && empty($SID)) {
		echo tep_cache_categories_box();
	  } else {
		include(DIR_WS_BOXES . 'categories.php');
	  }
	
	}elseif ($layout["cats_left"] == 'FullBkg') {
	
		include(DIR_WS_BOXES . 'categories_full1.php');
	
	} else {
	
		include(DIR_WS_BOXES . 'categories_full.php');
	
	}

}else{

	if (USE_CATEGORIES_CHOOSE == 'DropDown') {
	
	  if ((USE_CACHE == 'true') && empty($SID)) {
		echo tep_cache_categories_box();
	  } else {
		include(DIR_WS_BOXES . 'categories.php');
	  }
	
	}elseif (USE_CATEGORIES_CHOOSE == 'FullBkg') {
	
		include(DIR_WS_BOXES . 'categories_full1.php');
	
	} else {
	
		include(DIR_WS_BOXES . 'categories_full.php');
	
	}

}
  
  include(DIR_WS_BOXES . 'shop_by_price.php');

  if ((USE_CACHE == 'true') && empty($SID)) {
    echo tep_cache_manufacturers_box();
  } else {
    include(DIR_WS_BOXES . 'manufacturers.php');
  }

//  require(DIR_WS_BOXES . 'whats_new.php');
//  require(DIR_WS_BOXES . 'information.php');
?>
<?php
//  require(DIR_WS_BOXES . 'extra_info_pages.php');
?>

<?php
  require(DIR_WS_BOXES . 'newsletter.php');
?>

<?php
if (substr(basename($PHP_SELF), 0, 8) != 'checkout') {
if (substr(basename($PHP_SELF), 0, 5) != 'login') {
if (substr(basename($PHP_SELF), 0, 13) != 'shopping_cart') {
if (substr(basename($PHP_SELF), 0, 14) != 'create_account') {
if (substr(basename($PHP_SELF), 0, 6) != 'logoff') {
if (substr(basename($PHP_SELF), 0, 7) != 'account') {
if (substr(basename($PHP_SELF), 0, 12) != 'address_book') {
if (substr(basename($PHP_SELF), 0, 10) != 'newsletter') {
if (substr(basename($PHP_SELF), 0, 10) != 'affiliate_') {
	
	require(DIR_WS_BOXES . 'hotsite_banners.php');
	
	require(DIR_WS_BOXES . 'column_banner_left.php');
	
	require(DIR_WS_BOXES . 'usersonline.php');
}
}
}
}
}
}
}
}
}*/
?>