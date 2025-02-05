<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace SimpleCalendar\plugin_deps\Google\Service\Calendar\Resource;

use SimpleCalendar\plugin_deps\Google\Service\Calendar\Colors as ColorsModel;
/**
 * The "colors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google\Service\Calendar(...);
 *   $colors = $calendarService->colors;
 *  </code>
 */
class Colors extends \SimpleCalendar\plugin_deps\Google\Service\Resource
{
    /**
     * Returns the color definitions for calendars and events. (colors.get)
     *
     * @param array $optParams Optional parameters.
     * @return ColorsModel
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('get', [$params], ColorsModel::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Colors::class, 'SimpleCalendar\plugin_deps\Google_Service_Calendar_Resource_Colors');
