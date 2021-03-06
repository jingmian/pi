<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

return [
    // Module meta
    'meta'       => [
        // Module title, required
        'title'       => _a('DEMO Sandbox'),
        // Description, for admin, optional
        'description' => _a('Examples and tests for developers.'),
        // Version number, required
        'version'     => '1.1.1',
        // Distribution license, required
        'license'     => 'New BSD',
        // Logo image, for admin, optional
        'logo'        => 'image/logo.png',
        // Readme file, for admin, optional
        'readme'      => 'docs/readme.txt',
        // Demo site link, optional
        'demo'        => 'http://demo.piengine.org/demo',
        // Logo icon
        'icon'        => 'fa-code',

        // Module is ready for clone? Default as false
        'clonable'    => true,
    ],
    // Author information
    'author'     => [
        // Author full name, required
        'Name'    => 'Taiwen Jiang',
        // Email address, optional
        'Email'   => 'taiwenjiang@tsinghua.org.cn',
        // Website link, optional
        'Website' => 'http://piengine.org',
        // Credits and aknowledgement, optional
        'Credits' => 'Pi Engine Team',
    ],
    // Module dependency: list of module directory names, optional
    'dependency' => [
    ],

    // Resource
    'resource'   => [
        // Database meta
        'database'   => [
            // SQL schema/data file
            'sqlfile' => 'sql/mysql.sql',
        ],
        // Module configs
        'config'     => 'config.php',
        // Permission specs
        'permission' => 'permission.php',
        // Block definition
        'block'      => 'block.php',
        // Bootstrap, priority
        'bootstrap'  => 1,
        // Event specs
        'event'      => 'event.php',
        // Search registry, 'class:method'
        //'search'    => array('callback' => array('search', 'index')),
        // View pages
        'page'       => 'page.php',
        // Navigation definition
        'navigation' => 'nav.php',
        // Routes, first in last out; bigger priority earlier out
        'route'      => 'route.php',
        // Callback for stats and monitoring
        'monitor'    => ['callback' => ['monitor', 'index']],
        // Additional custom extension
        'test'       => [
            'config' => 'For test',
        ],

        'user'    => 'user.php',
        'comment' => 'comment.php',
    ],
];
