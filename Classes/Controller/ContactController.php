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
     * @param MatthiasRodier\AnnuaireMatthiasRodier\SearchHandler $searchHandler
     * @return void
     */
    public function listAction(MatthiasRodier\AnnuaireMatthiasRodier\SearchHandler $searchHandler = null)
    {
        if ($searchHandler != null) {
            $contacts = $this->contactRepository->findBySearch($searchHandler->getSearch());
        } else {
            $contacts = $this->contactRepository->findAll();
        }
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
        $this->view->render();
    }
}
