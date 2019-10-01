<?php
/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'csu_assignments',
        'pretty_uri' => false,
        'site_url' => 'https://assignment2csu.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'page2' => 'Page 2'

        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}