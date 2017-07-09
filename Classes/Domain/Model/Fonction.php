<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model;

/***
 *
 * This file is part of the "annuairemsxt" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 *
 ***/

/**
 * Describe the function of a contact
 */
class Fonction extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * libelle
     *
     * @var string
     */
    protected $libelle = '';

    /**
     * responsable
     *
     * @var bool
     */
    protected $responsable = false;

    /**
     * Returns the libelle
     *
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the libelle
     *
     * @param string $libelle
     * @return void
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Returns the responsable
     *
     * @return bool $responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Sets the responsable
     *
     * @param bool $responsable
     * @return void
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * Returns the boolean state of responsable
     *
     * @return bool
     */
    public function isResponsable()
    {
        return $this->responsable;
    }
}
