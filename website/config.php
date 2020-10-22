<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website - Rod Thomas',
        'nav_menu' => [
            '' => 'Home',
            'content/about-us.php' => 'About Us',
            'content/products.php' => 'Products',
            'content/contact.php' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
