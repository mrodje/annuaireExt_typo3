<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact',
        'label' => 'prenom',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'prenom,nom,tel,email,adresse,cp,ville,photo,organisme,fonction,service',
        'iconfile' => 'EXT:annuaire_matthias_rodier/Resources/Public/Icons/tx_annuairematthiasrodier_domain_model_contact.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, prenom, nom, tel, email, adresse, cp, ville, photo, organisme, fonction, service',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, prenom, nom, tel, email, adresse, cp, ville, photo, organisme, fonction, service, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_annuairematthiasrodier_domain_model_contact',
                'foreign_table_where' => 'AND tx_annuairematthiasrodier_domain_model_contact.pid=###CURRENT_PID### AND tx_annuairematthiasrodier_domain_model_contact.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'prenom' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.prenom',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'nom' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.nom',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'tel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.tel',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'email' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'adresse' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.adresse',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'cp' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.cp',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'ville' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.ville',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'photo' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.photo',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'photo',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	    ],
	    'organisme' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.organisme',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_annuairematthiasrodier_domain_model_organisme',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	    ],
	    'fonction' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.fonction',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_annuairematthiasrodier_domain_model_fonction',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	    ],
	    'service' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_contact.service',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_annuairematthiasrodier_domain_model_service',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	    ],
    ],
];
