<?php
/* Typesetter CMS - Femto Theme -- functions */

defined('is_running') or die('Not an entry point...');

global $config, $langmessage;

$site_title = $config['title'];
$language   = isset($page->lang) ? $page->lang : $config["language"];
$menu_i18n  = $langmessage['Menu'];
common::LoadComponents('fontawesome');

// check + add theme script
if( file_exists($page->theme_dir . '/script.js') ){
  $page->head_js[] = dirname($page->theme_path) . '/script.js';
}

$GP_MENU_ELEMENTS = 'FemtoMenu';

function FemtoMenu($node, $attributes, $level=0, $menu_id=''){
  GLOBAL $GP_MENU_LINKS;
  if( $node == 'a' ){
    $format = $GP_MENU_LINKS;
    $search = array('{$href_text}','{$attr}','{$label}','{$title}');

    if( in_array('haschildren', $attributes['class']) ){
      if( in_array('childselected', $attributes['class']) || in_array('selected', $attributes['class']) ){
        $format = '<a {$attr} href="{$href_text}" aria-expanded="true">{$label}<span class="submenu-toggle expanded"></span></a>'; 
      }else{
        $format = '<a {$attr} href="{$href_text}">{$label}<span class="submenu-toggle"></span></a>'; 
      }
    }

    return str_replace($search, $attributes, $format);
  }
}
