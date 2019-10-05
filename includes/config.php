<?php
/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Assignment 2',
        'pretty_uri' => false,
        'site_url' => 'https://assignment2csu.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'page2' => 'More Comics'

        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}