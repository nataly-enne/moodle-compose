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


defined('MOODLE_INTERNAL') || die();

function xmldb_enrol_local_uninstall()
{
    global $CFG, $DB;

    $local = enrol_get_plugin('local');
    $rs = $DB->get_recordset('enrol', array('enrol' => 'local'));
    foreach ($rs as $instance) {
        $local->delete_instance($instance);
    }
    $rs->close();

    return true;
}
