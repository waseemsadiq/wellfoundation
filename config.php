<?php
//Load server environment
if(isset($_SERVER['HOME']) && file_exists($_SERVER['HOME'].'/private_html/.env.'.getenv('SITE')))
{
  $dotenv = new Symfony\Component\Dotenv\Dotenv();
  $dotenv->usePutenv()->load($_SERVER['HOME'].'/private_html/.env.'.getenv('SITE'));
}

return array(

    // cache    
    'http_cache' => true,
    'http_cache_time'         => '1week',
    'http_cache_time_browser' => '1day',

    // Site
    'site' => [
        'name'              => 'The Well Foundation',
        'body_class'        => 'overflow-x-hidden antialiased',
        'footer_address'    => '',
        'built_by'          => '',
        'built_by_link'     => '',
        'site_email'        => '',
        'contact_email'     => '',
    ],

    // Page
    'page' => [

        'metadata' => [
            'summary'       => '',
            'og:site_name'  => '',
            'og:url'        => '',
            'og:title'      => '',
            'og:description'=> '',
            'og:image'      => '',
            'twitter:site'  => '',
            'twitter:card'  => '',
            'fb:admins'     => '',
        ],

        'visible'   => true,
        'published' => true,
    ],

    'aliases' => [
        'theme://'                  => getenv('SITE')  ? '/theme/' : '/sites/thewell.foundation/theme/',
        'images://'                 => getenv('SITE') ? '/images/pages/'    : '/sites/thewell.foundation/images/',
    ],

    // Google Analytics
    'ga_code' => getenv('SITE') ? '' : '',

);
