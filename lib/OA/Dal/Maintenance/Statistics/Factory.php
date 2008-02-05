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

require_once MAX_PATH . '/lib/OA.php';

/**
 * A class for creating {@link OA_Dal_Maintenance_Statistics_Common} subclass
 * objects, depending on the database type in use.
 *
 * @package    OpenXDal
 * @subpackage MaintenanceStatistics
 * @author     Andrew Hill <andrew.hill@openx.org>
 */
class OA_Dal_Maintenance_Statistics_Factory
{

    /**
     * The factory method used to instantiate a class that implements the
     * OA_Dal_Maintenance_Statistics_Common interface.
     *
     * @param string $moduleName The name of the module class to instantiate.
     * @return {@link OA_Dal_Maintenance_Statistics_Common} The class object created.
     */
    function factory($moduleName)
    {
        // Instantiate the class
        $classname = $this->_deriveClassName($moduleName);
        return new $classname();
    }

    /**
     * A private method to derive the class name to instantiate.
     *
     * @access private
     * @param string $moduleName The name of the module class to instantiate.
     * @return string The name of the class object to create.
     */
    function _deriveClassName($moduleName)
    {
        $conf = $GLOBALS['_MAX']['CONF'];
        $filename  = $conf['database']['type'];
        $classname = 'OA_Dal_Maintenance_Statistics_' . $moduleName . '_' . $conf['database']['type'];
        $includeFile = MAX_PATH . "/lib/OA/Dal/Maintenance/Statistics/$moduleName/{$filename}.php";
        require_once $includeFile;
        if (!class_exists($classname)) {
            // Unable to include the specified class file - raise error and halt
            OA::debug('Unable to find the "' . $classname . '" class in the "' . $includeFile .
                       '" file.', PEAR_LOG_ERR);
            OA::debug('Aborting script execution', PEAR_LOG_ERR);
            exit();
        }
        return $classname;
    }

}

?>
