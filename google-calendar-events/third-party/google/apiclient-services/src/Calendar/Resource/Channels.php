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

use SimpleCalendar\plugin_deps\Google\Service\Calendar\Channel;
/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google\Service\Calendar(...);
 *   $channels = $calendarService->channels;
 *  </code>
 */
class Channels extends \SimpleCalendar\plugin_deps\Google\Service\Resource
{
    /**
     * Stop watching resources through this channel (channels.stop)
     *
     * @param Channel $postBody
     * @param array $optParams Optional parameters.
     */
    public function stop(Channel $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('stop', [$params]);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Channels::class, 'SimpleCalendar\plugin_deps\Google_Service_Calendar_Resource_Channels');
