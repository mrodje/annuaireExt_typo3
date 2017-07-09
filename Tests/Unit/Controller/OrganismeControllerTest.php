<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 */
class OrganismeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Controller\OrganismeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MatthiasRodier\AnnuaireMatthiasRodier\Controller\OrganismeController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOrganismesFromRepositoryAndAssignsThemToView()
    {

        $allOrganismes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $organismeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $organismeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOrganismes));
        $this->inject($this->subject, 'organismeRepository', $organismeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('organismes', $allOrganismes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOrganismeToView()
    {
        $organisme = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('organisme', $organisme);

        $this->subject->showAction($organisme);
    }
}
