<?php

/*
 * $Id$
 *
 * Google XML Sitemaps Generator for WordPress MU activation
 * ==============================================================================
 *
 * If you want to use this plugin with a automatic network-wide activation, copy the "google-sitemaps-generator" directory
 * in wp-content/mu-plugins and copy this file into wp-content/mu-plugins directly:
 *
 * + wp-content/
 * | + mu-plugins/
 * | | - sitemap-wpmu.php
 * | | + google-sitemap-generator/
 * | | | - sitemap.php
 * | | | - [...]
 *
 * All files in the mu-plugins directory are included for all blogs by WordPress by default, so there is no need to
 * activate this plugin anymore (and it also can not be deactivated).
 */

if(!defined('WPINC')) return;

if(file_exists(dirname(__FILE__) . "/google-sitemap-generator/sitemap.php")) require_once(dirname(__FILE__) . "/google-sitemap-generator/sitemap.php");
elseif(file_exists(dirname(__FILE__) . "/sitemap.php")) require_once(dirname(__FILE__) . "/sitemap.php");
else trigger_error("Google Sitemap Generator was loaded via mu-plugins directory, but the plugin was not found",E_USER_WARNING);
