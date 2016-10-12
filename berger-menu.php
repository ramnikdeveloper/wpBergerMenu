<?php
/**
 * Plugin Name: Berger menu
 * Description: Trying to add berger menu
 * Version: 1.0
 * Author: Ramnik Singh
 * Requires at least: 4.1 
 *   
 * @author Ramnik Singh
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function my_berger_menu(){

    $result = ' 

    <link href="http://materializecss.com/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="http://materializecss.com/bin/materialize.js"></script>

 <ul id="slide-out" class="side-nav">
 <br>
 <br>
    
    <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
          <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Home</a>
            <div class="collapsible-body" style="display: none;">
              <ul>
                <li><a href="http://printershop247.com/Demo/">Home</a></li>
              </ul>
            </div>
          </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Portfolio</a>
              <div class="collapsible-body" style="display: none;">
                <ul>
                  <li><a href="http://printershop247.com/Demo/index.php/portfolio/">Portfolio</a></li>                  
                  <li><a href="http://printershop247.com/Demo/index.php/portfolio-without-filter/">Portfolio without Filter</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Blog</a>
            <div class="collapsible-body" style="display: none;">
              <ul>
                <li><a href="http://printershop247.com/Demo/index.php/blog/">Blog</a></li>
              </ul>
            </div>
          </li>          
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Pagetemplates</a>
              <div class="collapsible-body" style="display: none;">
                <ul>
                  <li><a href="http://printershop247.com/Demo/index.php/pagetemplates/">Pagetemplates</a></li>
                  <li><a href="http://printershop247.com/Demo/index.php/fullwidth/">Fullwidth</a></li>
                  <li><a href="http://printershop247.com/Demo/index.php/sidebar-left/">Sidebar left</a></li>
                  <li><a href="http://printershop247.com/Demo/index.php/sidebar-right/">Sidebar right</a></li>
                  <li><a href="http://printershop247.com/Demo/index.php/contact/">Contact</a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Shortcodes</a>
              <div class="collapsible-body" style="display: none;">
                <ul>
                  <li><a href="carousel.html">Shortcodes</a></li>
                  <li><a href="collapsible.html">Alert Boxes</a></li>
                  <li><a href="dialogs.html">Buttons</a></li>
                  <li><a href="dropdown.html">Columns</a></li>
                  <li><a href="media.html">Toggel</a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Shop</a>
              <div class="collapsible-body" style="display: none;">
                <ul>
                  <li><a href="http://printershop247.com/Demo/index.php/shop-2/">Shop</a></li>
                  <li><a href="http://colibri-interactive.com/themes/organicwebshop/product-category/organic-bread/">Organic Bread</a></li>
                  <li><a href="http://colibri-interactive.com/themes/organicwebshop/product-category/organic-fruits/">Organic Fruits</a></li>
                  <li><a href="http://colibri-interactive.com/themes/organicwebshop/product-category/tasty-breakfast/">Tasty Breakfast</a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Purchase</a>
              <div class="collapsible-body" style="display: none;">
                <ul>
                  <li><a href="http://themeforest.net/item/organic-web-shop-a-responsive-woocommerce-theme/9475703?ref=colibriinteractive">Purchase</a></li>                  
                </ul>
              </div>
            </li>

          </ul>
        </li>
  </ul>
<script type="text/javascript">
var $= jQuery.noConflict();
   $(".button-collapse").sideNav();
</script>

    ';

    return $result;
}


add_shortcode('berger_shortcode', 'my_berger_menu');



?>
