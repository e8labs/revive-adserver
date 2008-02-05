<?php

/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2008 m3 Media Services Ltd                             |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| Copyright (c) 2000-2003 the phpAdsNew developers                          |
| For contact details, see: http://www.phpadsnew.com/                       |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

/**
 * 
 * This is autogenerated merged delivery file which contains all files
 * from delivery merged into one output file.
 * 
 * !!!Warning!!!
 * 
 * Do not edit this file. If you need to do any changes to any delivery PHP file 
 * checkout sourcecode from the svn repository, do a necessary changes inside 
 * "delivery_dev" folder and regenerate delivery files using command:
 * # ant generate-delivery
 * 
 * For more information on ant generator or if you want to check why we do this
 * check out the documentation wiki page:
 * https://developer.openx.org/wiki/OptimizationPractices#GenerateDeliveryAntTask
 * 
 */

// Require the initialisation file
include_once '../../init-delivery.php';
$MAX_PLUGINS_AD_PLUGIN_NAME = 'MAX_type';
if(!isset($_GET[$MAX_PLUGINS_AD_PLUGIN_NAME])) {
echo $MAX_PLUGINS_AD_PLUGIN_NAME . ' is not specified';
exit(1);
}
$tagName = $_GET[$MAX_PLUGINS_AD_PLUGIN_NAME];
$tagFileName = MAX_PATH . '/plugins/invocationTags/'.$tagName.'/'.$tagName.'.delivery.php';
if(!file_exists($tagFileName)) {
echo 'Invocation plugin delivery file "' . $tagFileName . '" doesn\'t exists';
exit(1);
}
// include plugin specific delivery script
// (we are not using MAX_Plugin interface for it because it has to be as fast as possible)
include $tagFileName;


?>