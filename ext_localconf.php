<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Dancers',
	array(
		'Dancer' => 'list, show, new, create, edit, update, delete',
		'Couple' => 'list, show, new, create, edit, update, delete',
		'Tournament' => 'list, show, new, create, edit, update, delete',
		
	),
	array(
		'Dancer' => 'create, update, delete',
		'Couple' => 'create, update, delete',
		'Tournament' => 'create, update, delete',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Tournaments',
	array(
		'Dancer' => 'list, show, new, create, edit, update, delete',
		'Couple' => 'list, show, new, create, edit, update, delete',
		'Tournament' => 'list, show, new, create, edit, update, delete',
		
	),
	array(
		'Dancer' => 'create, update, delete',
		'Couple' => 'create, update, delete',
		'Tournament' => 'create, update, delete',
		
	)
);

?>