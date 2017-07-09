<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 */
class FonctionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Fonction();
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
    public function getResponsableReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getResponsable()
        );

    }

    /**
     * @test
     */
    public function setResponsableForBoolSetsResponsable()
    {
        $this->subject->setResponsable(true);

        self::assertAttributeEquals(
            true,
            'responsable',
            $this->subject
        );

    }
}
