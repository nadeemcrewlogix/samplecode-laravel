<?php
return [
    'title' => 'crewlogix/slots_manager',
    'extend_admin_layout' => '_layouts.admin',
    'extend_consultant_layout' => '_layouts.admin',
    'extend_student_layout' => '',
    'showInsidebar' => true,
    'public_path' => 'http://localhost:8000/aplica_student/public/blog/',
    'default_banner_image' => 'http://lorempixel.com/400/300/',
    'package' => [
    	'prefix' => 'slots',
		'as' => 'slots.',
		'middleware' => [],
    ],
    //'admin_middleware' => 'auth',
	
	'admin' => [
		'namespace' => 'Crewlogix\SlotsManager\Controllers\Admin',
		'prefix' => 'admin',
		'as' => 'admin.',
		'entity' => 'admin',
		'middleware' => [],
		'slot' => [
			'status' => 'active',
			'order' => 'desc',
			'per_page' => 10,
		],
		'media' => [
    		'url' => env('MEDIA_URL','assets/plugins/filemanager/index.html'),
		]
	],
	'consultant' => [
		'namespace' => 'Crewlogix\SlotsManager\Controllers\Consultant',
		'prefix' => 'consultant',
		'as' => 'consultant.',
		'entity' => 'consultant',
		'middleware' => [],
		'slot' => [
			'status' => 'active',
			'order' => 'desc',
			'per_page' => 10,
		],
		'media' => [
    		'url' => env('MEDIA_URL','assets/plugins/filemanager/index.html'),
		]
	],
];

