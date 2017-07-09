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
 * Describe the organism in which a contact works
 */
class Organisme extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * raisonSociale
     *
     * @var string
     */
    protected $raisonSociale = '';

    /**
     * adressePostale
     *
     * @var string
     */
    protected $adressePostale = '';

    /**
     * cp
     *
     * @var string
     */
    protected $cp = '';

    /**
     * ville
     *
     * @var string
     */
    protected $ville = '';

    /**
     * tel
     *
     * @var string
     */
    protected $tel = '';

    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * siret
     *
     * @var string
     */
    protected $siret = '';

    /**
     * logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $logo = null;

    /**
     * horaires
     *
     * @var string
     */
    protected $horaires = '';

    /**
     * Returns the raisonSociale
     *
     * @return string $raisonSociale
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Sets the raisonSociale
     *
     * @param string $raisonSociale
     * @return void
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;
    }

    /**
     * Returns the adressePostale
     *
     * @return string $adressePostale
     */
    public function getAdressePostale()
    {
        return $this->adressePostale;
    }

    /**
     * Sets the adressePostale
     *
     * @param string $adressePostale
     * @return void
     */
    public function setAdressePostale($adressePostale)
    {
        $this->adressePostale = $adressePostale;
    }

    /**
     * Returns the cp
     *
     * @return string $cp
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Sets the cp
     *
     * @param string $cp
     * @return void
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * Returns the ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Sets the ville
     *
     * @param string $ville
     * @return void
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
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
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the siret
     *
     * @return string $siret
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Sets the siret
     *
     * @param string $siret
     * @return void
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }

    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
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
