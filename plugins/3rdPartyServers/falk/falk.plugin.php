<?php

/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2008 m3 Media Services Ltd                             |
| For contact details, see: http://www.openx.org/                           |
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
 * @package    OpenadsPlugin
 * @subpackage 3rdPartyServers
 * @author     Radek Maciaszek <radek@m3.net>
 *
 */

require_once MAX_PATH . '/plugins/3rdPartyServers/3rdPartyServers.php';

/**
 *
 * 3rdPartyServer plugin. Allow for generating different banner html cache
 *
 * @static
 */
class Plugins_3rdPartyServers_falk_falk extends Plugins_3rdPartyServers
{

    /**
     * Return the name of plugin
     *
     * @return string
     */
    function getName()
    {
        include_once MAX_PATH . '/lib/max/Plugin/Translation.php';
        MAX_Plugin_Translation::init($this->module, $this->package);

        return MAX_Plugin_Translation::translate('Rich Media - Falk', $this->module, $this->package);
    }

    /**
     * Return plugin cache
     *
     * @return string
     */
    function getBannerCache($buffer, &$noScript)
    {
        $search = array('#&cntadd=1#', '#&cnturl=[^&]*#', '#rdm=(\\\\\'\+rdm\+\\\\\'|\[timestamp\])#');
        $replace = array('', '', 'rdm={random}&cntadd=1&cnturl={clickurl}');

        $buffer = preg_replace ($search, $replace, $buffer);
        $noScript[0] = preg_replace($search[0], $replace[0], $noScript[0]);

        return $buffer;
    }

}

?>
