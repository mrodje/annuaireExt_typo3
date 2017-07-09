<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Matthias Rodier <matthias.rodier@etu.u-bordeaux.fr>
 */
class ContactControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Controller\ContactController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MatthiasRodier\AnnuaireMatthiasRodier\Controller\ContactController::class)
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
    public function listActionFetchesAllContactsFromRepositoryAndAssignsThemToView()
    {

        $allContacts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $contactRepository = $this->getMockBuilder(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository\ContactRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $contactRepository->expects(self::once())->method('findAll')->will(self::returnValue($allContacts));
        $this->inject($this->subject, 'contactRepository', $contactRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('contacts', $allContacts);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenContactToView()
    {
        $contact = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('contact', $contact);

        $this->subject->showAction($contact);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenContactToContactRepository()
    {
        $contact = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact();

        $contactRepository = $this->getMockBuilder(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository\ContactRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $contactRepository->expects(self::once())->method('add')->with($contact);
        $this->inject($this->subject, 'contactRepository', $contactRepository);

        $this->subject->createAction($contact);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenContactToView()
    {
        $contact = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('contact', $contact);

        $this->subject->editAction($contact);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenContactInContactRepository()
    {
        $contact = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact();

        $contactRepository = $this->getMockBuilder(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository\ContactRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $contactRepository->expects(self::once())->method('update')->with($contact);
        $this->inject($this->subject, 'contactRepository', $contactRepository);

        $this->subject->updateAction($contact);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenContactFromContactRepository()
    {
        $contact = new \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact();

        $contactRepository = $this->getMockBuilder(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository\ContactRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $contactRepository->expects(self::once())->method('remove')->with($contact);
        $this->inject($this->subject, 'contactRepository', $contactRepository);

        $this->subject->deleteAction($contact);
    }
}
