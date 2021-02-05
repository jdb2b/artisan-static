<?php

return [
    'production' => false,
    'baseUrl' => 'jondwyer.netlify.app',
    'site' => [
        'title' => 'SaaSwise',
        'description' => 'Consulting for early stage B2B SaaS companies',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'SaaSwise',
        'linkedin' => '/company/28979702',
    ],
    'services' => [
        'cmsVersion' => '2.10.67',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'saaswise',
            'apiKey' => '264838647779948',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
