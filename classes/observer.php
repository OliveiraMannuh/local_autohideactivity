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

/**
 * Plugin observer for the local_autohideactivity plugin.
 *
 * @package     local_autohideactivity
 * @copyright   2025 Manuela Oliveira<oliveira.mannuh@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_autohideactivity;

defined('MOODLE_INTERNAL') || die();

class observer {
    public static function activity_created(\core\event\course_module_created $event) {
        global $DB, $USER;

        $modulecontext = \context_module::instance($event->contextinstanceid);
        $userroles = get_user_roles($modulecontext, $USER->id);

        // Verifica se o criador é um professor (editingteacher)
        foreach ($userroles as $role) {
            if ($role->shortname === 'editingteacher') {
                // Oculta a atividade para estudantes
                set_coursemodule_visible($event->objectid, 0);
                break;
            }
        }
    }
}

