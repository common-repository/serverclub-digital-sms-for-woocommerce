<?php

/**
 * Plugin Name:       Serverclub.Digital SMS for WooCommerce
 * Description:       Send WooCommerce order updates to customers with Serverclub.Digital SMS Gateway. 
 * Version:           1.0
 * Author:            Serverclub
 * Author URI:        https://www.serverclub.digital/
 * License:           GPLv2 or later
 * Text Domain:       serverclubdigital
 */

include 'includes/core-import.php';
new ServerClubSMS(__FILE__);
