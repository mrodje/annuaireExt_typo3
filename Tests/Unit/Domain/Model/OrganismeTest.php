<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 */
class OrganismeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRaisonSocialeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRaisonSociale()
        );

    }

    /**
     * @test
     */
    public function setRaisonSocialeForStringSetsRaisonSociale()
    {
        $this->subject->setRaisonSociale('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'raisonSociale',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAdressePostaleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdressePostale()
        );

    }

    /**
     * @test
     */
    public function setAdressePostaleForStringSetsAdressePostale()
    {
        $this->subject->setAdressePostale('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adressePostale',
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
    public function getFaxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFax()
        );

    }

    /**
     * @test
     */
    public function setFaxForStringSetsFax()
    {
        $this->subject->setFax('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fax',
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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSiretReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSiret()
        );

    }

    /**
     * @test
     */
    public function setSiretForStringSetsSiret()
    {
        $this->subject->setSiret('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'siret',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLogoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getLogo()
        );

    }

    /**
     * @test
     */
    public function setLogoForFileReferenceSetsLogo()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setLogo($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'logo',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHorairesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHoraires()
        );

    }

    /**
     * @test
     */
    public function setHorairesForStringSetsHoraires()
    {
        $this->subject->setHoraires('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'horaires',
            $this->subject
        );

    }
}
