<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Ziggy Groups
	|--------------------------------------------------------------------------
	*/
	'groups' => [
		'admin' => [
			'admin.api.*'
		],

		'coach' => [
			'coach.api.*'
		],

		'user' => [
			'user.api.*'
		],

		'public' => [
			// just for test, toDo: remove this part
			'admin.api.*',
			'coach.api.*',
			'user.api.*',
		],
	],

	'skip-routes' => [

	],
];
