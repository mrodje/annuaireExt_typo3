<?php
namespace MatthiasRodier\AnnuaireMatthiasRodier;

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
 * SearchHandler
 */
class SearchHandler
{
    /**
     * search
     *
     * @var string
     */
    protected $search;

    /**
     * getSearch
     *
     * @return string
     */
    public function getSearch()
    {
      return $this->search;
    }

    /**
     * setSearch
     *
     * @param string $mySearch
     */
    public function setSearch($mySearch)
    {
      $this->search = $mySearch;
    }

}
