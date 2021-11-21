<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_outsmartmaps
 *
 * @copyright   Copyright (C) 2005 - 2021 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$google_api = $params->get('api_key');
$map_height = ($params->get('map_height') ? $params->get('map_height') : 470 );
$lattitude = ($params->get('lattitude') ? $params->get('lattitude') : '50.846952282984844');
$longitude = ($params->get('longitude') ? $params->get('longitude') : '4.3524716665752745');
$gesture_control = ($params->get('gesture_control') ? $params->get('gesture_control') : 'none');
$marker_search = ($params->get('marker_search') ? $params->get('marker_search'): ""); 


require JModuleHelper::getLayoutPath('mod_outsmartmaps', 'default');
