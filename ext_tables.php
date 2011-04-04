<?php
if (!defined ('TYPO3_MODE')){
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Dancers',
	'Dancers'
);

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_dancers'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_dancers', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_dancers.xml');


Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Tournaments',
	'Tournament-Results'
);

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_tournaments'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_tournaments', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_tournaments.xml');





t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Dance-Club');


t3lib_extMgm::addLLrefForTCAdescr('tx_danceclub_domain_model_dancer', 'EXT:danceclub/Resources/Private/Language/locallang_csh_tx_danceclub_domain_model_dancer.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_danceclub_domain_model_dancer');
$TCA['tx_danceclub_domain_model_dancer'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_dancer',
		'label' 			=> 'firstname',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Dancer.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_danceclub_domain_model_dancer.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_danceclub_domain_model_couple', 'EXT:danceclub/Resources/Private/Language/locallang_csh_tx_danceclub_domain_model_couple.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_danceclub_domain_model_couple');
$TCA['tx_danceclub_domain_model_couple'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_couple',
		'label' 			=> 'class_latin',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Couple.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_danceclub_domain_model_couple.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_danceclub_domain_model_tournament', 'EXT:danceclub/Resources/Private/Language/locallang_csh_tx_danceclub_domain_model_tournament.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_danceclub_domain_model_tournament');
$TCA['tx_danceclub_domain_model_tournament'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:danceclub/Resources/Private/Language/locallang_db.xml:tx_danceclub_domain_model_tournament',
		'label' 			=> 'date',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Tournament.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_danceclub_domain_model_tournament.gif'
	),
);

?>