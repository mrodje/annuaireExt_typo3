<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme',
        'label' => 'raison_sociale',
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
		'searchFields' => 'raison_sociale,adresse_postale,cp,ville,tel,fax,email,description,siret,logo,horaires',
        'iconfile' => 'EXT:annuaire_matthias_rodier/Resources/Public/Icons/tx_annuairematthiasrodier_domain_model_organisme.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, raison_sociale, adresse_postale, cp, ville, tel, fax, email, description, siret, logo, horaires',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, raison_sociale, adresse_postale, cp, ville, tel, fax, email, description, siret, logo, horaires, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_annuairematthiasrodier_domain_model_organisme',
                'foreign_table_where' => 'AND tx_annuairematthiasrodier_domain_model_organisme.pid=###CURRENT_PID### AND tx_annuairematthiasrodier_domain_model_organisme.sys_language_uid IN (-1,0)',
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
        'raison_sociale' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.raison_sociale',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'adresse_postale' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.adresse_postale',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'cp' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.cp',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'ville' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.ville',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'tel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.tel',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'fax' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.fax',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'email' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'description' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'siret' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.siret',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'logo' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.logo',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'logo',
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
	    'horaires' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:annuaire_matthias_rodier/Resources/Private/Language/locallang_db.xlf:tx_annuairematthiasrodier_domain_model_organisme.horaires',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
    ],
];
