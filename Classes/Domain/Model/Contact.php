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
 * Describe a contact thanks to all its relationships
 */
class Contact extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * prenom
     *
     * @var string
     */
    protected $prenom = '';

    /**
     * nom
     *
     * @var string
     */
    protected $nom = '';

    /**
     * tel
     *
     * @var string
     */
    protected $tel = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * adresse
     *
     * @var string
     */
    protected $adresse = '';

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
     * photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * organisme
     *
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme
     */
    protected $organisme = null;

    /**
     * fonction
     *
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction
     */
    protected $fonction = null;

    /**
     * service
     *
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service
     */
    protected $service = null;

    /**
     * Returns the prenom
     *
     * @return string $prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Sets the prenom
     *
     * @param string $prenom
     * @return void
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Returns the nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Returns the organisme
     *
     * @return \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme $organisme
     */
    public function getOrganisme()
    {
        return $this->organisme;
    }

    /**
     * Sets the organisme
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme $organisme
     * @return void
     */
    public function setOrganisme(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme $organisme)
    {
        $this->organisme = $organisme;
    }

    /**
     * Returns the fonction
     *
     * @return \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction $fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Sets the fonction
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction $fonction
     * @return void
     */
    public function setFonction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction $fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * Returns the service
     *
     * @return \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service $service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets the service
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service $service
     * @return void
     */
    public function setService(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service $service)
    {
        $this->service = $service;
    }
}
