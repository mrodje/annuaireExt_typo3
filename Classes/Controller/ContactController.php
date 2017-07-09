<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Controller;
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
 * ContactController
 */
class ContactController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * contactRepository
     *
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $contacts = $this->contactRepository->findAll();
        $this->view->assign('contacts', $contacts);
    }

    /**
     * action show
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact
     * @return void
     */
    public function showAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact)
    {
		$this->view->assign('contact', $contact);
    }

    /**
     * action create
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $newContact
     * @return void
     */
    public function createAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $newContact)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->contactRepository->add($newContact);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact
     * @ignorevalidation $contact
     * @return void
     */
    public function editAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }

    /**
     * action update
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact
     * @return void
     */
    public function updateAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->contactRepository->update($contact);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact
     * @return void
     */
    public function deleteAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Contact $contact)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->contactRepository->remove($contact);
        $this->redirect('list');
    }
}
