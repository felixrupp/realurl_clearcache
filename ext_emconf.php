<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "realurl_clearcache".
 *
 * Auto generated 22-07-2014 11:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'RealURL: Clear cache',
	'description' => 'Adds a clear cache button for RealURL in the back-end clear cache menu.',
	'category' => 'be',
	'version' => '2.0.0',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 1,
	'author' => 'Sebastiaan de Jonge (SebastiaanDeJonge.com), Felix Rupp',
	'author_email' => 'szebi.eger@gmail.com, kontakt@felixrupp.com',
	'author_company' => 'SebastiaanDeJonge.com',
	'constraints' =>
	array (
		'depends' =>
		array (
			'realurl' => '2.2.1-2.2.99',
			'typo3' => '6.2.99-7.6.99',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

