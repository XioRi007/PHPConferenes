<?php
return [
	'conference/create' => [
		'controller' => 'conference',
		'action' => 'create',
	],
	'conference/[0-9]+/edit' => [
		'controller' => 'conference',
		'action' => 'edit',
	],
	'conference/[0-9]+/delete' => [
		'controller' => 'conference',
		'action' => 'delete',
	],
	'conference/[0-9]+' => [
		'controller' => 'conference',
		'action' => 'one',
	],
	'conference' => [
		'controller' => 'conference',
		'action' => 'all',
	],	
];