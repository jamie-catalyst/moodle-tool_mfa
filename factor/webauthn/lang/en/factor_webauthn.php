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
 * Language strings.
 *
 * @package     factor_webauthn
 * @author      Alex Morris <alex.morris@catalyst.net.nz>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:revoke'] = 'Revoke security key';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Hybrid';
$string['authenticator:internal'] = 'Internal';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Security key name';
$string['authenticatortypelimitation'] = 'Please note that you can only use security keys of one of these types: {$a}.<br>Registering other security keys is possible, but you cannot use them during login.';
$string['error'] = 'Failed to authenticate';
$string['info'] = '<p>Use a security key</p>';
$string['loginskip'] = 'I don\'t have my security key';
$string['loginsubmit'] = 'Verify security key';
$string['pluginname'] = 'Security Key';
$string['privacy:metadata'] = 'The WebAuthn factor plugin does not store any personal data';
$string['register'] = 'Register security key';
$string['settings:authenticatortypes'] = 'Types of security keys';
$string['settings:authenticatortypes_help'] = 'Toggle certain types of security keys';
$string['settings:userverification'] = 'User verification';
$string['settings:userverification_help'] = 'Serves to ensure the person authenticating is in fact who they say they are. User verification can take various forms, such as password, PIN, fingerprint, etc.';
$string['setupfactor'] = 'Setup security key';
$string['summarycondition'] = 'using a security key';
$string['userverification:discouraged'] = 'User verification should not be employed, for example to minimize user interaction';
$string['userverification:preferred'] = 'User verification is preferred, authentication will not fail if user verification is missing';
$string['userverification:required'] = 'User verification is required (e.g. by pin). Authentication fails if key does not have user verification';
$string['userverificationrequired'] = 'Your security key must support user verification (e.g. pin input) to be eligible for registration.';
