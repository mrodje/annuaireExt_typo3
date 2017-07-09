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
 * OrganismeController
 */
class OrganismeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * organismeRepository
     *
     * @var \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository\OrganismeRepository
     * @inject
     */
    protected $organismeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $organismes = $this->organismeRepository->findAll();
        $this->view->assign('organismes', $organismes);
    }

    /**
     * action show
     *
     * @param \MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme $organisme
     * @return void
     */
    public function showAction(\MatthiasRodier\AnnuaireMatthiasRodier\Domain\Model\Organisme $organisme)
    {
        $this->view->assign('organisme', $organisme);
    }
}
