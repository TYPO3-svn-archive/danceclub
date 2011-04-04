<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_danceclub_domain_model_couple'] = array(
	'ctrl' => $TCA['tx_danceclub_domain_model_couple']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, class_latin, age_latin, class_standard, age_standard, couple_description, couple_start, couple_end, m_dancer, f_dancer',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, class_latin, age_latin, class_standard, age_standard, couple_description, couple_start, couple_end, m_dancer, f_dancer,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_danceclub_domain_model_couple',
				'foreign_table_where' => 'AND tx_danceclub_domain_model_couple.pid=###CURRENT_PID### AND tx_danceclub_domain_model_couple.sys_language_uid IN (-1,0)',
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
		'class_latin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.class_latin',
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
		'age_latin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.age_latin',
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
		'class_standard' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.class_standard',
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
		'age_standard' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.age_standard',
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
		'couple_description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.couple_description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'couple_start' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.couple_start',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'couple_end' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.couple_end',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'm_dancer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.m_dancer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_danceclub_domain_model_dancer',
				'MM' => 'tx_danceclub_couple_dancer_mm',
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
							'table'=>'tx_danceclub_domain_model_dancer',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'f_dancer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple.f_dancer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_danceclub_domain_model_dancer',
				'MM' => 'tx_danceclub_couple_fdancer_dancer_mm',
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
							'table'=>'tx_danceclub_domain_model_dancer',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'tournament' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
?>