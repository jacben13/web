<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to 2021 Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [
    '0home'       => [
        'name'          => 'home',
        'label'         => 'web::seat.home',
        'icon'          => 'fas fa-home',
        'route_segment' => 'home',
        'route'         => 'home',
    ],
    'alliance' => [
        'name'          => 'alliance',
        'label'         => 'web::seat.alliance',
        'plural'        => true,
        'icon'          => 'fas fa-city',
        'route_segment' => 'alliances',
        'entries'       => [
            [
                'name'  => 'all alliances',
                'label' => 'web::seat.all_alliance',
                'icon'  => 'fab fa-fort-awesome',
                'route' => 'alliance.list',
            ],
        ],
    ],
    'corporation' => [
        'name'          => 'corporation',
        'label'         => 'web::seat.corporation',
        'plural'        => true,
        'icon'          => 'fas fa-building',
        'route_segment' => 'corporations',
        'entries'       => [
            [
                'name'  => 'all corporations',
                'label' => 'web::seat.all_corp',
                'icon'  => 'fas fa-hotel',
                'route' => 'corporation.list',
            ],
        ],
    ],
    'character'   => [
        'name'          => 'character',
        'label'         => 'web::seat.character',
        'plural'        => true,
        'icon'          => 'fas fa-user',
        'route_segment' => 'characters',
        'entries'       => [
            [
                'name'  => 'all characters',
                'label' => 'web::seat.all_char',
                'icon'  => 'fas fa-users',
                'route' => 'character.list',
            ],
            [
                'name'  => 'mail timeline',
                'label' => 'web::seat.mail_timeline',
                'icon'  => 'fas fa-envelope',
                'route' => 'character.view.mail.timeline',
            ],
        ],
    ],
    'squads'      => [
        'name'          => 'squads',
        'label'         => 'web::squads.squad',
        'plural'        => true,
        'icon'          => 'fas fa-user-friends',
        'route_segment' => 'squads',
        'route'         => 'squads.index',
    ],
    'settings'    => [
        'name'          => 'configuration',
        'label'         => 'web::seat.configuration',
        'permission'    => 'global.superuser',
        'icon'          => 'fas fa-cogs',
        'route_segment' => 'configuration',
        'entries'       => [

            [   // Access
                'name'  => 'access',
                'label' => 'web::seat.access',
                'icon'  => 'fas fa-shield-alt',
                'route' => 'configuration.access.roles',
            ],
            [   // Users
                'name'   => 'user',
                'plural' => true,
                'label'  => 'web::seat.user',
                'icon'   => 'fas fa-user',
                'route'  => 'configuration.users',
            ],
            [   // Schedule
                'name'  => 'schedule',
                'label' => 'web::seat.schedule',
                'icon'  => 'far fa-clock',
                'route' => 'configuration.schedule',
            ],
            [   // Sso
                'name'  => 'sso',
                'label' => 'web::seat.sso',
                'icon'  => 'fas fa-user-circle',
                'route' => 'configuration.sso',
            ],
            [   // SeAT Setting
                'name'  => 'settings',
                'label' => 'web::seat.settings',
                'icon'  => 'fas fa-cog',
                'route' => 'seat.settings.view',
            ],
            [   // Security
                'name'  => 'security logs',
                'label' => 'web::seat.security_logs',
                'icon'  => 'fas fa-list',
                'route' => 'configuration.security.logs',
            ],
            [
                // About
                'name'  => 'about',
                'label' => 'web::seat.about',
                'icon'  => 'fas fa-info',
                'route' => 'seat.settings.about',
            ],
        ],
    ],
    'tools'       => [
        'name'          => 'tools',
        'label'         => 'web::seat.tools',
        'icon'          => 'fas fa-wrench',
        'route_segment' => 'tools',
        'entries'       => [
            [
                'name'       => 'standing profiles',
                'label'      => 'web::seat.standings_builder',
                'icon'       => 'fas fa-address-book',
                'permission' => 'global.standing_builder',
                'route'      => 'tools.standings',
            ],
            [
                'name'       => 'moons reporter',
                'label'      => 'web::seat.moons_reporter',
                'icon'       => 'fas fa-moon',
                'permission' => 'moon.view_moon_reports',
                'route'      => 'tools.moons.index',
            ],
        ],
    ],
];
