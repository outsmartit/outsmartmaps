<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_outsmartmaps
 *
 * @copyright   Copyright (C) 2005 - 2021 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;


$style = '#map{
     min-height:' . $map_height .'px;
    }';
$document->addStyleDeclaration( $style );

$mapvars = array('longitude' => $longitude, 'lattitude' => $lattitude, 'marker' => $marker_search, 'gesture' => $gesture_control);


$document->addScriptOptions('out_vars', $mapvars);

$document->addScript(JURI::base() . 'modules/mod_outsmartmaps/assets/outsmartmaps.js');
?>


<div>
    <div id="map"></div>
</div>
 
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_api; ?>&callback=initMap&libraries=places&v=weekly"
      async
    ></script>


   
