<?php

/*
Plugin Name: اصلاح لیست فروشندگان در صفحه برند ها
Description: افزودن نام شهر و استان به لیست فروشندگان دکان
Author: Mhmmdq
Version: 1.0.0
Author URI: https://github.com/mhmmdq
*/

if ( ! defined( 'ABSPATH' ) )
	exit;


function dokan_seller_listing_footer_content_add_city_state( $seller )
{
     $store_id = $seller->ID;
	 $vendor = dokan()->vendor->get( $seller->ID );;
	 $store_info = dokan_get_store_info( $store_id );
    
	echo "<h3> <a href='{$vendor->get_shop_url()}'> {$store_info['store_name']} </a> </h3>";
}

add_action( 'dokan_seller_listing_footer_content' , 'dokan_seller_listing_footer_content_add_city_state');
