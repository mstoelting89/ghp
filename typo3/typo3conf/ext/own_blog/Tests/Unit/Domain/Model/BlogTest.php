<?php
namespace Pi\OwnBlog\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class BlogTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Pi\OwnBlog\Domain\Model\Blog
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pi\OwnBlog\Domain\Model\Blog();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForStringSetsCategory()
    {
        $this->subject->setCategory('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBlogtextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBlogtext()
        );
    }

    /**
     * @test
     */
    public function setBlogtextForStringSetsBlogtext()
    {
        $this->subject->setBlogtext('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'blogtext',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPictureReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPicture()
        );
    }

    /**
     * @test
     */
    public function setPictureForFileReferenceSetsPicture()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPicture($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'picture',
            $this->subject
        );
    }
}
