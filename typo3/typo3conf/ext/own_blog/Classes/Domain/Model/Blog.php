<?php
namespace Pi\OwnBlog\Domain\Model;


/***
 *
 * This file is part of the "Blog" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 
 *
 ***/
/**
 * Blog
 */
class Blog extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Name des Eintrag Erstellers
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Veröffentlichungsdatum
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $date = null;

    /**
     * Blog-Kategorie
     * 
     * @var string
     */
    protected $category = '';

    /**
     * Blogtext
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $blogtext = '';

    /**
     * Bild zum einbinden
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $picture = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the category
     * 
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Returns the blogtext
     * 
     * @return string $blogtext
     */
    public function getBlogtext()
    {
        return $this->blogtext;
    }

    /**
     * Sets the blogtext
     * 
     * @param string $blogtext
     * @return void
     */
    public function setBlogtext($blogtext)
    {
        $this->blogtext = $blogtext;
    }

    /**
     * Returns the picture
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets the picture
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }
}
