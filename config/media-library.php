<?php

return [
    'disk_name' => 'public',
    'max_file_size' => 1024 * 1024 * 10, // 10MB
    'remote' => [
        'extra_headers' => [],
    ],
    'default_filesystem' => 'public',
    'custom_url_generator' => null,
    'path_generator' => \App\PathGenerator\MediaPathGenerator::class,
    'visibility' => 'public',
    'version_urls' => false,
    'temporary_directory_path' => storage_path('media-library/temp'),
];