<?php
/**
* @version 0.0.6
* @author А.П.В.
* @package ba_more_photos_products_list for Jshopping
* @copyright Copyright (C) 2010 blog-about.ru. All rights reserved.
* @license GNU/GPL
**/
defined('_JEXEC') or die('Restricted access');

$db = JFactory::getDbo();

$db->setQuery("
	DELETE FROM `#__extensions`
	WHERE `element` = 'ba_more_photos_products_list' AND `folder` = 'jshoppingproducts' AND `type` = 'plugin'");
$db->query();

jimport('joomla.filesystem.folder');
JFolder::delete(JPATH_ROOT . '/components/com_jshopping/addons/ba_more_photos_products_list/');
JFolder::delete(JPATH_ROOT . '/components/com_jshopping/lang/ba_more_photos_products_list/');
JFolder::delete(JPATH_ROOT . '/plugins/jshoppingproducts/ba_more_photos_products_list/');
?>