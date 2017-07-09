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
 * Describe a service in which a contact works
 */
class Service extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * libelle
     *
     * @var string
     */
    protected $libelle = '';

    /**
     * batiment
     *
     * @var string
     */
    protected $batiment = '';

    /**
     * bureau
     *
     * @var string
     */
    protected $bureau = '';

    /**
     * tel
     *
     * @var string
     */
    protected $tel = '';

    /**
     * horaires
     *
     * @var string
     */
    protected $horaires = '';

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
     * Returns the batiment
     *
     * @return string $batiment
     */
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * Sets the batiment
     *
     * @param string $batiment
     * @return void
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;
    }

    /**
     * Returns the bureau
     *
     * @return string $bureau
     */
    public function getBureau()
    {
        return $this->bureau;
    }

    /**
     * Sets the bureau
     *
     * @param string $bureau
     * @return void
     */
    public function setBureau($bureau)
    {
        $this->bureau = $bureau;
    }

    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * Returns the horaires
     *
     * @return string $horaires
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Sets the horaires
     *
     * @param string $horaires
     * @return void
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
    }
}
