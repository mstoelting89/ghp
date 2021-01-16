<?php
namespace Michael\PiGhp\Domain\Model;


/***
 *
 * This file is part of the "ghp_plugin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021
 *
 ***/
/**
 * Guitar Hears Project Plugin
 */
class GuitarHeartsProject extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $title = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
