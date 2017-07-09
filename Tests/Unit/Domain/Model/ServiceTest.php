<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 */
class ServiceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Service();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLibelleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLibelle()
        );

    }

    /**
     * @test
     */
    public function setLibelleForStringSetsLibelle()
    {
        $this->subject->setLibelle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'libelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBatimentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBatiment()
        );

    }

    /**
     * @test
     */
    public function setBatimentForStringSetsBatiment()
    {
        $this->subject->setBatiment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'batiment',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBureauReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBureau()
        );

    }

    /**
     * @test
     */
    public function setBureauForStringSetsBureau()
    {
        $this->subject->setBureau('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bureau',
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
