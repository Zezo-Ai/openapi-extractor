<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2023, Joas Schilling <coding@schilljs.com>
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 *
 * @author Joas Schilling <coding@schilljs.com>
 *
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

return [
	'ocs' => [
		['name' => 'AdminSettings#adminScopeImplicitFromAdminRequired', 'url' => '/api/{apiVersion}/default-admin', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'AdminSettings#movedToDefaultScope', 'url' => '/api/{apiVersion}/default-admin-overwritten', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'AdminSettings#movedToSettingsTag', 'url' => '/api/{apiVersion}/moved-with-tag', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],

		['name' => 'Settings#federationByController', 'url' => '/api/{apiVersion}/controller-scope', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#ignoreByDeprecatedAttributeOnMethod', 'url' => '/api/{apiVersion}/ignore-openapi-attribute', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#ignoreByScopeOnMethod', 'url' => '/api/{apiVersion}/ignore-method-scope', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#movedToDefaultScope', 'url' => '/api/{apiVersion}/default-scope', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#movedToAdminScope', 'url' => '/api/{apiVersion}/admin-scope', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#defaultAndAdminScope', 'url' => '/api/{apiVersion}/default-and-admin-scope', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#nestedSchemas', 'url' => '/api/{apiVersion}/nested-schemas', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#listSchemas', 'url' => '/api/{apiVersion}/list-schemas', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#listOfIntParameters', 'url' => '/api/{apiVersion}/list-of-int', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#intParameterWithMinAndMax', 'url' => '/api/{apiVersion}/min-max', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#intParameterWithMin', 'url' => '/api/{apiVersion}/min', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
		['name' => 'Settings#intParameterWithMax', 'url' => '/api/{apiVersion}/max', 'verb' => 'POST', 'requirements' => ['apiVersion' => '(v2)']],
	],
];
