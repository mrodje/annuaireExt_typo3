
plugin.tx_annuairematthiasrodier_keylistandshowcontact {
  view {
    templateRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keylistandshowcontact.view.templateRootPath}
    partialRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keylistandshowcontact.view.partialRootPath}
    layoutRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keylistandshowcontact.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_annuairematthiasrodier_keylistandshowcontact.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_annuairematthiasrodier_keylistandshoworganisme {
  view {
    templateRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keylistandshoworganisme.view.templateRootPath}
    partialRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keylistandshoworganisme.view.partialRootPath}
    layoutRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keylistandshoworganisme.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_annuairematthiasrodier_keylistandshoworganisme.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_annuairematthiasrodier_keysearchcontact {
  view {
    templateRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keysearchcontact.view.templateRootPath}
    partialRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keysearchcontact.view.partialRootPath}
    layoutRootPaths.0 = EXT:annuaire_matthias_rodier/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_annuairematthiasrodier_keysearchcontact.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_annuairematthiasrodier_keysearchcontact.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_annuairematthiasrodier._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-annuaire-matthias-rodier table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-annuaire-matthias-rodier table th {
        font-weight:bold;
    }

    .tx-annuaire-matthias-rodier table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
