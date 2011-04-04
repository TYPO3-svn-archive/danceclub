<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_danceclub_domain_model_tournament'] = array(
	'ctrl' => $TCA['tx_danceclub_domain_model_tournament']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, date, organizer, city, number, type, class, age, announce_date, status, result, participants, rank, description, dance_couple',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, date, organizer, city, number, type, class, age, announce_date, status, result, participants, rank, description, dance_couple,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_danceclub_domain_model_tournament',
				'foreign_table_where' => 'AND tx_danceclub_domain_model_tournament.pid=###CURRENT_PID### AND tx_danceclub_domain_model_tournament.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' =>array(
				'type' =>'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
			'type' => 'input',
			'size' => '30',
			'max' => '255',
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => '10',
				'max' => '20',
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => '8',
				'max' => '20',
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
				'range' => array(
					'upper' => mktime(0, 0, 0, 12, 31, date('Y') + 10),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				),
			),
		),
		'date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.date',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'organizer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.organizer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'number' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.number',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'class' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.class',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'age' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.age',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'announce_date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.announce_date',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'status' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.status',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'result' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.result',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'participants' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.participants',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'rank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.rank',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'dance_couple' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament.dance_couple',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_danceclub_domain_model_couple',
				'MM' => 'tx_danceclub_tournament_couple_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=>'tx_danceclub_domain_model_couple',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);
?>