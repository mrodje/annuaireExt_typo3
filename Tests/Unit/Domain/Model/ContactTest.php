<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 */
class ContactTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPrenomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrenom()
        );

    }

    /**
     * @test
     */
    public function setPrenomForStringSetsPrenom()
    {
        $this->subject->setPrenom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'prenom',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );

    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTel()
        );

    }

    /**
     * @test
     */
    public function setTelForStringSetsTel()
    {
        $this->subject->setTel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );

    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAdresseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdresse()
        );

    }

    /**
     * @test
     */
    public function setAdresseForStringSetsAdresse()
    {
        $this->subject->setAdresse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adresse',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCpReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCp()
        );

    }

    /**
     * @test
     */
    public function setCpForStringSetsCp()
    {
        $this->subject->setCp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVilleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVille()
        );

    }

    /**
     * @test
     */
    public function setVilleForStringSetsVille()
    {
        $this->subject->setVille('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ville',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );

    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOrganismeReturnsInitialValueForOrganisme()
    {
        self::assertEquals(
            null,
            $this->subject->getOrganisme()
        );

    }

    /**
     * @test
     */
    public function setOrganismeForOrganismeSetsOrganisme()
    {
        $organismeFixture = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme();
        $this->subject->setOrganisme($organismeFixture);

        self::assertAttributeEquals(
            $organismeFixture,
            'organisme',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFonctionReturnsInitialValueForFonction()
    {
        self::assertEquals(
            null,
            $this->subject->getFonction()
        );

    }

    /**
     * @test
     */
    public function setFonctionForFonctionSetsFonction()
    {
        $fonctionFixture = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction();
        $this->subject->setFonction($fonctionFixture);

        self::assertAttributeEquals(
            $fonctionFixture,
            'fonction',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getServiceReturnsInitialValueForService()
    {
        self::assertEquals(
            null,
            $this->subject->getService()
        );

    }

    /**
     * @test
     */
    public function setServiceForServiceSetsService()
    {
        $serviceFixture = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service();
        $this->subject->setService($serviceFixture);

        self::assertAttributeEquals(
            $serviceFixture,
            'service',
            $this->subject
        );

    }
}
