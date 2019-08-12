<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

function xmldb_local_upgrade($oldversion, $block) {
    global $CFG, $DB;

//    if ($oldversion < 2014061101) {
//        // Convert info in config plugins from auth/db to auth_db
//        upgrade_fix_config_local_plugin_names('db');
//        upgrade_fix_config_local_plugin_defaults('db');
//        upgrade_plugin_savepoint(true, 2014061101, 'local', 'db');
//    }
    return true;
}
