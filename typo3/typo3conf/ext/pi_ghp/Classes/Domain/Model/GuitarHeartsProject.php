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
     * fade_in
     *
     * @var string
     */
    protected $fade_in = '';

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the fade_in
     *
     * @return string $fade_in
     */
    public function getFade_in()
    {
        return $this->fade_in;
    }

    /**
     * Sets the fade_in
     *
     * @param string $fade_in
     * @return void
     */
    public function setFade_in($fade_in)
    {
        $this->fade_in = $fade_in;
    }
}
