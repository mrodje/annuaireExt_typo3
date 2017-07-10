<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier\Domain\Repository;

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
 * The repository for Contacts
 */
class ContactRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $search
     */
    public function findBySearch(string $search)
    {
        $query = $this->createQuery();
        $query->matching($query->logicalOr($query->like("nom", "%".$search."%"), $query->like("prenom", "%".$search."%")));
        return $query->execute();
    }
}
