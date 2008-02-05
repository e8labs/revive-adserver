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

require_once MAX_PATH . '/lib/OA/Maintenance/Statistics/Common/Task/SetUpdateRequirements.php';

/**
 * A class for determining the maintenance statistics update requirements for
 * the AdServer module.
 *
 * @package    OpenXMaintenance
 * @subpackage Statistics
 * @author     Andrew Hill <andrew.hill@openx.org>
 */
class OA_Maintenance_Statistics_Tracker_Task_SetUpdateRequirements extends OA_Maintenance_Statistics_Common_Task_SetUpdateRequirements
{

    /**
     * The constructor method.
     *
     * @return OA_Maintenance_Statistics_Tracker_Task_SetUpdateRequirements
     */
    function OA_Maintenance_Statistics_Tracker_Task_SetUpdateRequirements()
    {
        parent::OA_Maintenance_Statistics_Common_Task_SetUpdateRequirements();
    }

}

?>
